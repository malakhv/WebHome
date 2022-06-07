<?php

/**
 * The simple connection to database.
 * */
class SimpleConnection {

    var $host = '';             // The database host
    var $db = '';               // The database name
    var $connection = null;     // The connection object
    var $connected  = false;    // Connected or not?

    function __construct($host, $db) {
        $this->host = $host;
        $this->db = $db;
    }

    // Close current connection.
    function close()
    {
      if($this->connected && $this->connection != null) {
        mysql_close($this->connection);
      }
      $this->connection = null;
      $this->connected = false;
    }
    
    // Open connection to the database server.
    function open($user, $password)
    {
      $this->close();
      $this->connection = mysql_connect($this->host, $user, $password);
      $this->connected = (boolean) $this->connection;
      return $this->connected;
    }

    // Select the current database.
    function selectCurrent()
    {
      if($this->connected)
        return (boolean) mysql_select_db($this->db, $this->connection);
      else
        return false;
    }

    // Select the specified database.
    function select($db)
    {
      $this->db = $db;
      return $this->select();
    }
}

/**
 * The simple query to database.
 * */
class SimpleQuery extends SimpleConnection {

    var $sql = null;
    var $result = null;
    var $row;
    var $eof = true;
    var $count = 0;
    var $fields = array();

    function free() {
        $eof = true;
        $count = 0;
        $fieldCount = 0;
        unset($fields);
        if(is_resource($this->result)) {
            mysql_free_result($this->result);
        }            
        $this->result = null;
        $this->row = null;
        $sql = null;
    }

    function close()
    {
      $this->free();
      parent::close();
    }

    function next() //true - данные есть, false - данных нету.
    {
      if(!$this->connected) return false;
      $this->row = mysql_fetch_object($this->result);
      $this->eof = (boolean) !$this->row;
      return !$this->eof;
    }

    function first()
    {
      $this->eof = true;
      if($this->count != 0)
      {
        mysql_data_seek($this->result, 0);
        return $this->next();
      }
    }

    function get($field) {
        if ($this->row != null) {
            return $this->row->$field;
        } else {
            return null;
        }
    }

    function fieldByIndex($index) {
        if ($this->fields != null && ($index < 0 || $index > count($fields) - 1)) {
            return $this->fields[$index]->name;
        } else {
            return null;
        }
    }

    function valueByIndex($index) {
        $f = $this->fieldByIndex($index);
        if ($f != null) {
            return $this->get($f);
        } else {
            return null;
        }
    }

    function execSQL($sql = '') // true - выполнено успешно, false - нет.
    {
      $this->free();
      if(!$this->connected) return false;
      if($sql != '') $this->sql = $sql;
      $this->result = mysql_query($this->sql, $this->connection);
      if((boolean) $this->result)
      {
        // Количество записей
        $this->count = mysql_num_rows($this->result);
        // Формирование списка полей
        $i = 0;
        while($i < mysql_num_fields($this->result))
        {
          $meta = mysql_fetch_field($this->result, $i);
          if($meta):
            $this->fields[$i] = $meta;
          endif;
          $i++;
        }
      }
      $this->eof = $this->count == 0;
      return (boolean) $this->result;
    }
}

class Table extends SimpleQuery {

    var $table = null;

    function __construct($host, $db, $table) {
        parent::__construct('127.0.0.1', 'beer_hub_db');
        $this->table = $table;
    }

    // Query all data from current table.
    function queryAll() {
        if ($this->hasTable()) {
            return $this->execSQL('select * from '.$this->table);
        } else {
            return false;
        }
    }

    function hasTable() {
        return (boolean) $this->table;
    }

    function select() {
        return parent::selectCurrent();
    }

    function openTable() {
        return $this->open() && $this->select();
    }

}

class BeerHunbTable extends Table {

    function __construct($table) {
        parent::__construct('127.0.0.1', 'beer_hub_db', $table);
    }

    function open() {
        return parent::open('test_user','');
    }
}

class BeerTable extends BeerHunbTable {

    function __construct() {
        parent::__construct('beer');
    }
}
?>
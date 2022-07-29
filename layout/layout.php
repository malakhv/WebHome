<?php

# Make a page header with specific title, keywords and description
function MakePageHeader($title, $theme = 'red' $keywords = '', $description = '') {
    echo '<head>';
    echo '<meta name="keywords" content="'.$keywords.'" />';
    echo '<meta name="description" content="'.$description.'" />';
    echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';
    echo '<link href="layout/'.$theme.'/style.css" rel="stylesheet" type="text/css" media="screen" />';
    echo '<link rel="icon" href="/media/favicon.png" type="image/png">';
    echo '<link rel="shortcut icon" href="/media/favicon.png" type="image/png">';
    echo '<title>'.$title.'</title>';
    echo '</head>';
}

?>

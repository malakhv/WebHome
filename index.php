<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<!-- The page header -->
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    	<title>Mikhan's Home</title>
	</head>

<body>

	<div id="wrapper">
		
		<!-- Include #header div -->
		<?php include "inc/header.inc"; ?>
		<!-- Include #menu div -->
		<?php include "inc/menu.inc"; ?>

        <!-- Page content -->
        <div id="page"><div id="content">
            <!-- Welcome -->
            <?php include "inc/home/welcome.htm"; ?>
            <!-- About me -->
            <?php include "inc/home/about_me.htm"; ?>
            <!-- About this site -->
            <?php include "inc/home/about_site.htm"; ?>
			<!-- Contacts -->
			<?php include "inc/home/about_contacts.htm"; ?>
        </div><div style="clear: both;">&nbsp;</div></div>

    </div>

    <!-- Include #footer div -->
    <?php include "inc/footer.htm"; ?>

</body></html>
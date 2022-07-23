<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<!-- The page header -->
	<head>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    	<link rel="icon" href="/media/favicon.ico" type="image/x-icon">
    	<link rel="shortcut icon" href="/media/favicon.ico" type="image/x-icon">
    	<title>Mikhail's Home in Web</title>
	</head>

<body>

	<div id="wrapper">
		
		<!-- Include #header div -->
		<?php include "layout/header.htm"; ?>
		<!-- Include #menu div -->
		<?php include "layout/menu.htm"; ?>

        <!-- Page content -->
        <div id="page"><div id="content">
            <!-- Welcome -->
            <?php include "content/home/welcome.htm"; ?>
            <!-- About me -->
			<?php include "content/home/about.htm"; ?>
			<!-- Contacts -->
			<?php include "content/home/contacts.htm"; ?>
            <!-- Copyright -->
            <?php include "content/home/copyright.htm"; ?>
        </div><div style="clear: both;">&nbsp;</div></div>

    </div>

    <!-- Include footer -->
    <?php include "layout/footer.htm"; ?>

</body></html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Common things to make a pages -->
<?php include "layout/layout.php"; ?>

<!-- The page header -->
<?php MakeHtmlHead("Mikhail's Software") ?>

<body>

    <div id="wrapper">
		
        <!-- Page header (and menu) -->
        <?php MakePageHeader(); ?>

        <!-- Page content -->
        <div id="page"><div id="content">
            <?php include "content/software/sw.htm"; ?>
            <?php include "content/software/linux.htm"; ?>
        </div><div style="clear: both;">&nbsp;</div></div>
	
    </div>

    <!-- Page footer -->
    <?php MakePageFooter(); ?>

</body></html>
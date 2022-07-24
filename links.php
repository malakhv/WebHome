<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Common things to make a pages -->
<?php include "layout/layout.php"; ?>

<!-- The page header -->
<?php MakePageHeader("Mikhail's Links") ?>

<body>

	<div id="wrapper">
		
		<!-- Include #header div -->
		<?php include "layout/header.htm"; ?>
		<!-- Include #menu div -->
		<?php include "layout/menu.htm"; ?>

        <!-- Page content -->
        <div id="page"><div id="content">
            <!-- Content -->
            <?php include "content/links/content.htm"; ?>
        </div><div style="clear: both;">&nbsp;</div></div>

	</div>

    <!-- Include footer -->
    <?php include "layout/footer.htm"; ?>

</body></html>

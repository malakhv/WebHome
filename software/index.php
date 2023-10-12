<!DOCTYPE html>

<html>

    <!-- The page html header -->
    <?php MakeHtmlHead('Mikhail Malakhov - Projects'); ?>

<body><div id="content">

    <!-- Header -->
    <?php InsertPageHeader(); ?>
    <!-- Menu -->
    <?php InsertMenu(); ?>

    <!-- Page content -->
    <?php
        IncludeContent('software/content.htm');
    ?>

    <!-- Footer -->
    <?php InsertPageFooter(); ?>

</div></body></html>

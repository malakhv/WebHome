<!DOCTYPE html>

<html>

    <!-- The page html header -->
    <?php MakeHtmlHead(); ?>

<body><div id="content">

    <!-- Header -->
    <?php InsertPageHeader(); ?>
    <!-- Menu -->
    <?php InsertMenu(); ?>

    <!-- Page content -->
    <?php
        IncludeContent('home/welcome.htm');
        IncludeContent('home/about.htm');
        IncludeContent('home/contacts.htm');
        IncludeContent('home/copyright.htm');
    ?>

    <!-- Footer -->
    <?php InsertPageFooter(); ?>

</div></body></html>

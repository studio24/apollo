<!doctype html>
<html lang="en" class="no-js">

<head>

    <?php // Charset: Must be in first 1024 bytes of the document and before title  ?>
    <meta charset="utf-8">

    <?php // Title: To avoid a potential encoding-related security issue in IE  ?>
    <title>Apollo</title>

    <?php // Compatibility: https://msdn.microsoft.com/en-us/library/cc288325.aspx  ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php // Description: The description meta tag provides a short description of the page (Including Open Graph support which needs to be before name attribute)  ?>
    <meta property="og:description" name="description" content="The living content- and style guide for Studio 24 by Studio 24."/>

    <?php // Viewport:  Make it zoomable ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // Add a `js` class to the HTML element to help avoid Flash Of Unstyled Content (FOUC) ?>
    <?php // We target the HTML element because WordPress already adds lots of classes to `body` ?>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

    <?php // Font Face Observer script to check when web fonts are loaded before applying them via CSS ?>
    <?php // Refer to https://github.com/bramstein/fontfaceobserver ?>
    <?php require_once('../_includes/scripts__header.html'); ?>

    <?php // Styles ?>
    <?php require_once('../_includes/styles.php') ?>

    <?php // Open Graph tags (description is included below standard title ?>
    <?php // https://developers.facebook.com/tools/debug/sharing/ ?>
    <?php // https://cards-dev.twitter.com/validator ?>
    <meta property="og:url" content="http://apollo.s24.net/"/>
    <meta property="og:image" content="http://apollo.s24.net/dist/assets/images/apollo.png"/>

    <?php // Duplicate the standard title tag because Twitter doesn't understand it ?>
    <meta property="og:title" content="Apollo"/>
    <?php // Replace `summary_large_image` with `summary` for a smaller Twitter card ?>
    <meta name="twitter:card" content="summary_large_image"/>

</head>



<body>

<div class="wrap">
    <?php // Start main ?>
    <main>
        <h1>Patterns</h1>
        <p>Common components and functionality:</p>
        <ul>
            <li><a href="sticky-footer.php">Sticky footer</a></li>
            <li><a href="tables.php">Data tables</a></li>
            <li><a href="forms.php">Forms</a></li>
	        <li><a href="quotes.php">Quotes</a></li>
            <li><a href="icons.php">Icons</a></li>
	        <li><a href="breadcrumbs.php">Breadcrumbs</a></li>
	        <li><a href="cards.php">Cards</a></li>
	        <li><a href="pagination.php">Pagination</a></li>
            <li><a href="collapsibles.php">Collapsible sections</a></li>
            <li><a href="tabs.php">Tabbed sections</a></li>
        </ul>
        <p>Inspiration and ideas:</p>
        <ul>
            <li><a href="page-header.php">Page header</a></li>
        </ul>
    </main>
    <?php // End main ?>
</div>
<footer class="global-footer">
	Footer content goes here
</footer>



<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>

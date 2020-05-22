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

    <main>
        <h1>Quotes</h1>
        <h2>Basic blockquote</h2>
        <blockquote>
            <p>Before you judge a man, walk a mile in his shoes. After that who cares? He’s a mile away and you’ve got his shoes!</p>
        </blockquote>

        <h2>Blockquote with footer</h2>
        <blockquote>
            <p>Before you judge a man, walk a mile in his shoes. After that who cares? He’s a mile away and you’ve got his shoes!</p>
            <footer>Billy Connolly</footer>
        </blockquote>

        <h2>Blockquote as a figure</h2>
	    <p>This could be used a slide in a carousel of quotes/testimonials.</p>
        <figure class="quote">
            <blockquote>
	            <p>Before you judge a man, walk a mile in his shoes. After that who cares? He’s a mile away and you’ve got his shoes!</p>
            </blockquote>
            <figcaption>Billy Connolly</figcaption>
        </figure>
    </main>

</div>
<footer class="global-footer">
    Footer content goes here
</footer>


<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>
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
    <style>
	    .l-cover {
            background:
                linear-gradient(#ffdc00, #ffdc00) content-box,
                linear-gradient(#b10dc9, #b10dc9) padding-box;
        }

	    .ex1 {
		    background:
			    linear-gradient(#7fdbff, #7fdbff) content-box,
			    linear-gradient(#b10dc9, #b10dc9) padding-box;
	    }

        .l-center {
            margin-bottom: auto;
            margin-top: auto !important;
        }
    </style>

</head>



<body>

<div class="wrap">
    <?php // Start main ?>
    <main>
        <h1>Layout: Cover</h1>
        <p>The cover layout uses Flexbox to vertically centre content, by having a column Flexbox context and a minimum height set. It also allows the addition of header and/or footer content to accompany the principal piece of content, without having to adapt the CSS.</p>
        <p>The following examples illustrate how the cover layout works:</p>
        <ul>
	        <li>The principal item of content to be centered within the cover needs to have the class <code>.principal</code> applied to it. This gives it auto top and bottom margins.</li>
	        <li>In the first example, the utility class <code>.u-center</code> is added to horizontally center the principal item.</li>
            <li>In the second example, a nested <a href="center.php">center layout</a> provides the horizontal centering.</li>
	        <li>The final example illustrates the addition of optional header and footer content.</li>
        </ul>
        <div class="l-cover">
            <h2 class="u-center principal ex1">The principal content</h2>
        </div>

        <div class="l-cover">
            <div class="l-center principal ex1">
	            <h2 class="u-center principal ex1">The principal content</h2>
            </div>
        </div>

	    <div class="l-cover">
		    <p class="u-center ex1">We are proud to present...</p>
		    <h2 class="u-center principal ex1">The principal content</h2>
            <p class="u-center ex1">Find out more...</p>
	    </div>
    </main>
    <?php // End main ?>
</div>
<footer class="global-footer">
	Footer content goes here
</footer>



<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>
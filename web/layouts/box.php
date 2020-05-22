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
        .l-box {
            background:
                linear-gradient(#7fdbff, #7fdbff) content-box,
                linear-gradient(#b10dc9, #b10dc9) padding-box;
        }
	    .ex2 {
		    align-self: flex-start;
	    }
    </style>

</head>



<body>

<div class="wrap">
    <?php // Start main ?>
    <main>
        <h1>Layout: Box</h1>
	    <p>The box should have borders and/or padding on all sides, or none at all. Otherwise it's not a box, but something more specific.</p>
        <div class="l-box">
	        <p>This is an example of the default box layout. It uses the class <code>.l-box</code></p>
	        <p>It has an even border and padding on all sides.</p>
	        <p>Because its parent - <code>main</code> - uses Flexbox in the column direction, the box stretches full width.</p>
        </div>
	    <div class="l-box ex2">
		    <p>To limit the width of a box to just its content, use <code>align-self: flex-start;</code></p>
	    </div>
	    <div class="l-box l-box--no-padding">
		    <p>For a box without padding, use the modifier class <code>.l-box--no-padding</code></p>
	    </div>
	    <div class="l-box l-box--no-border">
		    <p>For a box without a border, use the modifier class <code>.l-box--no-border</code></p>
		    <p>High contrast themes tend to eliminate background-color. If there is no border set on the box, we need to apply a transparent outline to maintain the box shape. The negative outline-offset moves the outline inside the perimeter so it behaves like a border and doesn't add to the overall size.</p>
	    </div>
	    <div class="l-box l-box--no-padding l-box--no-border">
		    <p>This box has neither border nor padding.</p>
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

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

    <div class="l-cover hero">
	    <div class="l-cluster global-header">
		    <div>
			    <a href="#1" class="logo">
				    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 40"><path d="M30.32 12.25h3V26.7h-3zm4.68 9.5A5.25 5.25 0 1140.22 27 5.18 5.18 0 0135 21.75zm7.52 0a2.28 2.28 0 10-2.28 2.34 2.22 2.22 0 002.26-2.34z"/><path d="M57.31 16.8v9.41c0 3.32-2.6 4.73-5.23 4.73a5 5 0 01-4.69-2.4l2.53-1.46a2.27 2.27 0 002.26 1.25 2 2 0 002.24-2.12v-.91a3.53 3.53 0 01-2.89 1.28 5 5 0 010-10 3.53 3.53 0 012.89 1.28v-1zm-2.89 4.75a2.4 2.4 0 10-2.4 2.3 2.24 2.24 0 002.4-2.3zm4.58.2A5.25 5.25 0 1164.24 27 5.19 5.19 0 0159 21.75zm7.52 0a2.28 2.28 0 10-2.27 2.34 2.22 2.22 0 002.26-2.34zM15.45 9.65v-4H2.05v29.2h13.4V30.6a10.35 10.35 0 010-20.7zm0 0v20.7a10.35 10.35 0 000-20.7z"/><circle cx="73.52" cy="14.54" r="2.2"/></svg>
			    </a>
			    <nav class="l-cluster">
				    <ul class="clean-list">
					    <li><a href="#1">Nav item</a></li>
					    <li><a href="#2">Nav item</a></li>
					    <li><a href="#3">Nav item</a></li>
					    <li><a href="#4">Nav item</a></li>
					    <li><a href="#5">Nav item</a></li>
				    </ul>
			    </nav>
		    </div>
	    </div>
        <h1 class="principal u-center">A hero panel</h1>
	    <p class="u-center">Find out more...</p>
    </div>

	<main>
		<h2>What's going on?</h2>
		<ul>
			<li>We have used the <a href="../layouts/cover.php">cover layout</a> to create a hero area at the top of the page.</li>
			<li>Nested inside the cover layout is a <a href="../layouts/cluster.php">cluster layout</a> for the global header. This uses <code>justify-content: space-between</code> to separate the logo and navigation.</li>
			<li>Another cluster layout is nested inside the global header to create the main navigation.</li>
			<li>The <code>h1</code> and &lsquo;footer&rsquo; portion of the hero are each centered using a utility class.</li>
		</ul>
	</main>

</div>
<footer class="global-footer">
	Footer content goes here
</footer>



<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>

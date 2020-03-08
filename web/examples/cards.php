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
    <?php require_once( '../delete-this-folder-in-wp/_includes/scripts__header.html' ); ?>

    <?php // Styles ?>
    <link rel="stylesheet" href="/dist/assets/styles/styles.min.css" type="text/css" media="screen"/>

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
    <main class="l-center">
        <h1>Example: Cards</h1>
        <div class="l-switcher">
            <ul class="card-list">
	            <li>
		            <article class="card">
		                <div class="l-box l-box--no-border card__text">
			                <h2><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-1">Unique card title 1</a></h2>
		                    <p>Here is all the descriptive teaser text for my card.</p>
			                <span class="button button--primary" aria-hidden="true" id="unique-card-title-1">Read more</span>
		                </div>
			            <div class="l-frame l-frame--16-9">
				            <img src="/dist/assets/images/sherlock.jpg" alt>
			            </div>
		            </article>
	            </li>
	            <li>
		            <article class="card">
			            <div class="l-box l-box--no-border card__text">
				            <h2><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-2">Unique card title 2</a></h2>
				            <p>Here is all the descriptive teaser text for my card. But this one has significantly more text content inside it.</p>
				            <span class="button button--primary" aria-hidden="true" id="unique-card-title-2">Read more</span>
			            </div>
			            <div class="l-frame l-frame--16-9">
				            <img src="/dist/assets/images/sherlock.jpg" alt>
			            </div>
		            </article>
	            </li>
	            <li>
		            <article class="card">
			            <div class="l-box l-box--no-border card__text">
				            <h2><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-3">Unique card title 3</a></h2>
				            <p>Here is all the descriptive teaser text for my card.</p>
				            <span class="button button--primary" aria-hidden="true" id="unique-card-title-3">Read more</span>
			            </div>
			            <div class="l-frame l-frame--16-9">
				            <img src="/dist/assets/images/sherlock.jpg" alt>
			            </div>
		            </article>
	            </li>
	            <li>
		            <article class="card">
			            <div class="l-box l-box--no-border card__text">
				            <h2><a class="card__link" href="https://www.studio24.net" aria-describedby="unique-card-title-4">Unique card title 4</a></h2>
				            <p>Here is all the descriptive teaser text for my card.</p>
				            <span class="button button--primary" aria-hidden="true" id="unique-card-title-4">Read more</span>
			            </div>
			            <div class="l-frame l-frame--16-9">
				            <img src="/dist/assets/images/sherlock.jpg" alt>
			            </div>
		            </article>
	            </li>
            </ul>
        </div>
    </main>
    <?php // End main ?>
</div>
<div class="global-footer">
    Footer content goes here
</div>



<?php require_once( '../delete-this-folder-in-wp/_includes/scripts__footer.html' ); ?>

</body>
</html>

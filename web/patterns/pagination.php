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
        <h1>Pagination</h1>
	    <h2>Text only</h2>
        <nav class="l-cluster" aria-label="pagination" role="navigation">
            <ul class="pagination">
	            <li>
		            <a href="1.html" class="pagination__item">
			            First
		            </a>
	            </li>
                <li>
                    <a href="1.html" class="pagination__item">
                        Previous
                    </a>
                </li>
	            <li>
		            <a href="1.html" class="pagination__item">
			            1
		            </a>
	            </li>
                <li>
                    <span class="pagination__item" aria-current="page">
                        2
                    </span>
                </li>
	            <li>
		            <a href="3.html" class="pagination__item">
			            3
		            </a>
	            </li>
	            <li>
		            <a href="3.html" class="pagination__item">
			            Next
		            </a>
	            </li>
	            <li>
		            <a href="9.html" class="pagination__item">
			            Last
		            </a>
	            </li>
            </ul>
        </nav>
	    <h2>With SVG icons</h2>
	    <nav class="l-cluster" aria-label="pagination" role="navigation">
		    <ul class="pagination">
			    <li>
				    <a href="1.html" class="pagination__item" aria-label="First">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path d="M3 3h3v18H3zm4 9l14 9V3z"></path></svg>
				    </a>
			    </li>
			    <li>
				    <a href="1.html" class="pagination__item" aria-label="Previous">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path d="M4 12l15-9v18z"/></svg>
				    </a>
			    </li>
			    <li>
				    <a href="1.html" class="pagination__item">
					    1
				    </a>
			    </li>
			    <li>
                    <span class="pagination__item" aria-current="page">
                        2
                    </span>
			    </li>
			    <li>
				    <a href="3.html" class="pagination__item">
					    3
				    </a>
			    </li>
			    <li>
				    <a href="3.html" class="pagination__item" aria-label="Next">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path d="M5 3v18l15-9z"/></svg>
				    </a>
			    </li>
			    <li>
				    <a href="9.html" class="pagination__item" aria-label="Last">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path d="M18 3h3v18H18zm-1 9L3 3V21z"></svg>
				    </a>
			    </li>
		    </ul>
	    </nav>
    </main>

</div>
<footer class="global-footer">
    Footer content goes here
</footer>


<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>
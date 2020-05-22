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
    <?php require_once('_includes/scripts__header.html'); ?>

    <?php // Styles ?>
    <?php require_once('_includes/styles.php') ?>

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
			<h1>Apollo <small>by Studio 24</small></h1>
			<div class="l-sidebar">
				<div>
					<div class="sidebar">
						<h2 class="h4"><a href="layouts/">Layouts</a></h2>
						<ul>
                            <li><a href="layouts/box.php">Box</a></li>
                            <li><a href="layouts/center.php">Center</a></li>
                            <li><a href="layouts/cluster.php">Cluster</a></li>
                            <li><a href="layouts/cover.php">Cover</a></li>
                            <li><a href="layouts/frame.php">Frame</a></li>
                            <li><a href="layouts/sidebar.php">Sidebar</a></li>
                            <li><a href="layouts/switcher.php">Switcher</a></li>
                        </ul>
						<h2 class="h4"><a href="patterns/">Patterns</a></h2>
						<ul>
							<li><a href="patterns/sticky-footer.php">Sticky footer</a></li>
							<li><a href="patterns/tables.php">Data tables</a></li>
							<li><a href="patterns/forms.php">Forms</a></li>
							<li><a href="patterns/quotes.php">Quotes</a></li>
							<li><a href="patterns/icons.php">Icons</a></li>
							<li><a href="patterns/breadcrumbs.php">Breadcrumbs</a></li>
							<li><a href="patterns/cards.php">Cards</a></li>
							<li><a href="patterns/pagination.php">Pagination</a></li>
							<li><a href="patterns/collapsibles.php">Collapsible sections</a></li>
							<li><a href="patterns/tabs.php">Tabbed sections</a></li>
						</ul>
                        <p>Inspiration and ideas:</p>
                        <ul>
                            <li><a href="patterns/page-header.php">Page header</a></li>
                        </ul>
					</div>
					<div class="not-sidebar">
						
						
						<h2>Getting started</h2>
                    	<ol>
                        	<li><a href="https://github.com/studio24/apollo/archive/v2.0-beta.1.zip">Download Apollo.</a></li>
                            <li>Copy <code>apollo/</code> folder and the files <code>.babelrc</code>, <code>.nvmrc</code>, <code>package.json</code> to the root of your project</li>
                        	<li>To build files run <code>nvm use && npm install && npm run build</code></li>
                    	</ol>
                        <p>Please note this is currently a beta release and the installation process will be refined before the final v2.0</p>
						<h2>Overview</h2>
            		    <p>The thinking here is drawn from the <i>Springer Nature Front End Playbook</i> approach. That is to say:</p>
            	        <ul>
            	            <li>Serve core CSS styles to all browsers for an accessible experience (perhaps not the most exciting, but it works)</li>
            	            <li>Use a CSS media query to cut the mustard and serve advanced CSS styles to modern browsers (plus IE10/11)</li>
            	            <li>Load JavaScript according to whether the advanced CSS styles have been applied to the site</li>
            	        </ul>
            		    <p>We believe this is in the best interests of all web users, and takes into account issues of performance for older browsers by giving them just what they need to make content accessible for users. We infer that users of older browsers may well have a device with less processing power, and so we simplify. We can progressively enhance the experience for users who are privileged to have access to more capable browsers and devices.</p>
    	       		    <h3>Points to bear in mind</h3>
            	        <p>There are some design patterns we have tended to follow in recent projects at Studio 24. These are:</p>
            		    <div class="l-box">
            			    <ol>
            				    <li>Limiting the content width to 90% of the viewport on small screens.</li>
            				    <li>Reducing this width to 80% of the viewport on tablet screens.</li>
            				    <li>Setting a max-width for content at 1300px</li>
            				    <li>Allowing certain elements to extend beyond these restrictions to fill the browser width (e.g. feature photography, full-width video)</li>
            			    </ol>
            		    </div>
                	    <p>It is worth bearing these points in mind for our base styles. For example, they will provide a nice margin on either side of text on smaller screens, keeping the text away from the very edges.</p>

                        <h2>Support</h2>
                        <p>The Apollo CSS framework is maintained by <a href="https://www.studio24.net/">Studio 24</a>.
                            If you’ve got any questions please <a href="https://www.studio24.net/contact/">get in touch</a>.
                            You can also review the <a href="https://github.com/studio24/apollo/tree/apollo-v2">Apollo GitHub repo</a>,
                            where you can submit bug reports or suggestions for improvements.
                        </p>
                    </div>
				</div>
			</div>
		</main>
        <?php // End main ?>
	</div>
	<footer class="global-footer">
		Footer content goes here
	</footer>



<?php require_once('_includes/scripts__footer.html'); ?>

</body>
</html>

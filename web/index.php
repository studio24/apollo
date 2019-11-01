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
    <?php require_once( 'delete-this-folder-in-wp/_includes/scripts__header.html' ); ?>

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

	<?php // Start main ?>
    <main class="stack stack-m">
        <h1>Overview</h1>
        <p>So, let’s see about getting some basic styles down for the reboot of <em>Apollo</em>. I’m going to need some paragraphs with some reasonably-looking text inside of them to try and create a base natural layout, so that I can accurately assess how these <strong>core</strong> styles are working.</p>
        <p>My thinking here is drawn from the Springer Nature Front End Playbook approach. That is to say:</p>
        <ul>
            <li>Serve core CSS styles to all browsers for an accessible experience (perhaps not the most exciting, but it works)</li>
            <li>Use a CSS media query to cut the mustard and serve advanced CSS styles to modern browsers (plus IE10/11)</li>
            <li>Load JavaScript according to whether the advanced CSS styles have been applied to the site</li>
        </ul>
        <p>I believe this is in the best interests of all web users, and takes into account issues of performance for older browsers by giving them just what they need to make content accessible for users. We infer that users of older browsers may well have a device with less processing power, and so we simplify. We can progressively enhance the experience for users who are priviledged to have access to more capable browsers and devices.</p>
        <h2>Points to bear in mind</h2>
        <p>There are certain design schemes that we have tended to follow in recent projects at Studio 24. These are:</p>
	    <div class="box">
		    <ol>
			    <li>Limiting the content width to 90% of the viewport on smaller screens.</li>
			    <li>Expanding this width to 80% of the viewport on mid-sized screens.</li>
			    <li>Setting a max-width for content at 1300px</li>
			    <li>Allowing certain elements to extend beyond these restrictions to fill the browser width (e.g. banner/hero components)</li>
		    </ol>
	    </div>
        <p>It is worth bearing these points in mind for our base styles, as they should provide a neater reading experience for users. For example, it will provide a nice margin on either side of text on smaller screens, keeping the text away from the very edges.</p>
        <p>By adjusting Apollo styles locally, I can test the resulting visual feel using <a href="https://www.browserstack.com/users/sign_in">Browserstack</a> and – when happy – push these changes into a separate branch on the Github Apollo repo.</p>
	</main>
	<?php // End main ?>

<?php require_once( 'delete-this-folder-in-wp/_includes/scripts__footer.html' ); ?>

</body>
</html>

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
        <h1>Tabbed sections or "Tabs"</h1>
        <p>We use the data attribute <code>data-component="tabs"</code> as a hook for our JavaScript, as this keeps things nicely separated from classes, which could more easily be overwritten.</p>
        <div class="component--tabs">
            <ul data-tabs>
                <li>
                    <a data-tabby-default href="#section1">Section 1</a>
                </li>
                <li>
                    <a href="#section2">Section 2</a>
                </li>
                <li>
                    <a href="#section3">Section 3</a>
                </li>
            </ul>
            <section id="section1">
                <h2>Section 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod, tortor nec pharetra ultricies, ante erat imperdiet velit, nec laoreet enim lacus a velit. <a href="#1">Nam luctus</a>, enim in interdum condimentum, nisl diam iaculis lorem, vel volutpat mi leo sit amet lectus. Praesent non odio bibendum magna bibendum accumsan.</p>
            </section>
            <section id="section2">
                <h2>Section 2</h2>
                <p>Nullam at diam nec arcu suscipit auctor non a erat. Sed et magna semper, eleifend magna non, facilisis nisl. Proin et est et lorem dictum finibus ut nec turpis. Aenean nisi tortor, euismod a mauris a, mattis scelerisque tortor. Sed dolor risus, varius a nibh id, condimentum lacinia est. In lacinia cursus odio a aliquam. Curabitur tortor magna, laoreet ut rhoncus at, sodales consequat tellus.</p>
            </section>
            <section id="section3">
                <h2>Section 3</h2>
                <p>Phasellus ac tristique orci. Nulla maximus <a href="#1">justo nec dignissim consequat</a>. Sed vehicula diam sit amet mi efficitur vehicula in in nisl. Aliquam erat volutpat. Suspendisse lorem turpis, accumsan consequat consectetur gravida, <a href="#1">pellentesque ac ante</a>. Aliquam in commodo ligula, sit amet mollis neque. Vestibulum at facilisis massa.</p>
            </section>
        </div>
    </main>

</div>
<footer class="global-footer">
	Footer content goes here
</footer>


<?php require_once('../_includes/scripts__footer.html'); ?>

<script src="../dist/assets/js/libraries/tabby.polyfills.min.js"></script>
<script>
	var tabs = new Tabby('[data-tabs]');
</script>

</body>
</html>
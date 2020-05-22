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
            background: #ffdc00;
        }
        .ex1 {
            background:
                linear-gradient(#7fdbff, #7fdbff) content-box,
                linear-gradient(#b10dc9, #b10dc9) padding-box;
            max-width: 600px;
        }
    </style>

</head>



<body>

<div class="wrap">
    <?php // Start main ?>
    <main>
        <h1>Layout: Cluster</h1>
        <p>The cluster suits any groups of elements that differ in length and are liable to wrap. Examples include groups of buttons at the end of forms, lists of tags, etc.</p>
        <p>The following example illustrates how the cluster layout works:</p>
        <ul>
            <li>A <a href="center.php">center layout</a> is contained within a <a href="box.php">box layout</a> (without a border or padding), purely to help with this example.</li>
            <li>The cluster layout is contained within the center layout.</li>
            <li>The cluster layout needs an inner container - in this example it's provided by a <code>ul</code>.</li>
            <li>The cluster items - <code>li</code> in this example - sit within the inner container. Each item has a margin on all sides. Their parent - the inner container - has a negative margin of the same size as the cluster items. This creates the even gaps between cluster items. The cluster layout uses <code>overflow: hidden;</code> to tidy up the edges.</li>
        </ul>
        <div class="l-box l-box--no-padding l-box--no-border">
            <div class="l-center ex1">
                <div class="l-cluster">
                    <ul class="clean-list">
                        <li><a href="#1" class="button">Item One</a></li>
                        <li><a href="#2" class="button">Item Two</a></li>
                        <li><a href="#3" class="button">Item Three</a></li>
                        <li><a href="#4" class="button">Item Four</a></li>
                        <li><a href="#5" class="button">Item Five</a></li>
                        <li><a href="#6" class="button">Item Six</a></li>
                        <li><a href="#7" class="button">Item Seven</a></li>
                    </ul>
                </div>
            </div>
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
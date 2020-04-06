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
    <style>
        .content {
            background: linear-gradient(#7fdbff, #7fdbff) content-box;
        }

        .l-switcher {
            background: #ffdc00;
        }
    </style>

</head>



<body>

<div class="wrap">
    <?php // Start main ?>
    <main>
        <h1>Layout: Switcher</h1>
        <p>The switcher layout switches a container with Flexbox between a horizontal and a vertical direction at a given, <strong>container-based</strong> breakpoint. No viewport media queries required, so it will nest nicely inside of other containers.</p>
        <p>It's a good choice for situations where each child item should be considered equal. Card components that advertise products usually share the same width, irrespective of orientation, otherwise one or more cards could be perceived as highlighted or featured in some way. Another use case could be for a set of numbered steps in a process, which is easier to understand if those steps are laid out along one horizontal or vertical line.</p>

        <div class="l-switcher">
            <div>
                <div class="content">Stuff</div>
                <div class="content">Stuff</div>
                <div class="content">Stuff</div>
            </div>
        </div>

        <p>There are certain caveats to note when customising the default switcher layout:</p>
        <ul>
            <li>When the flex container is less than 600px wide, child items are arranged vertically. Otherwise, child items are arranged horizontally. This container breakpoint may well need overriding depending on the use case.</li>
            <li>The number of columns in a row is two. This can be overridden by adjusting the min-width percentage.</li>
        </ul>
        <h2>A consideration for Internet Explorer 11</h2>
        <p>There must be no padding on the switcher child items themselves, otherwise the layout will break. To space content away from the edges, use nested elements with margin or padding.</p>

    </main>
    <?php // End main ?>
</div>
<div class="global-footer">
    Footer content goes here
</div>



<?php require_once( '../delete-this-folder-in-wp/_includes/scripts__footer.html' ); ?>

</body>
</html>
    <link rel="stylesheet" href="/dist/assets/styles/core.min.css" type="text/css" media="screen"/>
    <?php
    /**
     * Array of media queries to use with CSS cutting the mustard
     * Combine on one line for Edge compatibility
     * @see https://www.sitepoint.com/cutting-the-mustard-with-css-media-queries/
     */
    $mediaQueries = [
        'only screen and (-webkit-min-device-pixel-ratio:0) and (min-color-index:0)',
        '(-ms-high-contrast: none)',
        'only all and (min--moz-device-pixel-ratio:0) and (min-resolution: 3e1dpcm)',
    ] ?>
    <link rel="stylesheet" href="/dist/assets/styles/advanced.min.css" media="<?= implode(', ', $mediaQueries) ?>" id="advanced-stylesheet">

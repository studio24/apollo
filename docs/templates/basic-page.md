# Basic page

This example shows the minimum required for a basic page. It does not include:

- the complete [global navigation](../components/navigation.md)
- the [breadcrumbs component](../components/breadcrumbs.md)
- the complete list of site links for the [footer](../components/footer.md).
  
The beta banner is contained within `<div class="banner">` and can be removed when no longer required.

```
<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Page title</title>
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta property="og:description" name="description" content="Basic page prototype for the W3C website redesign"/>
	<meta property="og:image" name="image" content="/dist/assets/images/w3c-opengraph-image.png">
	
	<script src="/dist/assets/js/libraries/fontfaceobserver.js"></script>
	
	<script>
		let myFont = new FontFaceObserver('Noto Sans');

		Promise.all([myFont.load()]).then(function () {
			document.documentElement.className += " fonts-loaded";
		});
	</script>
	
	<link rel="stylesheet" href="/dist/assets/styles/core.css" media="screen"/>
	
	<!--
    CSS Mustard Cut
    Print (Edge doesn't apply to print otherwise)
    Edge, Chrome 39+, Opera 26+, Safari 9+, iOS 9+, Android ~5+, Android UCBrowser ~11.8+
    FF 47+
    -->
	<link rel="stylesheet" id="advanced-stylesheet" href="/dist/assets/styles/advanced.css" media="
        only print,
        only all and (pointer: fine), only all and (pointer: coarse), only all and (pointer: none),
        only all and (min--moz-device-pixel-ratio:0) and (display-mode:browser), (min--moz-device-pixel-ratio:0) and (display-mode:fullscreen)
    ">
    
    <link rel="stylesheet" href="/dist/assets/styles/print.css" media="print"/>
    
    <script>
		(function() {
			let linkEl = document.getElementById('advanced-stylesheet');
			if (window.matchMedia && window.matchMedia(linkEl.media).matches) {
				let head = document.querySelector('head');
				// Add main JS
				let jsMain = document.createElement('script');
				jsMain.src = 'dist/assets/js/main.js';
				jsMain.defer = true;
				head.appendChild(jsMain);
				// Update classname to show JS is available
				(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement);
			}
		})();
	</script>
</head>

<body>
    <a class="skip-link" href="#main">Skip to content</a>
    
    <div class="grid-wrap">
        <div class="wrap">
        
            <header class="global-header">
                <span role="status" aria-live="polite"></span>
                <div class="banner">
                    <div class="banner__inner l-center">
                        <img src="/dist/assets/svg/beta.svg" class="icon icon--beta" alt="Beta icon" role="img"/>
                        <p>This is a new website. <a href="https://github.com/w3c/w3c-website">Give feedback</a> to help us improve it.</p>
                    </div>
                </div>
                <nav id="lang-nav" aria-label="Language options">
                    <div class="l-center">
                        <div class="l-cluster">
                            <ul class="clean-list" role="list">
                                <li><a href="/zh" hreflang="zh-hans" lang="zh-hans">简体中文首页</a></li>
                                <li><a href="/ja" hreflang="ja" lang="ja">日本語ホームページ</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav id="global-nav" aria-label="Main">
                    <div class="global-nav__inner l-center">
                        <a class="logo-link" href="/">
                            <span class="logo">
                                <img src="/dist/assets/svg/w3c-logo.svg" alt="W3C logo" role="img"/>
                            </span>
                            <span class="visuallyhidden">W3C homepage</span>
                        </a>
                    </div>
                </nav>
            </header>
            
            [Breadcrumbs go here...]
            
            <main id="main">
                <h1>Page title</h1>
                
                [Basic page content...]
            </main>
        
        </div>
        
        <footer class="global-footer">
            <div class="l-center">
                <div class="global-footer__links">
                    <div class="l-cluster">
                        <ul class="clean-list" role="list">
                            <li><a href="/">Home</a></li>
                        </ul>
                    </div>
                    <ul class="clean-list" role="list">
                        <li><a class="with-icon--larger" href="https://twitter.com/W3C">
                            <img class="icon icon--larger" src="/dist/assets/svg/twitter.svg" width="20" height="20" alt aria-hidden="true" />
                            <span class="visuallyhidden">W3C on Twitter</span></a>
                        </li>
                        <li><a class="with-icon--larger" href="https://github.com/w3c/">
                            <img class="icon icon--larger" src="/dist/assets/svg/github.svg" width="20" height="20" alt aria-hidden="true" />
                            <span class="visuallyhidden">W3C on GitHub</span></a>
                        </li>
                    </ul>
                </div>
                <p class="copyright">Copyright © 20XX W3C <sup>®</sup> (<a href="https://www.csail.mit.edu/"><abbr title="Massachusetts Institute of Technology">MIT</abbr></a>, <a href="https://www.ercim.eu/"><abbr title="European Research Consortium for Informatics and Mathematics">ERCIM</abbr></a>,
                    <a href="https://www.keio.ac.jp/">Keio</a>, <a href="https://ev.buaa.edu.cn/">Beihang</a>) <a href="/Consortium/Legal/ipr-notice">Usage policies apply</a>.</p>
            </div>
        </footer>
        
    </div>
</body>
```

## Considerations

Note the inclusion of a skip link to help keyboard-only users skip to the main content on a page.

`<div class="grid-wrap">` is required for a sticky footer using CSS Grid. The technique is similar to that explained at [Sticky Footer, Five Ways](https://css-tricks.com/couple-takes-sticky-footer/#there-is-grid), except that Apollo applies `<div class="grid-wrap">` as the grid container, rather than placing this on `<body>`.
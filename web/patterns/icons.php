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

<?php
// This PHP is purely an example for the purposes of Apollo
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $current_url = "https://";
else
    $current_url = "http://";
// Append the host(domain name, ip) to the URL.
$current_url.= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$current_url.= $_SERVER['REQUEST_URI'];
?>

<div class="wrap">

    <main>
        <h1>Icons</h1>

	    <p>To use an SVG icon inline with text, add the <code>with-icon</code> class to the parent container (e.g. link or button). This will add some inline flex and alignment styles to help things line up nicely. It also uses the <code>margin-inline-end</code> <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Logical_Properties">CSS logical property</a> to add spacing between the text and icon, irrespective of text direction.</p>

	    <p>It is preferable to use SVGs inline, because:</p>
	    <ul>
		    <li>It eliminates a separate HTTP request</li>
		    <li>Background images are eliminated for users of <a href="https://webaim.org/blog/high-contrast/">Window's high contrast mode</a></li>
	    </ul>

	    <p>Use <a href="https://jakearchibald.github.io/svgomg/">SVGOMG</a> to optimise your SVG files.</p>

	    <p>SVG icons used within interactive elements, such as links and buttons, should include the attributes <code>focusable="false" aria-hidden="true"</code> as per the advice from Scott O'Hara on <a href="https://www.scottohara.me/blog/2019/05/22/contextual-images-svgs-and-a11y.html">Contextually marking up accessible images and SVGs</a>.</p>

	    <p>If the icon is to be used without visible text, you can either use <code>&lt;span class="visuallyhidden"&gt;</code> alongside the SVG to provide a screen reader friendly label for the link/button, or add the <code>aria-label</code> attribute to the link/button, e.g. <code>aria-label="Search"</code>.</p>

	    <p>Try to avoid specifying colours for SVGs within the SVG file itself. Preferably, use <code>fill="currentColor"</code> in the SVG because it allows us to set a CSS colour on the parent element, which the SVG will inherit. It also allows us to use the same SVG file in multiple places, and adjust the styles for interactive states such as hover.</p>

	    <h2>Buttons</h2>
	    <button class="with-icon">
		    <svg class="icon" viewBox="0 0 100 100" focusable="false" aria-hidden="true">
			    <circle fill="currentColor" cx="50" cy="50" r="50"></circle>
		    </svg>
		    Button
	    </button>

	    <h2>Social icons</h2>
        <h3>Share links with icons and text</h3>
        <div class="l-cluster">
            <ul class="clean-list social-links">
                <li>
                    <a class="social-links__item with-icon" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470.513 470.513" focusable="false" aria-hidden="true"><path fill="currentColor" d="M271.521 154.17v-40.541c0-6.086.28-10.8.849-14.13.567-3.335 1.857-6.615 3.859-9.853 1.999-3.236 5.236-5.47 9.706-6.708 4.476-1.24 10.424-1.858 17.85-1.858h40.539V0h-64.809c-37.5 0-64.433 8.897-80.803 26.691-16.368 17.798-24.551 44.014-24.551 78.658v48.82h-48.542v81.086h48.539v235.256h97.362V235.256h64.805l8.566-81.086h-73.37z"></path></svg><span aria-hidden="true">Facebook</span>
                        <span class="visuallyhidden">Share this with Facebook</span>
                    </a>
                </li>
                <li>
                    <a class="social-links__item with-icon" href="https://twitter.com/intent/tweet?text=$description&url=<?php echo $current_url; ?>">
	                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"/></svg><span aria-hidden="true">Twitter</span>
                        <span class="visuallyhidden">Share this with Twitter</span>
                    </a>
                </li>
                <li>
                    <a class="social-links__item with-icon" href="https://uk.pinterest.com/pin/create/bookmarklet/?url=<?php echo $current_url; ?>&description=$description&title=$description&media=$image_url">
	                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg><span aria-hidden="true">Pinterest</span>
                        <span class="visuallyhidden">Share this with Pinterest</span>
                    </a>
                </li>
	            <li>
		            <a class="social-links__item with-icon" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url; ?>&title=$description&summary=$description">
			            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg><span aria-hidden="true">LinkedIn</span>
			            <span class="visuallyhidden">Share this with LinkedIn</span>
		            </a>
	            </li>
                <li>
                    <a class="social-links__item with-icon" href="whatsapp://send?text=$description<?php echo $current_url; ?>%3Focid%3Dwsnews.chat-apps.in-app-msg.whatsapp.trial.link1_.auin">
	                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M17.507 14.307l-.009.075c-2.199-1.096-2.429-1.242-2.713-.816-.197.295-.771.964-.944 1.162-.175.195-.349.21-.646.075-.3-.15-1.263-.465-2.403-1.485-.888-.795-1.484-1.77-1.66-2.07-.293-.506.32-.578.878-1.634.1-.21.049-.375-.025-.524-.075-.15-.672-1.62-.922-2.206-.24-.584-.487-.51-.672-.51-.576-.05-.997-.042-1.368.344-1.614 1.774-1.207 3.604.174 5.55 2.714 3.552 4.16 4.206 6.804 5.114.714.227 1.365.195 1.88.121.574-.091 1.767-.721 2.016-1.426.255-.705.255-1.29.18-1.425-.074-.135-.27-.21-.57-.345z"/><path fill="currentColor" d="M20.52 3.449C12.831-3.984.106 1.407.101 11.893c0 2.096.549 4.14 1.595 5.945L0 24l6.335-1.652c7.905 4.27 17.661-1.4 17.665-10.449 0-3.176-1.24-6.165-3.495-8.411zm1.482 8.417c-.006 7.633-8.385 12.4-15.012 8.504l-.36-.214-3.75.975 1.005-3.645-.239-.375c-4.124-6.565.614-15.145 8.426-15.145a9.865 9.865 0 017.021 2.91 9.788 9.788 0 012.909 6.99z"/></svg><span aria-hidden="true">WhatsApp</span>
                        <span class="visuallyhidden">Share this with WhatsApp</span>
                    </a>
                </li>
                <li>
                    <a class="social-links__item with-icon" href="mailto:?subject=$email_subject&amp;body=<?php echo $current_url; ?>">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs/><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg><span aria-hidden="true">Email</span>
                        <span class="visuallyhidden">Share this with Email</span>
                    </a>
                </li>
            </ul>
        </div>

	    <h3>Account links with icons only</h3>
	    <div class="l-cluster">
		    <ul class="clean-list social-links">
			    <li>
				    <a class="social-links__item" href="#1">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470.513 470.513" focusable="false" aria-hidden="true"><path fill="currentColor" d="M271.521 154.17v-40.541c0-6.086.28-10.8.849-14.13.567-3.335 1.857-6.615 3.859-9.853 1.999-3.236 5.236-5.47 9.706-6.708 4.476-1.24 10.424-1.858 17.85-1.858h40.539V0h-64.809c-37.5 0-64.433 8.897-80.803 26.691-16.368 17.798-24.551 44.014-24.551 78.658v48.82h-48.542v81.086h48.539v235.256h97.362V235.256h64.805l8.566-81.086h-73.37z"></path></svg>
					    <span class="visuallyhidden">Find us on Facebook</span>
				    </a>
			    </li>
			    <li>
				    <a class="social-links__item" href="#1">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"/></svg>
					    <span class="visuallyhidden">Find us on Twitter</span>
				    </a>
			    </li>
			    <li>
				    <a class="social-links__item" href="#1">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
					    <span class="visuallyhidden">Find us on LinkedIn</span>
				    </a>
			    </li>
			    <li>
				    <a class="social-links__item" href=href="#1">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913a5.885 5.885 0 001.384 2.126A5.868 5.868 0 004.14 23.37c.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558a5.898 5.898 0 002.126-1.384 5.86 5.86 0 001.384-2.126c.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913a5.89 5.89 0 00-1.384-2.126A5.847 5.847 0 0019.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227a3.81 3.81 0 01-.899 1.382 3.744 3.744 0 01-1.38.896c-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421a3.716 3.716 0 01-1.379-.899 3.644 3.644 0 01-.9-1.38c-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678a6.162 6.162 0 100 12.324 6.162 6.162 0 100-12.324zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405a1.441 1.441 0 01-2.88 0 1.44 1.44 0 012.88 0z"/></svg>
					    <span class="visuallyhidden">Find us on Instagram</span>
				    </a>
			    </li>
			    <li>
				    <a class="social-links__item" href="#1">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg>
					    <span class="visuallyhidden">Find us on Pinterest</span>
				    </a>
			    </li>
			    <li>
				    <a class="social-links__item" href="#1">
					    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true"><defs/><path fill="currentColor" d="M23.495 6.205a3.007 3.007 0 00-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 00.527 6.205a31.247 31.247 0 00-.522 5.805 31.247 31.247 0 00.522 5.783 3.007 3.007 0 002.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 002.088-2.088 31.247 31.247 0 00.5-5.783 31.247 31.247 0 00-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
					    <span class="visuallyhidden">Find us on YouTube</span>
				    </a>
			    </li>
		    </ul>
	    </div>
    </main>

</div>
<footer class="global-footer">
    Footer content goes here
</footer>


<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>
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

<!-- @todo Check form against http://apollo.s24.net/donate.php and add JS interactivity -->

<body>

<div class="wrap">

    <main>
        <h1>Donation form</h1>

        <div class="l-sidebar">
            <div>
                <div class="sidebar">
                    <p>The first two questions a donation form page should answer are:</p>
                    <ul>
                        <li>Where am I?</li>
                        <li>Why should I care?</li>
                    </ul>
                    <p>We do all that we can to the form as easy to complete as possible.</p>
                    <p>The median monthly amount given by a donor in 2018 was &pound;20.<sup>*</sup></p>
                    <p><sup>*</sup>Source: <a href="https://www.cafonline.org/docs/default-source/about-us-publications/caf-uk-giving-2019-report-an-overview-of-charitable-giving-in-the-uk.pdf">CAF UK Giving 2019</a></p>
                </div>
                <div class="not-sidebar">
                    <form action="" class="form l-box l-box--no-border">
                        <fieldset class="field segmented-group-wrapper parsley-success">
                            <legend class="h3">Keep our air ambulances flying</legend>
	                        <div class="segmented-group">
		                        <label for="segmented-option-1">
			                        <input type="radio" id="segmented-option-1" name="segmented-options" class="input--radio" value="5" data-parsley-error-message="Please select your preferred choice." aria-invalid="false" data-parsley-multiple="segmented-options">
			                        <div class="segmented-label">
				                        <h2>&pound;5</h2>
				                        <div>Keep our air ambulances stocked with much needed syringes and tourniquets.</div>
			                        </div>
		                        </label>
		                        <label for="segmented-option-2">
			                        <input type="radio" id="segmented-option-2" name="segmented-options" class="input--radio" value="15" checked data-parsley-multiple="segmented-options">
			                        <div class="segmented-label">
				                        <h2>&pound;15</h2>
				                        <div>Allows us to stock our air ambulances with 200 disposable gloves.</div>
			                        </div>
		                        </label>
		                        <label for="segmented-option-3">
			                        <input type="radio" id="segmented-option-3" name="segmented-options" class="input--radio" value="35" data-parsley-multiple="segmented-options">
			                        <div class="segmented-label">
				                        <h2>&pound;35</h2>
				                        <div>Re-fuel one of our air ambulances.</div>
			                        </div>
		                        </label>
		                        <label for="segmented-option-4">
			                        <input type="radio" id="segmented-option-4" name="segmented-options" class="input--radio" value="10" data-parsley-multiple="segmented-options">
			                        <div class="segmented-label">
				                        <h2>&pound;10</h2>
			                        </div>
		                        </label>
		                        <label for="segmented-option-5">
			                        <input type="radio" id="segmented-option-5" name="segmented-options" class="input--radio" value="20" data-parsley-multiple="segmented-options">
			                        <div class="segmented-label">
				                        <h2>&pound;20</h2>
			                        </div>
		                        </label>
		                        <label for="segmented-option-6">
			                        <input type="radio" id="segmented-option-5" name="segmented-options" class="input--radio" value="other" data-parsley-multiple="segmented-options">
			                        <div class="segmented-label">
				                        <div class="field">
					                        <label class="field-label h2" for="donation-other">Choose your own amount</label>
					                        <input type="text" pattern="[0-9]*" class="field-input field-input--text js-donation-value js-donation-custom" name="donation-other" id="donation-other" value="15">
				                        </div>
			                        </div>
		                        </label>
	                        </div>
                        </fieldset>
	                    <fieldset class="field checkbox-group">
		                    <legend class="h3">Save a life, every month</legend>
		                    <div class="field-description">By donating regularly, even a small donation can make a big difference.</div>
		                    <label for="monthly-donation">
			                    <input type="checkbox" id="monthly-donation" name="monthly-donation" class="input--checkbox" value="data-value" data-parsley-multiple="monthly-donation">
			                    <span class="checkbox-label">Yes, donate <strong>&pound;15</strong> every month</span>
		                    </label>
	                    </fieldset>
	                    <fieldset class="field checkbox-group">
		                    <legend class="h3">Gift Aid</legend>
		                    <div class="field-description">I am a UK taxpayer and I understand that if I pay less income and/or Capital Gains Tax than the amount of Gift Aid claimed on all my donations in the relevant tax year, it is my responsibility to pay any difference.</div>
		                    <label for="giftaid">
			                    <input type="checkbox" id="giftaid" name="giftaid" class="input--checkbox" value="data-value" data-parsley-multiple="giftaid">
			                    <span class="checkbox-label">Yes, make my donation worth <strong>&pound;18.75</strong> at no extra cost to me</span>
		                    </label>
	                    </fieldset>
                        <div class="field">
	                        <label for="email" class="field-label"><span class="h3">Email</span> <small>(Required)</small>
                                <span class="field-description">E.g. jane.smith@example.co.uk<br/>
								    We&rsquo;ll only contact you if there&rsquo;s something wrong with your donation.
							    </span>
                            </label>
                            <input type="email" id="email" name="email" required autocomplete="email" autocapitalize="none" autocorrect="off" spellcheck="false" class="field-input field-input--text" data-parsley-error-message="Please complete this field with a valid email address." aria-invalid="false" value>
                        </div>
                        <div class="fieldset-wrapper payment-fields">
	                        <fieldset>
		                        <legend>
			                        <svg></svg>
			                        <span class="h3">Payment details</span>
		                        </legend>
		                        <p><em>We accept VISA, MasterCard and American Express.</em></p>
		                        <div class="field">
			                        <label class="field-label" for="cardnumber">Card number <small>(Required)</small>
				                        <span class="field-description">The long number on the front of your card</span>
			                        </label>
			                        <input type="text" id="cardnumber" name="cardnumber" required pattern="[0-9]*" autocomplete="cc-number" class="field-input field-input--text" data-parsley-error-message="Please enter your payment card number." aria-invalid="false" value>
		                        </div>
		                        <div class="field">
			                        <label for="name" class="field-label">Cardholder name <small>(Required)</small>
				                        <span class="field-description">Printed on your card</span>
			                        </label>
			                        <input type="text" id="ccname" name="ccname" required autocomplete="cc-name" class="field-input field-input--text" data-parsley-error-message="Please complete this field with your cardholder name." aria-invalid="false" value>
		                        </div>
		                        <div class="field">
			                        <label for="expdate" class="field-label">Expiry date <small>(Required)</small>
				                        <span class="field-description">MMYY</span>
			                        </label>
			                        <input type="text" id="expdate" name="expdate" required pattern="[0-9]*" autocomplete="cc-exp" class="field-input field-input--number" data-parsley-error-message="Please complete this field with the expiration month and year on the front of your card." aria-invalid="false" value>
		                        </div>
		                        <div class="field">
			                        <label for="cvc" class="field-label">Security code <small>(Required)</small>
				                        <span class="field-description">The three digit number on the back of your card</span>
			                        </label>
			                        <input type="text" id="cvc" name="cvc" required pattern="[0-9]*" autocomplete="cc-csc" class="field-input field-input--number" data-parsley-error-message="Please complete this field with the security code as it appears on the back of your card." aria-invalid="false" value>
		                        </div>
	                        </fieldset>
                        </div>
	                    <fieldset class="field checkbox-group">
		                    <legend class="group-legend">Subscribe to our newsletter</legend>
		                    <span class="field-description">We will send you relevant details, such as promotions, once a month. We will guard your email with our lives and never give it out to a third-party. You can unsubscribe at any time. <a href="#1">Our privacy policy</a></span>
		                    <label for="newsletter">
			                    <input type="checkbox" id="newsletter" name="newsletter" class="input--checkbox" value="data-value">
			                    <span class="checkbox-label">Yes, I would like COMPANY to send me relevant details</span>
		                    </label>
	                    </fieldset>
	                    <div class="field">
		                    <button class="button" type="submit">Donate &pound;15 now and help save another life</button>
	                    </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

</div>
<footer class="global-footer">
	Footer content goes here
</footer>


<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>
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
    <main class="l-stack l-center">
        <h1>Overview</h1>
        <p>So, let’s see about getting some basic styles down for the reboot of <em>Apollo</em>. I’m going to need some paragraphs with some reasonably-looking text inside of them to try and create a base natural layout, so that I can accurately assess how these <strong>core</strong> styles are working.</p>
	    <p>My thinking here is drawn from the <span class="small-caps">Springer Nature Front End Playbook</span> approach. That is to say:</p>
        <ul>
            <li>Serve core CSS styles to all browsers for an accessible experience (perhaps not the most exciting, but it works)</li>
            <li>Use a CSS media query to cut the mustard and serve advanced CSS styles to modern browsers (plus IE10/11)</li>
            <li>Load JavaScript according to whether the advanced CSS styles have been applied to the site</li>
        </ul>
	    <p>I believe this is in the best interests of all web users, and takes into account issues of performance for older browsers by giving them just what they need to make content accessible for users. We infer that users of older browsers may well have a device with less processing power, and so we simplify. We can progressively enhance the experience for users who are privileged to have access to more capable browsers and devices.</p>
        <button class="u-center">Button</button>
	    <h2>Points to bear in mind</h2>
        <p>There are certain design schemes that we have tended to follow in recent projects at Studio 24. These are:</p>
	    <div class="l-box bg bg--subtle">
		    <ol>
			    <li>Limiting the content width to 90% of the viewport on smaller screens.</li>
			    <li>Reducing this width to 80% of the viewport on mid-sized screens.</li>
			    <li>Setting a max-width for content at 1300px</li>
			    <li>Allowing certain elements to extend beyond these restrictions to fill the browser width (e.g. banner/hero components)</li>
		    </ol>
	    </div>
	    <div class="l-sidebar">
		    <div>
			    <div class="not-sidebar l-stack">
				    <p>It is worth bearing these points in mind for our base styles, as they should provide a neater reading experience for users. For example, it will provide a nice margin on either side of text on smaller screens, keeping the text away from the very edges.</p>
				    <p>By adjusting Apollo styles locally, I can test the resulting visual feel using <a href="https://www.browserstack.com/users/sign_in">Browserstack</a> and – when happy – push these changes into a separate branch on the Github Apollo repo.</p>
			    </div>
			    <div class="sidebar">
				    <div class="l-cluster">
					    <ul class="clean-list">
						    <li><a href="#1" class="button button--primary">Item One</a></li>
						    <li><a href="#2" class="button button--primary">Item Two</a></li>
						    <li><a href="#3" class="button button--primary">Item Three</a></li>
						    <li><a href="#4" class="button button--primary">Item Four</a></li>
						    <li><a href="#5" class="button button--primary">Item Five</a></li>
						    <li><a href="#6" class="button button--primary">Item Six</a></li>
						    <li><a href="#7" class="button button--primary">Item Seven</a></li>
					    </ul>
				    </div>
			    </div>
		    </div>
	    </div>
		<div class="table-wrap">
			<table>
				<thead>
				<tr>
					<th></th>
					<th scope="col"> Table header</th>
					<th scope="col"> Table header</th>
					<th scope="col"> Table header</th>
					<th scope="col"> Table header</th>
					<th scope="col"> Table header</th>
					<th scope="col"> Table header</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row"> A </th>
					<td> € 0,0035 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> B </th>
					<td> € 0,0042 </td>
					<td> € 0,0048 </td>
					<td> € 0,0048 </td>
					<td> € 0,0048 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> C </th>
					<td> € 0,0062 </td>
					<td> € 0,0068 </td>
					<td> € 0,0068 </td>
					<td> € 0,0068 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> D </th>
					<td> € 0,0088 </td>
					<td> € 0,0091 </td>
					<td> € 0,0091 </td>
					<td> € 0,0091 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> E </th>
					<td> € 0,0086 </td>
					<td> € 0,0090 </td>
					<td> € 0,0090 </td>
					<td> € 0,0090 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> F </th>
					<td> € 0,0096 </td>
					<td> € 0,0098 </td>
					<td> € 0,0098 </td>
					<td> € 0,0098 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> G </th>
					<td> € 0,0111 </td>
					<td> € 0,0111 </td>
					<td> € 0,0111 </td>
					<td> € 0,0111 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> H </th>
					<td> € 0,0123 </td>
					<td> € 0,0125 </td>
					<td> € 0,0125 </td>
					<td> € 0,0125 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> I </th>
					<td> € 0,0122 </td>
					<td> € 0,0123 </td>
					<td> € 0,0123 </td>
					<td> € 0,0123 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				<tr>
					<th scope="row"> J </th>
					<td> € 0,0165 </td>
					<td> € 0,0162 </td>
					<td> € 0,0162 </td>
					<td> € 0,0162 </td>
					<td> € 0,0041 </td>
					<td> € 0,0041 </td>
				</tr>
				</tbody>
			</table>
		</div>

	    <div class="l-sidebar">
		    <div>
			    <div class="sidebar l-stack">
				    <h2>Forms</h2>
				    <p>We use <a href="http://dbushell.github.io/Pikaday/">Pikaday</a>, JavaScript plugin, to enhance picking a date from a calendar.</p>
				    <p>We use <a href="http://parsleyjs.org/">Parsley</a>, a JavaScript library, to handle client-side form validation.</p>
				    <p>Using Pikaday and Parsley, we also add the interactive parts and the ARIA attributes to make form completion as easy as possible for people.</p>
			    </div>
			    <div class="not-sidebar">

				    <form action="" class="form l-box l-box--no-border bg bg--subtle">
					    <div class="field-group">
						    <label for="guide-form-field-1" class="field-label">Email <small>(Required)</small>
							    <div class="field-description">We&rsquo;ll only contact you if there&rsquo;s something wrong with your order.</div>
						    </label>
						    <input type="email" class="field-input field-input--text" name="guide-form-field-1" id="guide-form-field-1" placeholder="E.g. jane.smith@example.co.uk" data-parsley-error-message="Please complete this field with a valid email address." required aria-invalid="false">
					    </div>

					    <div class="field-group">
						    <label for="guide-form-field-2" class="field-label">Name <small>(Required)</small></label>
						    <input type="text" class="field-input field-input--text" name="guide-form-field-2" id="guide-form-field-2" placeholder="E.g. Jane Smith" data-parsley-error-message="Please complete this field with your name." required aria-invalid="false">
					    </div>

					    <div class="field-group">
						    <label for="guide-form-field-3" class="field-label">Date of birth <small>(Required)</small></label>
						    <input type="date" class="field-input field-input--date js-pikaday" name="guide-form-field-3" id="guide-form-field-3" placeholder="E.g. 21/10/1985" data-parsley-error-message="Please select a date." required aria-invalid="false">
					    </div>

					    <div class="field-group">
						    <label for="select-input" class="field-label">Country <small>(Required)</small></label>
						    <select name="select-input" id="select-input" class="field-input input--select" data-parsley-error-message="Please select an option." required aria-invalid="false">
							    <option value=""></option>
							    <option value="1">Option 1</option>
							    <option value="2">Option 2</option>
							    <option value="3">Option 3</option>
						    </select>
					    </div>

					    <div class="field-group">
						    <label for="textarea-input" class="field-label">Textarea input <small>(Required)</small>
							    <span class="field-description">Please explain the problem you are having, we&rsquo;ll come up with the solution</span>
						    </label>
						    <textarea name="textarea-input" id="textarea-input" cols="30" rows="10" class="field-input input--textarea" placeholder="E.g. Hi, I am&hellip;" data-parsley-error-message="Please complete this field with your problem." required aria-invalid="false"></textarea>
					    </div>

                        <?php // Checkbox example ?>
					    <fieldset class="field-group checkbox-group">
						    <legend class="group-legend">Subscribe to our newsletter</legend>
						    <div class="field-description">We will send you a monthly newsletter with promotions. We will guard your email with our lives and never give it out to a third-party.</div>
						    <label for="checkbox-input-1">
							    <input id="checkbox-input-1" name="checkbox-input" class="input--checkbox" value="data-value" type="checkbox">
							    <span class="checkbox-label">Yes, I would love to receive your newsletter once a month</span>
						    </label>
						    <label for="checkbox-input-2">
							    <input id="checkbox-input-2" name="checkbox-input" class="input--checkbox" value="data-value" type="checkbox">
							    <span class="checkbox-label">Yes, I would love to receive your newsletter once a month</span>
						    </label>
						    <label for="checkbox-input-3">
							    <input id="checkbox-input-3" name="checkbox-input" class="input--checkbox" value="data-value" type="checkbox">
							    <span class="checkbox-label">Yes, I would love to receive your newsletter once a month</span>
						    </label>
					    </fieldset>


                        <?php // Radio options example ?>
					    <fieldset class="field-group radio-group" role="radiogroup" aria-required="true">
						    <legend class="group-legend">Radio input</legend>
						    <div class="field-description">Radio options are easier to read and quicker to scan when laid out one under the other instead of next to each other.</div>
						    <label for="radio-input">
							    <input id="radio-input" name="radio-input" class="input--radio" value="data-value" type="radio" data-parsley-error-message="Please complete by selecting your preference." required aria-invalid="false">
							    <span class="radio-label">Radio option.</span>
						    </label>
						    <label for="radio-input2">
							    <input id="radio-input2" name="radio-input" class="input--radio" value="data-value" type="radio" data-parsley-error-message="Please complete by selecting your preference." required aria-invalid="false">
							    <span class="radio-label">Another radio option.</span>
						    </label>
					    </fieldset>

                        <?php // Segmented group wrapper ?>
					    <fieldset class="field-group segmented-group-wrapper">
						    <legend class="group-legend">Segmented options (Radio)</legend>
						    <div class="field-description">We understand that different people enjoy books in different ways, which is why we&rsquo;re giving you lots of options.</div>

                            <?php // Segmented group ?>
						    <div class="segmented-group">
							    <label for="segmented-option-1">
								    <input id="segmented-option-1" name="segmented-options" class="input--radio" value="data-value" type="radio" data-parsley-error-message="Please select your preferred choice." required aria-invalid="false">
								    <div class="segmented-label">
									    <h2 class="size--l heading">Approachable option</h2>
									    <div>Copy to explain this option in more detail.</div>
								    </div>
							    </label>
							    <label for="segmented-option-2">
								    <input id="segmented-option-2" name="segmented-options" class="input--radio" value="data-value" type="radio" checked>
								    <div class="segmented-label">
									    <h2 class="size--l heading">Bell curve option</h2>
									    <div>Copy to explain this option in more detail.</div>
								    </div>
							    </label>
							    <label for="segmented-option-3">
								    <input id="segmented-option-3" name="segmented-options" class="input--radio" value="data-value" type="radio">
								    <div class="segmented-label">
									    <h2 class="size--l heading">Expensive option</h2>
									    <div class="">Copy to explain this option in more detail.</div>
								    </div>
							    </label>
							    <label for="segmented-option-4">
								    <input id="segmented-option-4" name="segmented-options" class="input--radio" value="data-value" type="radio">
								    <div class="segmented-label">
									    <h2 class="size--l heading">Secondary options</h2>
								    </div>
							    </label>
							    <label for="segmented-option-5">
								    <input id="segmented-option-5" name="segmented-options" class="input--radio" value="data-value" type="radio">
								    <div class="segmented-label">
									    <h2 class="size--l heading">Secondary options</h2>
								    </div>
							    </label>
							    <label for="segmented-option-6">
								    <input id="segmented-option-6" name="segmented-options" class="input--radio" value="data-value" type="radio">
								    <div class="segmented-label">
									    <h2 class="size--l heading">Secondary options</h2>
								    </div>
							    </label>
							    <label for="segmented-option-7">
								    <input id="segmented-option-7" name="segmented-options" class="input--radio" value="data-value" type="radio">
								    <div class="segmented-label">
									    <h2 class="size--l heading">Secondary options</h2>
								    </div>
							    </label>
						    </div>

					    </fieldset>

					    <div class="field-group">
						    <button type="submit" class="button button--primary size--xl">Action-contextual label, i.e. not 'Submit'</button>
					    </div>
				    </form>

			    </div>
		    </div>
	    </div>



    </main>
	<?php // End main ?>

<?php require_once( 'delete-this-folder-in-wp/_includes/scripts__footer.html' ); ?>

</body>
</html>

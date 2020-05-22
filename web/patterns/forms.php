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
        <h1>Forms</h1>
	    <p>The examples on this page show how we manage forms and their fields. Recommendations are based on this <a href="https://adamsilver.io/articles/form-design-from-zero-to-hero-all-in-one-blog-post/">excellent blog post</a> by Adam Silver.</p>
	    <ul>
		    <li>Every input needs a label. Put labels above the input.</li>
		    <li>Do not use the <code>placeholder</code> attribute on <code>&lt;input&gt;</code> fields.</li>
		    <li>If hint text is needed, add a <code>&lt;div class="field-description&gt;</code> inside the <code>&lt;label&gt;</code>. Add hint text when users are more likely to make a mistake, like when having to satisfy a complex set of password rules. Error messages should be a last resort.</li>
		    <li>Make form fields look like form fields: apply a border and make sure they are empty to begin with. A height of 44px or more makes them easy to tap on touch screen devices.</li>
		    <li>Make sure any <code>&lt;button&gt;</code> looks like a button. Align them to the left edge of the last input where users naturally look for them. Use a verb for button text because the user is doing something, and relate it to what they are doing - avoid generic &lsquo;Submit&rsquo; buttons.</li>
		    <li><code>&lt;select&gt;</code> should be a last resort as they’re really hard to use. Try radio buttons instead. Or use an autocomplete, if there’s a long list of options.</li>
		    <li>If you have to use a <code>&lt;select&gt;</code>, don't submit a form when its value changes. Select boxes that submit the form automatically when the user selects an option cause problems for keyboard and screen reader users.</li>
		    <li>We use <a href="http://parsleyjs.org/">Parsley</a>, a JavaScript library, to handle client-side form validation. Using Parsley, we also add the interactive parts and the ARIA attributes to make form completion as easy as possible for people.</li>
	    </ul>

	    <h2>Text, emails and passwords</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="sidebar">
				    <p>Adding the <code>&lt;autocomplete&gt;</code> attribute to text fields such as name, address, email etc. can be helpful for users. Here is a <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocomplete#Values">list of valid autocomplete values</a>.</p>
				    <p>Use <code>&lt;autocapitalize="none"&gt;</code>, <code>&lt;autocorrect="off"&gt;</code> and <code>&lt;spellcheck="false"&gt;</code> to stop browsers automatically changing user input on fields that expect grammatically incorrect data, such as email addresses and passwords.</p>
			    </div>
			    <div class="not-sidebar">
				    <form action="" class="form l-box l-box--no-border">
					    <div class="field">
						    <label for="name" class="field-label">Name <small>(Required)</small>
							    <span class="field-description">E.g. Jane Smith</span>
						    </label>
						    <input type="text" id="name" name="name" required autocomplete="name" class="field-input field-input--text" data-parsley-error-message="Please complete this field with your name." aria-invalid="false" value>
					    </div>
					    <div class="field">
						    <label for="email" class="field-label">Email <small>(Required)</small>
							    <span class="field-description">E.g. jane.smith@example.co.uk<br/>
								    We&rsquo;ll only contact you if there&rsquo;s something wrong with your order.
							    </span>
						    </label>
						    <input type="email" id="email" name="email" required autocomplete="email" autocapitalize="none" autocorrect="off" spellcheck="false" class="field-input field-input--text" data-parsley-error-message="Please complete this field with a valid email address." aria-invalid="false" value>
					    </div>
					    <div class="field">
						    <label for="password" class="field-label">Password <small>(Required)</small>
							    <span class="field-description">Remember that your password must meet the following criteria:
								    <ul>
									    <li>At least eight (8) characters long</li>
									    <li>Contain both uppercase and lowercase letters</li>
									    <li>Contain at least one (1) number</li>
								    </ul>
							    </span>
						    </label>
						    <input type="password" id="password" name="password" required autocapitalize="none" autocorrect="off" spellcheck="false" class="field-input field-input--text" data-parsley-error-message="Please complete this field with a valid password." value>
					    </div>
					    <div class="field">
						    <label for="message" class="field-label">Your message
							    <span class="field-description">Please explain the problem you are having, we&rsquo;ll come up with the solution</span>
						    </label>
						    <textarea id="message" name="message" class="field-input input--textarea" aria-invalid="false"></textarea>
					    </div>
					    <div class="field">
						    <button class="button" type="submit">Continue</button>
					    </div>
				    </form>
			    </div>
		    </div>
	    </div>

	    <h2>Dates</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="sidebar">
				    <p>For memorable dates that the user will already know, such as their date of birth, we use a series of simple text inputs.</p>
				    <p>We use a text field and <a href="http://dbushell.github.io/Pikaday/">Pikaday</a> to allow picking a date from a calendar.</p>
			    </div>
			    <div class="not-sidebar">
				    <form action="" class="form l-box l-box--no-border">
					    <div class="field">
						    <legend>Date of birth <small>(Required)</small></legend>
						    <span class="field-description">DD MM YYYY</span>
						    <div class="memorable-date">
							    <label for="day" class="field-label">Day</label>
							    <input type="text" id="day" name="day" required pattern="[0-9]*" min="0" max="31" class="field-input memorable-date__day" data-parsley-error-message="Please enter the day you were born as a number." aria-invalid="false" value>
						    </div>
						    <div class="memorable-date">
							    <label for="month" class="field-label">Month</label>
							    <input type="text" id="month" name="month" required pattern="[0-9]*" min="1" max="12" class="field-input memorable-date__month" data-parsley-error-message="Please enter the month you were born as a number." aria-invalid="false" value>
						    </div>
						    <div class="memorable-date">
							    <label for="year" class="field-label">Year</label>
							    <input type="text" id="year" name="year" required pattern="[0-9]*" min="1900" max="2050" class="field-input memorable-date__year" data-parsley-error-message="Please enter the year you were born." aria-invalid="false" value>
						    </div>
					    </div>
					    <div class="field">
						    <label for="arrival_date" class="field-label">Date of arrival <small>(Required)</small>
							    <span class="field-description">DD MM YYYY</span>
						    </label>
						    <input type="text" id="arrival_date" name="arrival_date" required class="field-input field-input--date js-pikaday-arrival" data-parsley-error-message="Please enter a valid arrival date." aria-invalid="false" value>
					    </div>
				    </form>
			    </div>
		    </div>
	    </div>

	    <h2>Numbers</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="sidebar">
				    <p>In most instances, it's better to use <code>&lt;input type="text" pattern="[0-9]*&gt;</code> rather than <code>&lt;input type="number"&gt;</code> when dealing with numbers. Adam Silver has written about <a href="https://adamsilver.io/articles/form-design-when-to-use-the-number-input/">when to use the number input</a>.</p>
				    <p>Including the <code>&lt;autocomplete&gt;</code> attribute can help users fill out payment details more quickly. Older browsers make use of the <code>&lt;name&gt;</code> attribute to achieve the same thing. Here is a list of <a href="https://www.smashingmagazine.com/2017/03/improve-billing-form-ux/">payment autofill attributes</a>.</p>
			    </div>
			    <div class="not-sidebar">
				    <form action="" class="form l-box l-box--no-border">
					    <div class="field">
							<label class="field-label" for="cardnumber">Card number <small>(Required)</small>
								<span class="field-description">The long number on the front of your card</span>
							</label>
						    <input type="text" id="cardnumber" name="cardnumber" required pattern="[0-9]*" autocomplete="cc-number" class="field-input field-input--text" data-parsley-error-message="Please enter your payment card number." aria-invalid="false" value>
					    </div>
					    <div class="field">
						    <label class="field-label" for="phone_number">Phone number</label>
						    <input type="tel" id="phone_number" name="phone_number" value>
					    </div>
					    <div class="field">
						    <label class="field-label" for="rooms" id="qty-rooms">How many rooms do you require?</label>
						    <input type="number" id="rooms" name="rooms" min="0" max="9" step="1" class="field-input field-input--number" value="0">
					    </div>
				    </form>
			    </div>
		    </div>
	    </div>

	    <h2>Autocomplete</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="sidebar">
				    <p>A <code>&lt;select&gt;</code> can be enhanced into an accessible autocomplete via JavaScript. Apollo uses <a href="https://github.com/alphagov/accessible-autocomplete">Accessible autocomplete</a> to achieve this, and there are a number of <a href="https://alphagov.github.io/accessible-autocomplete/examples/">example customisations</a> that can be followed.</p>
			    </div>
			    <div class="not-sidebar">
				    <form action="" class="form l-box l-box--no-border">
					    <div class="field">
						    <label for="destination" class="field-label">Destination <small>(Required)</small></label>
						    <select id="destination">
							    <option value="">Select a country</option>
							    <option value="1" data-alt="AF">Afghanistan</option>
							    <option value="2" data-alt="AX Aaland Aland">Åland Islands</option>
							    <option value="3" data-alt="AL">Albania</option>
							    <option value="4" data-alt="DZ">Algeria</option>
							    <option value="5" data-alt="AS">American Samoa</option>
							    <option value="6" data-alt="AD">Andorra</option>
							    <option value="7" data-alt="AO">Angola</option>
							    <option value="8" data-alt="AI">Anguilla</option>
							    <option value="8" data-alt="AQ">Antarctica</option>
							    <option value="10" data-alt="AG">Antigua And Barbuda</option>
							    <option value="11" data-alt="AR">Argentina</option>
							    <option value="12" data-alt="AM">Armenia</option>
							    <option value="13" data-alt="AW">Aruba</option>
							    <option value="14" data-alt="AU">Australia</option>
							    <option value="15" data-alt="AT Österreich Osterreich Oesterreich ">Austria</option>
							    <option value="16" data-alt="AZ">Azerbaijan</option>
							    <option value="17" data-alt="BS">Bahamas</option>
							    <option value="18" data-alt="BH">Bahrain</option>
							    <option value="19" data-alt="BD">Bangladesh</option>
							    <option value="20" data-alt="BB">Barbados</option>
							    <option value="21" data-alt="BY">Belarus</option>
							    <option value="22" data-alt="BE België Belgie Belgien Belgique">Belgium</option>
							    <option value="23" data-alt="BZ">Belize</option>
							    <option value="24" data-alt="BJ">Benin</option>
							    <option value="25" data-alt="BM">Bermuda</option>
							    <option value="26" data-alt="BT">Bhutan</option>
							    <option value="27" data-alt="BO">Bolivia</option>
							    <option value="28" data-alt="BQ">Bonaire, Sint Eustatius and Saba</option>
							    <option value="29" data-alt="BA">Bosnia and Herzegovina</option>
							    <option value="30" data-alt="BW">Botswana</option>
							    <option value="31" data-alt="BV">Bouvet Island</option>
							    <option value="32" data-alt="BR Brasil">Brazil</option>
							    <option value="33" data-alt="IO">British Indian Ocean Territory</option>
							    <option value="34" data-alt="BN">Brunei Darussalam</option>
							    <option value="35" data-alt="BG">Bulgaria</option>
							    <option value="36" data-alt="BF">Burkina Faso</option>
							    <option value="37" data-alt="BI">Burundi</option>
							    <option value="38" data-alt="KH">Cambodia</option>
							    <option value="39" data-alt="CM">Cameroon</option>
							    <option value="40" data-alt="CA">Canada</option>
							    <option value="41" data-alt="CV">Cape Verde</option>
							    <option value="42" data-alt="KY">Cayman Islands</option>
							    <option value="43" data-alt="CF">Central African Republic</option>
							    <option value="44" data-alt="TD">Chad</option>
							    <option value="45" data-alt="CL">Chile</option>
							    <option value="46" data-alt="CN Zhongguo Zhonghua Peoples Republic">China</option>
							    <option value="47" data-alt="CX">Christmas Island</option>
							    <option value="48" data-alt="CC">Cocos (Keeling) Islands</option>
							    <option value="49" data-alt="CO">Colombia</option>
							    <option value="50" data-alt="KM">Comoros</option>
							    <option value="51" data-alt="CG">Congo</option>
							    <option value="52" data-alt="CD">Congo, the Democratic Republic of the</option>
							    <option value="53" data-alt="CK">Cook Islands</option>
							    <option value="54" data-alt="CR">Costa Rica</option>
							    <option value="55" data-alt="CI Cote dIvoire">Côte d'Ivoire</option>
							    <option value="x1Croatia" data-alt="HR Hrvatska">Croatia</option>
							    <option value="x1Cuba" data-alt="CU">Cuba</option>
							    <option value="x1Curaçao" data-alt="CW Curacao">Curaçao</option>
							    <option value="x1Cyprus" data-alt="CY">Cyprus</option>
							    <option value="x1Czech Republic" data-alt="CZ Česká Ceska">Czech Republic</option>
							    <option value="x1Denmark" data-alt="DK Danmark">Denmark</option>
							    <option value="x1Djibouti" data-alt="DJ">Djibouti</option>
							    <option value="x1Dominica" data-alt="DM">Dominica</option>
							    <option value="x1Dominican Republic" data-alt="DO">Dominican Republic</option>
							    <option value="x1Ecuador" data-alt="EC">Ecuador</option>
							    <option value="x1Egypt" data-alt="EG">Egypt</option>
							    <option value="x1El Salvador" data-alt="SV">El Salvador</option>
							    <option value="x1Equatorial Guinea" data-alt="GQ">Equatorial Guinea</option>
							    <option value="x1Eritrea" data-alt="ER">Eritrea</option>
							    <option value="x1Estonia" data-alt="EE Eesti">Estonia</option>
							    <option value="x1Ethiopia" data-alt="ET">Ethiopia</option>
							    <option value="x1Falkland Islands (Malvinas)" data-alt="FK">Falkland Islands (Malvinas)</option>
							    <option value="x1Faroe Islands" data-alt="FO Føroyar Færøerne">Faroe Islands</option>
							    <option value="x1Fiji" data-alt="FJ">Fiji</option>
							    <option value="x1Finland" data-alt="FI Suomi">Finland</option>
							    <option value="x1France" data-alt="FR République française">France</option>
							    <option value="x1French Guiana" data-alt="GF">French Guiana</option>
							    <option value="x1French Polynesia" data-alt="PF">French Polynesia</option>
							    <option value="x1French Southern Territories" data-alt="TF">French Southern Territories</option>
							    <option value="x1Gabon" data-alt="GA">Gabon</option>
							    <option value="x1Gambia" data-alt="GM">Gambia</option>
							    <option value="x1Georgia" data-alt="GE">Georgia</option>
							    <option value="x1Germany" data-alt="DE Bundesrepublik Deutschland">Germany</option>
							    <option value="x1Ghana" data-alt="GH">Ghana</option>
							    <option value="x1Gibraltar" data-alt="GI">Gibraltar</option>
							    <option value="x1Greece" data-alt="GR">Greece</option>
							    <option value="x1Greenland" data-alt="GL grønland">Greenland</option>
							    <option value="x1Grenada" data-alt="GD">Grenada</option>
							    <option value="x1Guadeloupe" data-alt="GP">Guadeloupe</option>
							    <option value="x1Guam" data-alt="GU">Guam</option>
							    <option value="x1Guatemala" data-alt="GT">Guatemala</option>
							    <option value="x1Guernsey" data-alt="GG">Guernsey</option>
							    <option value="x1Guinea" data-alt="GN">Guinea</option>
							    <option value="x1Guinea-Bissau" data-alt="GW">Guinea-Bissau</option>
							    <option value="x1Guyana" data-alt="GY">Guyana</option>
							    <option value="x1Haiti" data-alt="HT">Haiti</option>
							    <option value="x1Heard Island and McDonald Islands" data-alt="HM">Heard Island and McDonald Islands</option>
							    <option value="x1Holy See (Vatican City State)" data-alt="VA">Holy See (Vatican City State)</option>
							    <option value="x1Honduras" data-alt="HN">Honduras</option>
							    <option value="x1Hong Kong" data-alt="HK">Hong Kong</option>
							    <option value="x1Hungary" data-alt="HU">Hungary</option>
							    <option value="x1Iceland" data-alt="IS Island">Iceland</option>
							    <option value="x1India" data-alt="IN">India</option>
							    <option value="x1Indonesia" data-alt="ID">Indonesia</option>
							    <option value="x1Iran, Islamic Republic of" data-alt="IR">Iran, Islamic Republic of</option>
							    <option value="x1Iraq" data-alt="IQ">Iraq</option>
							    <option value="x1Ireland" data-alt="IE Éire">Ireland</option>
							    <option value="x1Isle of Man" data-alt="IM">Isle of Man</option>
							    <option value="x1Israel" data-alt="IL">Israel</option>
							    <option value="x1Italy" data-alt="IT Italia">Italy</option>
							    <option value="x1Jamaica" data-alt="JM">Jamaica</option>
							    <option value="x1Japan" data-alt="JP Nippon Nihon">Japan</option>
							    <option value="x1Jersey" data-alt="JE">Jersey</option>
							    <option value="x1Jordan" data-alt="JO">Jordan</option>
							    <option value="x1Kazakhstan" data-alt="KZ">Kazakhstan</option>
							    <option value="x1Kenya" data-alt="KE">Kenya</option>
							    <option value="x1Kiribati" data-alt="KI">Kiribati</option>
							    <option value="x1Korea, Democratic People's Republic of" data-alt="KP North Korea">Korea, Democratic People's Republic of</option>
							    <option value="x1Korea, Republic of" data-alt="KR South Korea">Korea, Republic of</option>
							    <option value="x1Kuwait" data-alt="KW">Kuwait</option>
							    <option value="x1Kyrgyzstan" data-alt="KG">Kyrgyzstan</option>
							    <option value="x1Lao People's Democratic Republic" data-alt="LA">Lao People's Democratic Republic</option>
							    <option value="x1Latvia" data-alt="LV">Latvia</option>
							    <option value="x1Lebanon" data-alt="LB">Lebanon</option>
							    <option value="x1Lesotho" data-alt="LS">Lesotho</option>
							    <option value="x1Liberia" data-alt="LR">Liberia</option>
							    <option value="x1Libyan Arab Jamahiriya" data-alt="LY">Libyan Arab Jamahiriya</option>
							    <option value="x1Liechtenstein" data-alt="LI">Liechtenstein</option>
							    <option value="x1Lithuania" data-alt="LT">Lithuania</option>
							    <option value="x1Luxembourg" data-alt="LU">Luxembourg</option>
							    <option value="x1Macao" data-alt="MO">Macao</option>
							    <option value="x1Madagascar" data-alt="MG">Madagascar</option>
							    <option value="x1Malawi" data-alt="MW">Malawi</option>
							    <option value="x1Malaysia" data-alt="MY">Malaysia</option>
							    <option value="x1Maldives" data-alt="MV">Maldives</option>
							    <option value="x1Mali" data-alt="ML">Mali</option>
							    <option value="x1Malta" data-alt="MT">Malta</option>
							    <option value="x1Marshall Islands" data-alt="MH">Marshall Islands</option>
							    <option value="x1Martinique" data-alt="MQ">Martinique</option>
							    <option value="x1Mauritania" data-alt="MR">Mauritania</option>
							    <option value="x1Mauritius" data-alt="MU">Mauritius</option>
							    <option value="x1Mayotte" data-alt="YT">Mayotte</option>
							    <option value="x1Mexico" data-alt="MX Mexicanos">Mexico</option>
							    <option value="x1Micronesia, Federated States of" data-alt="FM">Micronesia, Federated States of</option>
							    <option value="x1Moldova, Republic of" data-alt="MD">Moldova, Republic of</option>
							    <option value="x1Monaco" data-alt="MC">Monaco</option>
							    <option value="x1Mongolia" data-alt="MN">Mongolia</option>
							    <option value="x1Montenegro" data-alt="ME">Montenegro</option>
							    <option value="x1Montserrat" data-alt="MS">Montserrat</option>
							    <option value="x1Morocco" data-alt="MA">Morocco</option>
							    <option value="x1Mozambique" data-alt="MZ">Mozambique</option>
							    <option value="x1Myanmar" data-alt="MM">Myanmar</option>
							    <option value="x1Namibia" data-alt="NA">Namibia</option>
							    <option value="x1Nauru" data-alt="NR">Nauru</option>
							    <option value="x1Nepal" data-alt="NP">Nepal</option>
							    <option value="x1Netherlands" data-alt="NL Holland Nederland">Netherlands</option>
							    <option value="x1New Caledonia" data-alt="NC">New Caledonia</option>
							    <option value="x1New Zealand" data-alt="NZ">New Zealand</option>
							    <option value="x1Nicaragua" data-alt="NI">Nicaragua</option>
							    <option value="x1Niger" data-alt="NE">Niger</option>
							    <option value="x1Nigeria" data-alt="NG">Nigeria</option>
							    <option value="x1Niue" data-alt="NU">Niue</option>
							    <option value="x1Norfolk Island" data-alt="NF">Norfolk Island</option>
							    <option value="x1North Macedonia" data-alt="MK">North Macedonia</option>
							    <option value="x1Northern Mariana Islands" data-alt="MP">Northern Mariana Islands</option>
							    <option value="x1Norway" data-alt="NO Norge Noreg">Norway</option>
							    <option value="x1Oman" data-alt="OM">Oman</option>
							    <option value="x1Pakistan" data-alt="PK">Pakistan</option>
							    <option value="x1Palau" data-alt="PW">Palau</option>
							    <option value="x1Palestinian Territory, Occupied" data-alt="PS">Palestinian Territory, Occupied</option>
							    <option value="x1Panama" data-alt="PA">Panama</option>
							    <option value="x1Papua New Guinea" data-alt="PG">Papua New Guinea</option>
							    <option value="x1Paraguay" data-alt="PY">Paraguay</option>
							    <option value="x1Peru" data-alt="PE">Peru</option>
							    <option value="x1Philippines" data-alt="PH">Philippines</option>
							    <option value="x1Pitcairn" data-alt="PN">Pitcairn</option>
							    <option value="x1Poland" data-alt="PL">Poland</option>
							    <option value="x1Portugal" data-alt="PT">Portugal</option>
							    <option value="x1Puerto Rico" data-alt="PR">Puerto Rico</option>
							    <option value="x1Qatar" data-alt="QA">Qatar</option>
							    <option value="x1Réunion" data-alt="RE Reunion">Réunion</option>
							    <option value="x1Romania" data-alt="RO">Romania</option>
							    <option value="x1Russian Federation" data-alt="RU Russia Rossiya">Russian Federation</option>
							    <option value="x1Rwanda" data-alt="RW">Rwanda</option>
							    <option value="x1Saint Barthélemy" data-alt="BL">Saint Barthélemy</option>
							    <option value="x1Saint Helena" data-alt="SH">Saint Helena</option>
							    <option value="x1Saint Kitts and Nevis" data-alt="KN">Saint Kitts and Nevis</option>
							    <option value="x1Saint Lucia" data-alt="LC">Saint Lucia</option>
							    <option value="x1Saint Martin (French Part)" data-alt="MF">Saint Martin (French Part)</option>
							    <option value="x1Saint Pierre and Miquelon" data-alt="PM">Saint Pierre and Miquelon</option>
							    <option value="x1Saint Vincent and the Grenadines" data-alt="VC">Saint Vincent and the Grenadines</option>
							    <option value="x1Samoa" data-alt="WS">Samoa</option>
							    <option value="x1San Marino" data-alt="SM">San Marino</option>
							    <option value="x1Sao Tome and Principe" data-alt="ST">Sao Tome and Principe</option>
							    <option value="x1Saudi Arabia" data-alt="SA">Saudi Arabia</option>
							    <option value="x1Senegal" data-alt="SN">Senegal</option>
							    <option value="x1Serbia" data-alt="RS">Serbia</option>
							    <option value="x1Seychelles" data-alt="SC">Seychelles</option>
							    <option value="x1Sierra Leone" data-alt="SL">Sierra Leone</option>
							    <option value="x1Singapore" data-alt="SG">Singapore</option>
							    <option value="x1Sint Maarten (Dutch Part)" data-alt="SX">Sint Maarten (Dutch Part)</option>
							    <option value="x1Slovakia" data-alt="SK">Slovakia</option>
							    <option value="x1Slovenia" data-alt="SI">Slovenia</option>
							    <option value="x1Solomon Islands" data-alt="SB">Solomon Islands</option>
							    <option value="x1Somalia" data-alt="SO">Somalia</option>
							    <option value="x1South Africa" data-alt="ZA">South Africa</option>
							    <option value="x1South Georgia and the South Sandwich Islands" data-alt="GS">South Georgia and the South Sandwich Islands</option>
							    <option value="x1South Sudan" data-alt="SS">South Sudan</option>
							    <option value="x1Spain" data-alt="ES España">Spain</option>
							    <option value="x1Sri Lanka" data-alt="LK">Sri Lanka</option>
							    <option value="x1Sudan" data-alt="SD">Sudan</option>
							    <option value="x1Suriname" data-alt="SR">Suriname</option>
							    <option value="x1Svalbard and Jan Mayen" data-alt="SJ">Svalbard and Jan Mayen</option>
							    <option value="x1Swaziland" data-alt="SZ">Swaziland</option>
							    <option value="x1Sweden" data-alt="SE Sverige">Sweden</option>
							    <option value="x1Switzerland" data-alt="CH Swiss Confederation Schweiz Suisse Svizzera Svizra">Switzerland</option>
							    <option value="x1Syrian Arab Republic" data-alt="SY Syria">Syrian Arab Republic</option>
							    <option value="x1Taiwan, Province of China" data-alt="TW">Taiwan, Province of China</option>
							    <option value="x1Tajikistan" data-alt="TJ">Tajikistan</option>
							    <option value="x1Tanzania, United Republic of" data-alt="TZ">Tanzania, United Republic of</option>
							    <option value="x1Thailand" data-alt="TH">Thailand</option>
							    <option value="x1Timor-Leste" data-alt="TL">Timor-Leste</option>
							    <option value="x1Togo" data-alt="TG">Togo</option>
							    <option value="x1Tokelau" data-alt="TK">Tokelau</option>
							    <option value="x1Tonga" data-alt="TO">Tonga</option>
							    <option value="x1Trinidad and Tobago" data-alt="TT">Trinidad and Tobago</option>
							    <option value="x1Tunisia" data-alt="TN">Tunisia</option>
							    <option value="x1Turkey" data-alt="TR Türkiye Turkiye">Turkey</option>
							    <option value="x1Turkmenistan" data-alt="TM">Turkmenistan</option>
							    <option value="x1Turks and Caicos Islands" data-alt="TC">Turks and Caicos Islands</option>
							    <option value="x1Tuvalu" data-alt="TV">Tuvalu</option>
							    <option value="x1Uganda" data-alt="UG">Uganda</option>
							    <option value="x1Ukraine" data-alt="UA Ukrayina">Ukraine</option>
							    <option value="x1United Arab Emirates" data-alt="AE UAE Emirates">United Arab Emirates</option>
							    <option value="x1United Kingdom" data-alt="GB Great Britain England UK Wales Scotland Northern Ireland">United Kingdom</option>
							    <option value="x1United States" data-alt="US USA United States of America">United States</option>
							    <option value="x1United States Minor Outlying Islands" data-alt="UM">United States Minor Outlying Islands</option>
							    <option value="x1Uruguay" data-alt="UY">Uruguay</option>
							    <option value="x1Uzbekistan" data-alt="UZ">Uzbekistan</option>
							    <option value="x1Vanuatu" data-alt="VU">Vanuatu</option>
							    <option value="x1Venezuela" data-alt="VE">Venezuela</option>
							    <option value="x1Vietnam" data-alt="VN">Vietnam</option>
							    <option value="x1Virgin Islands, British" data-alt="VG">Virgin Islands, British</option>
							    <option value="x1Virgin Islands, U.S." data-alt="VI">Virgin Islands, U.S.</option>
							    <option value="x1Wallis and Futuna" data-alt="WF">Wallis and Futuna</option>
							    <option value="x1Western Sahara" data-alt="EH">Western Sahara</option>
							    <option value="x1Yemen" data-alt="YE">Yemen</option>
							    <option value="x1Zambia" data-alt="ZM">Zambia</option>
							    <option value="x1Zimbabwe" data-alt="ZW">Zimbabwe</option>
						    </select>
					    </div>
				    </form>
			    </div>
		    </div>
	    </div>

	    <h2>Checkboxes</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="sidebar">
				    <p>Let users select one or more options.</p>
			    </div>
			    <div class="not-sidebar">
				    <form action="" class="form l-box l-box--no-border">
					    <fieldset class="field checkbox-group">
						    <legend class="group-legend">Subscribe to our newsletter</legend>
						    <span class="field-description">We will send you a monthly newsletter with promotions. We will guard your email with our lives and never give it out to a third-party.</span>
						    <label for="newsletter">
							    <input type="checkbox" id="newsletter" name="newsletter" class="input--checkbox" value="data-value">
							    <span class="checkbox-label">Yes, I would love to receive your newsletter once a month</span>
						    </label>
					    </fieldset>
				    </form>
			    </div>
		    </div>
	    </div>

	    <h2>Radio buttons</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="sidebar">
				    <p>Let users select one option from a group.</p>
				    <p>Radio options are easier to read and quicker to scan when laid out one under the other instead of next to each other.</p>
				    <p>Radio buttons cannot be unchecked once they are selected. So if the question is optional, you'll need a &lsquo;none&rsquo; option.</p>
			    </div>
			    <div class="not-sidebar">
				    <form action="" class="form l-box l-box--no-border">
					    <fieldset class="field radio-group" role="radiogroup">
						    <legend class="group-legend">Do you own any pets?</legend>
						    <label for="pets_yes">
							    <input type="radio" id="pets_yes" name="pets" class="input--radio" value="yes">
							    <span class="radio-label">Yes</span>
						    </label>
						    <label for="pets_no">
							    <input type="radio" id="pets_no" name="pets" class="input--radio" value="no">
							    <span class="radio-label">No</span>
						    </label>
						    <label for="pets_none">
							    <input type="radio" id="pets_none" name="pets" class="input--radio" value="none">
							    <span class="radio-label">Prefer not to say</span>
						    </label>
					    </fieldset>
					    <fieldset class="field segmented-group-wrapper">
						    <legend class="group-legend">Segmented options (Radio)</legend>
						    <span class="field-description">We understand that different people enjoy books in different ways, which is why we&rsquo;re giving you lots of options.</span>

						    <div class="segmented-group">
							    <label for="segmented-option-1">
								    <input type="radio" id="segmented-option-1" name="segmented-options" class="input--radio" value="data-value" data-parsley-error-message="Please select your preferred choice." required aria-invalid="false">
								    <div class="segmented-label">
									    <h2>Approachable option</h2>
									    <div>Copy to explain this option in more detail.</div>
								    </div>
							    </label>
							    <label for="segmented-option-2">
								    <input type="radio" id="segmented-option-2" name="segmented-options" class="input--radio" value="data-value" checked>
								    <div class="segmented-label">
									    <h2>Bell curve option</h2>
									    <div>Copy to explain this option in more detail.</div>
								    </div>
							    </label>
							    <label for="segmented-option-3">
								    <input type="radio" id="segmented-option-3" name="segmented-options" class="input--radio" value="data-value">
								    <div class="segmented-label">
									    <h2>Expensive option</h2>
									    <div>Copy to explain this option in more detail.</div>
								    </div>
							    </label>
						    </div>

					    </fieldset>
				    </form>
			    </div>
		    </div>
	    </div>

	    <h2>Search forms</h2>
	    <div class="l-sidebar">
		    <div>
			    <div class="sidebar"></div>
			    <div class="not-sidebar">
				    <form action="">
					    <div class="fieldset-wrapper">
						    <label for="search">Search products
							    <span class="field-description">For example, “black wallet”</span>
						    </label>
						    <div class="input-group">
							    <input type="search" id="search" name="search" value>
							    <div class="input-group__button">
								    <button type="submit" class="button" name="search">Search</button>
							    </div>
						    </div>
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

<script src="../dist/assets/js/libraries/pikaday.js"></script>

<script>
	/* Instantiate PikaDay */
	var picker = new Pikaday({
			field: document.querySelector('.js-pikaday-arrival'),
			firstDay: 1,
			minDate: new Date(),
			maxDate: new Date(2020, 12, 31),
			yearRange: [2000,2020]
	});
</script>

<script src="../dist/assets/js/libraries/accessible-autocomplete.min.js"></script>

<script>
	/* Instantiate Accessible Autocomplete */
	accessibleAutocomplete.enhanceSelectElement({
		defaultValue: '',
		selectElement: document.querySelector('#destination'),
		showAllValues: true,
		required: true
	})
</script>


<?php require_once('../_includes/scripts__footer.html'); ?>

</body>
</html>
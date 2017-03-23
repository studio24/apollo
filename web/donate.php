<!doctype html>
<html lang="en" class="">
<head>
    <meta charset="utf-8">
    <title>Apollo</title>
    <!-- Force IE to use latest rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <link rel="stylesheet" href="/assets/styles/styles.css" type="text/css"
          media="screen"/>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Proza+Libre:400,400i,600"
          rel="stylesheet">

</head>

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/_includes/scripts__header.html' ); ?>

<body>

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/assets/svg/icons.svg' ); ?>


<header class="island island--fullpage bg bg--primary">

    <div class="group">
        <div class="group__item group__item--primary">

            <h1 class="heading size--xxxl">Donation template</h1>
            <div class="lead">
                <p>A donation is a gift given by physical or legal persons,
                    typically for charitable purposes and/or to benefit a
                    cause.</p>
            </div>

        </div>
    </div>

</header>


<!-- Main -->
<main>


    <section class="island island--fullpage">
        <div class="group">
            <div class="group__item">

                <h3 class="small-caps">Templates</h3>
                <h3 id="typography-and-copy" class="heading size--xl no-margin">
                    Donation, Landing/Call-to-action</h3>

            </div>
        </div>
        <div class="group">
            <div class="group__item group__item--secondary">

                <div class="lead">
                    <p>The only purpose of our call-to-action is to get people
                        to donate.</p>
                </div>

            </div>
            <div class="group__item group__item--primary">


                <p>It’s about the impact money will make. Tell your compelling
                    stories so donors can see this impact. Take your donor on a
                    journey from thinking to feeling. Move your donors from
                    their logical brain into their emotional brain.</p>


                <figure class="banner" role="banner">
                    <img class="banner__image"
                         src="/assets/images/abraham-osorio-184519-cropped.jpg"
                         alt="Descriptive text.">
                    <figcaption class="banner__caption">

                        <h2 class="heading size--xxl">Your donation helps keep
                            our air ambulance flying. Saving lives, wherever
                            they are.</h2>
                        <div class="lead">
                            <p>Together, we save lives. We couldn’t keep flying
                                without your essential donations.</p>
                        </div>
                        <p>
                            <a href="#donate-form"
                               class="button button--secondary size--xl"> <span>Donate today!</span>
                                <svg class="icon">
                                    <use xlink:href="#arrow-right"/>
                                </svg>
                            </a>
                        </p>
                        <p>
                            <a href="/">More ways to support us</a>
                        </p>

                    </figcaption>
                </figure>


            </div>
        </div>
    </section>


    <section class="island island--fullpage" id="donate-form">
        <div class="group">
            <div class="group__item">

                <h3 class="small-caps">Templates</h3>
                <h3 id="typography-and-copy" class="heading size--xl no-margin">
                    Donation, Form</h3>

            </div>
        </div>
        <div class="group">
            <div class="group__item group__item--secondary">

                <div class="lead">
                    <p>The first two questions this page needs to answer is;
                        Where am I and why should I care?</p>
                </div>
                <p>We make sure to make the form as easy to complete as
                    possible.</p>

            </div>
            <div class="group__item group__item--primary">


                <form action=""
                      class="padding--surround form js-validate-form">


                    <!-- Segmented group -->
                    <fieldset
                            class="field-group segmented-group-wrapper">

                        <legend class="group-legend heading size--xxl">
                            Keep our air ambulances flying
                        </legend>

                        <!-- Wrapper for labels -->
                        <div class="segmented-group">

                            <label for="segmented-option-1"> <input
                                        id="segmented-option-1"
                                        name="segmented-options"
                                        class="input--radio"
                                        value="data-value"
                                        type="radio"
                                        data-parsley-error-message="Please select your preferred choice."
                                        required
                                        aria-invalid="false">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;5</h2>
                                    <div class="margin--half">Keep our
                                        air ambulances stocked with much needed Syringes
                                        and Tourniquets.
                                    </div>
                                </div>
                            </label>

                            <label for="segmented-option-2"> <input
                                        id="segmented-option-2"
                                        name="segmented-options"
                                        class="input--radio"
                                        value="data-value"
                                        type="radio"
                                        checked>
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;25</h2>
                                    <div class="margin--half">Allows us to stock
                                        our air ambulances with 200 Disposable
                                        Gloves.
                                    </div>
                                </div>
                            </label>

                            <label for="segmented-option-3"> <input
                                        id="segmented-option-3"
                                        name="segmented-options"
                                        class="input--radio"
                                        value="data-value"
                                        type="radio">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;50</h2>
                                    <div class="margin--half">Re-fuel one of our
                                        air ambulances.
                                    </div>
                                </div>
                            </label>

                            <label for="segmented-option-4"> <input
                                        id="segmented-option-4"
                                        name="segmented-options"
                                        class="input--radio"
                                        value="data-value"
                                        type="radio">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;10</h2>
                                </div>
                            </label>

                            <label for="segmented-option-5"> <input
                                        id="segmented-option-5"
                                        name="segmented-options"
                                        class="input--radio"
                                        value="data-value"
                                        type="radio">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;20</h2>
                                </div>
                            </label>

                            <label for="segmented-option-6"> <input
                                        id="segmented-option-6"
                                        name="segmented-options"
                                        class="input--radio"
                                        value="data-value"
                                        type="radio">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;100</h2>
                                </div>
                            </label>

                            <label for="segmented-option-7"> <input
                                        id="segmented-option-7"
                                        name="segmented-options"
                                        class="input--radio"
                                        value="data-value"
                                        type="radio">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;250</h2>
                                </div>
                            </label>

                        </div>
                        <!-- / Wrapper for labels -->

                    </fieldset>
                    <!-- / Segmented group -->

                    <div class="field-group margin--default">
                        <label for="guide-form-field-12" class="field-label">
                            Choose your own amount to donate
                            <small>(Optional)</small>
                        </label> <input type="tel"
                                        class="field-input field-input--text"
                                        name="guide-form-field-12"
                                        id="guide-form-field-12"
                                        placeholder="E.g. &pound;150"
                                        data-parsley-error-message="Please complete this field with a valid email address."
                                        required
                                        aria-invalid="false">
                    </div>


                    <!-- Checkbox -->
                    <fieldset class="field-group checkbox-group">

                        <legend class="group-legend">
                            Save a life, every month
                        </legend>

                        <div class="field-description">
                            By donating regularly, even a small donation
                            can make a big difference.
                        </div>

                        <label for="checkbox-input"> <input id="checkbox-input"
                                                            name="checkbox-input"
                                                            class="input--checkbox"
                                                            value="data-value"
                                                            type="checkbox">
                            <span
                                    class="checkbox-label">
                                Yes, donate <span
                                        class="js-donation-amount strong">&pound;25</span> every month
                            </span> </label>

                    </fieldset>
                    <!-- / Checkbox -->


                    <!-- Checkbox -->
                    <fieldset class="field-group checkbox-group">

                        <legend class="group-legend">
                            Giftaid
                        </legend>

                        <div class="field-description">
                            I am a UK taxpayer and I understand that if I pay
                            less Income and /or Capital Gains Tax than the
                            amount of Gift Aid claimed on all my donations in
                            the relevant tax year, it is my responsibility to
                            pay any difference.
                        </div>

                        <label for="checkbox-input-2"> <input
                                    id="checkbox-input-2"
                                    name="checkbox-input-2"
                                    class="input--checkbox"
                                    value="data-value"
                                    type="checkbox"> <span
                                    class="checkbox-label">
                                Yes, make my donation worth <span
                                        class="js-giftaid-amount strong">&pound;31.25</span> (at no extra cost to me)
                            </span> </label>

                    </fieldset>
                    <!-- / Checkbox -->




                    <div class="fieldset-wrapper bg bg--subtle js-payment-fields">
                        <fieldset>

                            <legend class="heading size--xl">Payment details</legend>



                            <div class="group">
                                <div class="group__item flex-3 field-group">
                                    <label for="cardnumber"
                                           class="field-label"> Card
                                        number </label> <input type="text"
                                                               class="field-input field-input--date"
                                                               name="cardnumber"
                                                               id="cardnumber"
                                                               placeholder="E.g. 1234 5678 9012 3456"
                                                               pattern="[0-9]{14,23}"
                                                               autocomplete="cc-number" maxlength="38"
                                                               data-parsley-error-message="Please complete this field with the card number on the front of your card."
                                                               required
                                                               aria-invalid="false">
                                </div>
                                <div class="group__item group__item--dont-grow">
                                    <svg class="icon credit-card js-credit-card"
                                         data-focussed="none"
                                         aria-hidden="true">
                                        <use xlink:href="#credit-card"/>
                                    </svg>
                                </div>
                            </div>


                            <div class="group">
                                <div class="group__item flex-2 field-group">
                                    <label for="ccname"
                                           class="field-label"> Name on
                                        card </label> <input type="text"
                                                             class="field-input field-input--date"
                                                             name="ccname"
                                                             id="ccname"
                                                             placeholder="E.g. J O SMITH"
                                                             autocomplete="cc-name"
                                                             data-parsley-error-message="Please complete this field with the name as it appears on the front of your card."
                                                             required
                                                             aria-invalid="false">
                                </div>
                                <div class="group__item field-group">
                                    <label for="cc-exp"
                                           class="field-label"> Expiry (MM/YY) </label>
                                    <input type="tel"
                                           class="field-input field-input--date"
                                           name="cc-exp"
                                           id="cc-exp"
                                           placeholder="E.g. 10/19"
                                           autocomplete="cc-exp"
                                           data-parsley-error-message="Please complete this field with the expiration month and year on the front of your card."
                                           required
                                           aria-invalid="false">
                                </div>
                                <div class="group__item field-group">
                                    <label for="cvc"
                                           class="field-label"> CVV (Security
                                        code) </label> <input type="tel"
                                                              class="field-input field-input--date"
                                                              name="cvc"
                                                              id="cvc"
                                                              pattern="[0-9]*"
                                                              autocomplete="cc-csc"
                                                              data-parsley-error-message="Please complete this field with the 3-digit security number on the back of your card."
                                                              required
                                                              aria-invalid="false">
                                </div>
                            </div>

                        </fieldset>
                    </div>



                    <h2 class="heading size size--l">Subscription details
                        (optional)</h2>


                    <div class="field-group">
                        <label for="guide-form-field-1" class="field-label">
                            Email
                            <small>(Required)</small>
                            <div class="field-description">
                                We&rsquo;ll only contact you if there&rsquo;s
                                something wrong with your order.
                            </div>
                        </label> <input type="email"
                                        class="field-input field-input--text"
                                        name="guide-form-field-1"
                                        id="guide-form-field-1"
                                        placeholder="E.g. jane.smith@example.co.uk"
                                        autocomplete="email"
                                        data-parsley-error-message="Please complete this field with a valid email address."
                                        required
                                        aria-invalid="false">
                    </div>


                    <!-- Checkbox -->
                    <fieldset class="field-group checkbox-group">

                        <legend class="group-legend">
                            Subscribe to our newsletter
                        </legend>

                        <div class="field-description">
                            We will send you a monthly newsletter with
                            promotions. We will guard your email with our lives
                            and never give it out to a third-party. <a
                                    href="/privacy">Our Privacy Policy</a>.
                        </div>

                        <label for="checkbox-input"> <input id="checkbox-input"
                                                            name="checkbox-input"
                                                            class="input--checkbox"
                                                            value="data-value"
                                                            type="checkbox">
                            <span
                                    class="checkbox-label">
                                Yes, I would love to receive your newsletter once a month
                            </span> </label>

                    </fieldset>
                    <!-- / Checkbox -->
                    <hr>


                    <div class="field-group">
                        <button type="submit"
                                class="button button--success size--xl">
                            <span>Donate <span
                                        class="js-donation-amount">&pound;25</span>
                            and save another life</span>
                            <svg class="icon">
                                <use xlink:href="#arrow-right"/>
                            </svg>
                        </button>
                    </div>


                </form>


            </div>
        </div>
    </section>


    <section class="island island--fullpage">
        <div class="group">
            <div class="group__item">

                <h3 class="small-caps">Templates</h3>
                <h3 id="typography-and-copy" class="heading size--xl no-margin">
                    Donation, Thank you</h3>

            </div>
        </div>
        <div class="group">
            <div class="group__item group__item--secondary">

                <div class="lead">
                    <p>We make sure to thank everyone who donates. This also
                        gives us an opportunity to encourage our donators to
                        share their altruistic deed to their friends.</p>
                </div>

            </div>
            <div class="group__item group__item--primary">


                <h1 class="size--xxl heading">Thank you!</h1>
                <div class="lead">
                    <p>Thanks to your donation of &pound;25, we can stock our
                        air ambulances with 50 disposable gloves.</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aliquid blanditiis consectetur dolor dolorem dolores eius
                    eligendi eos ex ipsa, iusto quaerat quibusdam repudiandae
                    ut, voluptas, voluptatem. Dignissimos distinctio fugiat
                    ipsum non officia.</p>


                <h2 class="size--xl heading">Encourage your friends to help us
                    as well</h2>
                <p>or</p>
                <h2 class="size--xl heading">Spread the word, save another life</h2>
                <p>or</p>
                <h2 class="size--xl heading">Show the world your support for us!</h2>

                <!-- Share this -->
                <div class="towncrier">
                    <a href="#share-this"
                       class="towncrier__share-button js-towncrier__share-button"
                       aria-label="Open share panel"
                       aria-expanded="false"
                       aria-haspopup="true">
                        <svg class="icon towncrier__share-icon"
                             aria-hidden="true">
                            <use xlink:href="#share"/>
                        </svg>
                        <span class="towncrier__share-text">Share this</span>
                    </a>

                    <!-- change aria-hidden to `true` if js -->
                    <div class="towncrier__panel js-towncrier__panel"
                         id="share-this"
                         aria-hidden="true">

                        <p class="heading size--xl towncrier__title"
                           aria-hidden="true">Share this with</p>

                        <ul class="towncrier__channels">
                            <li class="towncrier__channel towncrier__channel--email">
                                <a class="towncrier__channel-link"
                                   href="mailto:?subject={SUBJECT}&amp;body={URL}">
                                    <svg class="icon towncrier__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#email"/>
                                    </svg>
                                    <span class="towncrier__channel-label"
                                          aria-hidden="true">Email</span> <span
                                            class="visuallyhidden">Share this with Email</span>
                                </a>
                            </li>
                            <li class="towncrier__channel towncrier__channel--facebook">
                                <a class="towncrier__channel-link"
                                   href="https://www.facebook.com/sharer/sharer.php?u={URL}">
                                    <svg class="icon towncrier__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#facebook"/>
                                    </svg>
                                    <span class="towncrier__channel-label"
                                          aria-hidden="true">Facebook</span>
                                    <span class="visuallyhidden">Share this with Facebook</span>
                                </a>
                            </li>
                            <li class="towncrier__channel towncrier__channel--twitter">
                                <a class="towncrier__channel-link"
                                   href="https://twitter.com/intent/tweet?text={TEXT}&amp;url={URL}">
                                    <svg class="icon towncrier__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#twitter"/>
                                    </svg>
                                    <span class="towncrier__channel-label"
                                          aria-hidden="true">Twitter</span>
                                    <span class="visuallyhidden">Share this with Twitter</span>
                                </a>
                            </li>
                            <li class="towncrier__channel towncrier__channel--pinterest">
                                <a class="towncrier__channel-link"
                                   href="https://uk.pinterest.com/pin/create/bookmarklet/?url={URL}&amp;description={DESCRIPTION}&amp;title={TITLE}&amp;media={IMAGE}">
                                    <svg class="icon towncrier__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#pinterest"/>
                                    </svg>
                                    <span class="towncrier__channel-label"
                                          aria-hidden="true">Pinterest</span>
                                    <span class="visuallyhidden">Share this with Pinterest</span>
                                </a>
                            </li>
                            <li class="towncrier__channel towncrier__channel--whatsapp">
                                <a class="towncrier__channel-link"
                                   href="whatsapp://send?text={TEXT - URL}%3Focid%3Dwsnews.chat-apps.in-app-msg.whatsapp.trial.link1_.auin">
                                    <svg class="icon towncrier__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#whatsapp"/>
                                    </svg>
                                    <span class="towncrier__channel-label"
                                          aria-hidden="true">WhatsApp</span>
                                    <span class="visuallyhidden">Share this with WhatsApp</span>
                                </a>
                            </li>
                            <li class="towncrier__channel towncrier__channel--linkedin">
                                <a class="towncrier__channel-link"
                                   href="https://www.linkedin.com/shareArticle?mini=true&url={URL}&title={TITLE}&summary={SUMMARY optional}&source={SOURCE optional}">
                                    <svg class="icon towncrier__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#linkedin"/>
                                    </svg>
                                    <span class="towncrier__channel-label"
                                          aria-hidden="true">LinkedIn</span>
                                    <span class="visuallyhidden">Share this with LinkedIn</span>
                                </a>
                            </li>
                            <li class="towncrier__channel towncrier__channel--google-plus">
                                <a class="towncrier__channel-link"
                                   href="https://plus.google.com/share?url={URL}">
                                    <svg class="icon towncrier__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#google-plus"/>
                                    </svg>
                                    <span class="towncrier__channel-label"
                                          aria-hidden="true">Google +</span>
                                    <span class="visuallyhidden">Share this with Google plus</span>
                                </a>
                            </li>
                        </ul>

                        <button class="towncrier__close-button js-towncrier__share-button">
                            <span class="visuallyhidden">Close share panel</span>
                            <span class="towncrier__close-button-graphic"
                                  aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
                <!-- / Share this -->


            </div>
        </div>
    </section>


</main>
<!-- / Main -->

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/_includes/global-footer.html' ); ?>
<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/_includes/scripts__footer.html' ); ?>

</body>
</html>

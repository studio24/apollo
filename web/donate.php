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
                         src="/assets/images/production/abraham-osorio-184519-cropped.jpg"
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
                <p>The average donation in 2014 was £14.</p>

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
                                        class="input--radio js-donation-value"
                                        value="3"
                                        type="radio"
                                        data-parsley-error-message="Please select your preferred choice."
                                        required
                                        aria-invalid="false">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;3</h2>
                                    <div class="margin--half">Keep our air
                                        ambulances stocked with much needed
                                        Syringes and Tourniquets.
                                    </div>
                                </div>
                            </label>

                            <label for="segmented-option-2"> <input
                                        id="segmented-option-2"
                                        name="segmented-options"
                                        class="input--radio js-donation-value"
                                        value="15"
                                        type="radio"
                                        checked>
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;15</h2>
                                    <div class="margin--half">Allows us to stock
                                        our air ambulances with 200 Disposable
                                        Gloves.
                                    </div>
                                </div>
                            </label>

                            <label for="segmented-option-3"> <input
                                        id="segmented-option-3"
                                        name="segmented-options"
                                        class="input--radio js-donation-value"
                                        value="35"
                                        type="radio">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;35</h2>
                                    <div class="margin--half">Re-fuel one of our
                                        air ambulances.
                                    </div>
                                </div>
                            </label>

                            <label for="segmented-option-4"> <input
                                        id="segmented-option-4"
                                        name="segmented-options"
                                        class="input--radio js-donation-value"
                                        value="10"
                                        type="radio">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;10</h2>
                                </div>
                            </label>

                            <label for="segmented-option-5"> <input
                                        id="segmented-option-5"
                                        name="segmented-options"
                                        class="input--radio js-donation-value"
                                        value="20"
                                        type="radio">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">&pound;20</h2>
                                </div>
                            </label>


                            <label for="segmented-option-7"> <input
                                        id="segmented-option-7"
                                        name="segmented-options"
                                        class="input--radio js-donation-value"
                                        value="other"
                                        type="radio">
                                <div class="segmented-label">

                                    <div class="field-group no-margin">
                                        <label for="guide-form-field-12" class="field-label size--xl heading">
                                            Choose your own amount
                                        </label> <input type="tel"
                                                        class="field-input field-input--text js-donation-value js-donation-custom"
                                                        name="guide-form-field-12"
                                                        id="guide-form-field-12"
                                                        placeholder="E.g. &pound;150"
                                                        value="15"
                                                        aria-invalid="false">
                                    </div>

                                </div>
                            </label>

                        </div>
                        <!-- / Wrapper for labels -->

                    </fieldset>
                    <!-- / Segmented group -->


                    <!-- Checkbox -->
                    <fieldset class="field-group checkbox-group">

                        <legend class="group-legend heading size--xl">
                            Save a life, every month
                        </legend>

                        <div class="field-description">
                            By donating regularly, even a small donation can
                            make a big difference.
                        </div>

                        <label for="checkbox-input"> <input id="checkbox-input"
                                                            name="checkbox-input"
                                                            class="input--checkbox"
                                                            value="data-value"
                                                            type="checkbox">
                            <span
                                    class="checkbox-label">
                                Yes, donate <span class="strong pe-">&pound;<span
                                            class="js-donation-amount">15</span></span> every month
                            </span> </label>

                    </fieldset>
                    <!-- / Checkbox -->


                    <!-- Checkbox -->
                    <fieldset class="field-group checkbox-group">

                        <legend class="group-legend heading size--xl">
                            Giftaid
                        </legend>

                        <div class="field-description">
                            <div class="giftaid-logo">
                                <svg width="401" height="142" viewBox="0 0 401 142" xmlns="http://www.w3.org/2000/svg"><title>Giftaid</title><path d="M246.7 25.6c-.6.8-.5 3.3 1 4.6 1 1 1 1 1 2 .2 1.4 1 1.5 2.6 1.4 1.7 0 3-1.2 3.3-3.7.2-2.5-2.2-4.6-4-5-2-.6-3-.4-4 .6zm34.4 35s0 3.4.3 6.3c.2 2.5 1 8 2 9.8 1.5 2.7 4.5 2.7 7 1.4 3-1.8 1.5-5 .3-6.2-1-1-3.5-2.2-4.2-6.3-.5-2.5 0-13.5.6-17.3.5-2.5 2-7.8 3.4-10.3 1.2-2.3 8.5-16 8.6-20.7 0-2-2-3.7-5.4-3.4-3.4.3-4.2 3-4.2 4.8 0 1.7-3.7 14.2-3.8 14.8-.3 1-1 6-2.7 6-4.2 0-7.6 1-11 3.6-1.6 1.3-7.3 5.8-10.6 10.4-1.6 2-8.4 11-7.6 21.4.7 9.6 7.4 8 9.3 7.6C272 81.2 278 67 279 65c1.6-3 1-2.2 2.3-4.5zm-5.2-13s3-2.6 4.3-2.6c.6 0-.4 1.7 1.7 2.7 1 .5-1.2 7.7-5.7 14.6-10.3 16-15 15.2-15.6 10.4-.8-10 12.5-23 15.4-25.2zm55.4-27.8c1.8 3.5 5 2.3 5.5 1.4.5-1 1-1 2.4-1.7 3-1-2-6-6.4-4.6-1 0-1 1.3-1 1.3 0 1-1 2.3-.4 3.5zm-9 55.6c5 4.6 10 1.7 12.4-.3 7.7-6 23.6-34.3 23.6-34.3 0 1-6.6 33.3 2.3 37 5.8 2.2 19.2-9.3 20.7-10.3 8.8-6 3.4-8.3 1.7-8.3-4.6 0-3.8 3.3-5 4.8-2 2.5-10.4 11-14.4 8.7-2.2-1.2-1.7-8.4-1.5-10 1.4-17.2 1.8-20.3 2.7-24.2.6-2.2 3.3-2.2 5-2.5 22-4 26-2.4 28.7-3.7 2.2-1 2.6-5.6-.5-6.6-1.6-.5-3.4.6-6.6 1.8-3.2 1.2-19.5 4.8-22 5.2-2 .3-2.6 0-3-.7-.6-.7.4-8.7 3.5-15.4 1.3-3 1.3-7.3-3.2-7.7-1.8 0-3.4.4-4 2-.8 1.6-2 16-2.4 16.8-.3 1-2 1.7-2.4 3.3-.4 1.6 0 2.7-1.2 3-1.2.4-4.2.7-5.4 1-1.3.3-2 2.8-2.2 4.3 0 1.4 2.3.6 3.4.4 1.3-.2 4.5-1.8 2.3 1-1 1-16.3 25-22.3 30-7 5.5-6.4-5.6-6.2-7.5 1-11.5 6-19 6.7-21 .7-1.7 1-7-5-6-1.7.4-2.7 2.3-2.8 2.8v.2c-.6 5.3-10.8 29-3 36.4zM148.8 52.6l-6.3 1.3c-3 .3-4.4 2-4.3 4 .2 1.7.8 2.6 3.3 2 2.3-.3 4.3-2.3 6.3-2.3 0 0-4.2 17.5-4.4 19.8-.3 2.3-1.5 8.7 1 12.4 5.6 8 16.8-1.3 17.8-2.3.8-.8 8-7 10.3-12 1.2-2.4-1-3-2.3-3.5-1.4-.5-4.4.4-4.8 2.2-1 4-10.7 14.8-15.5 12.6-5.7-2.5 4.6-31.2 4.6-31.2 1.2-.5 7.4-2 13.3-3.6 6.8-1.8 27.6-6 23-12-2.4-3-8.3 1.5-10.3 2.5-7.2 3.4-24.8 8.5-24.8 8.5s2.2-10.3 3-12.4c.8-2.3 4-3.8 4.4-8 .5-4.7-5.3-7-8-1.7-.7 1.2-1.5 4.2-1.5 4.3-.8.7-7.2 3.2-13.5 6.2-2 1-13.2 5-13.2 5s3.4-10.8 7.3-19.8c2.8-6 6.5-14.3 13-16 6-1.6 3.2 4.8 6 6.4 3.5 2.2 5.7-.4 6.2-3 .4-2 .3-12.4-10.3-11.3-10.2 1-18.3 16.4-28.2 45.2 0 0-8 5-14.6 6.4-3.2.6-4.6 1-5 2-1.2 3 .8 5.2 1 5.5 2 2.2 16.6-7.5 16.6-7.4-.3.4-12.3 46-12.4 46.5-.7 4-4.5 14-4.3 18.4.2 2.4 1 7.2 4.5 7 7 .5 5.7-9.4 5.2-11.2-1-3.8 4-28.6 8.6-47l3.2-11.2c.5-2.5 2-4.2 3.7-5 0 0 25.3-12 25.5-11.8l-4 14.4zM98 31.4c-.4-1-2.7-3.7-5.8-1.5-4.6 3.2.7 7.7 1.5 10 1 2 5.5 4 4.8-.4 0-.7.8-5.6-.4-8.2zm-8.6 21c-3.2 0-3 2.4-3.6 4.4-.6 2-6 20-6.8 23.2-.7 3.2-1.2 6 0 10.6 1 4.5 6 3.2 6.6 2.4 2.5-3.6.3-4.6.2-7 0-2.7.7-5.4 1.2-9 .2-1.2.6-6.8.8-7.6.2-.8 2-7.2 4.5-11 1-1.7 2-6-3-6zm-29.5 63c-.5.6-.8 1.3-1.2 2-4 6.3-9 12-15.2 16-8.5 5.7-16.4 7.8-25.3 7.7-5.2 0-10.2-.8-14.5-3.5-3.5-2.2-4-5.7-3-8 1.6-3.2 6.2-3 8-1 5 4.5 8 6.3 14.2 6 5-.2 10.4-1.8 14.6-4.3C63.6 115 63.3 88 64.4 71.5c0-1-.5-.3-.6.2-1 2.8-2.5 6.2-4.7 10-1.7 3.5-5.2 8.4-10.8 12-3.3 2.2-8.6 3.3-12.4.8-1.4-.8-9.3-5.5-2.6-19.4 4.3-8.6 13.2-14.7 15.2-16 5-3 8.4-4.6 12-4.3 2 0 2.3 1 3.7.8 1-1 1.3-1.6 2.6-2 1.8-.2 4 1.3 4.7 4 .8 2.8-1.3 7.3-2 9.5 0 0 2 28-9.4 48.4zm-2.8-56c-5.3.5-14.8 13-16.7 17.6-2 4.6-2.8 9-.4 10.8 5 3.8 10-2.6 11.6-4 1-1 7.4-8.2 9-15.3 1.2-4.8 1.7-9.7-3.4-9.2zm188-7.4c-2 3.5-3.2 7.7-3.7 11.6-.3 2-.7 11-.6 12 0 .2.2 4.2.7 6 .2 1 2 4.3-3.4 5-3 .5-3-7.3-3-8.6-.2-2.7.2-12.2.5-13.6.3-1.5-.3 0-1 1-1.2 2.2-2.7 5.2-4.5 8-2.5 4-7.8 13.2-15 12.6-3-.2-5.7-.5-7.3-8.2-.6-3-.3-6.8-.3-9 0-.5 0-1-.4-1-2.6 6.2-11 24-20.5 20-4.4-1.8-6.6-7.5-1.7-18.6C190 58.2 202 45 206.6 44c4.3-.8 4.7 1.3 4.7 1.3.4-.8 3-.7 3.6.5.8 1.5 1.3 1.7.8 5.7-.3 2.3-2.4 16.7-2 21.7 0 2.3.5 8 3 8.3 4 .5 9-8.3 9.5-9.2 1.3-1.8 10-16.7 11.2-18.8L240 48c.7-1.6 3-1.8 5-.4s1 3.2.3 4.4zm-42 16c11.2-17.4 5.6-20 5-19.8-10.8 6-19 24.4-18.3 30.5 1 8.4 7.4-1.5 13.3-10.8z" fill="#000" fill-rule="evenodd"/></svg>

                            </div>
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
                                        class="strong">&pound;<span
                                            class="js-giftaid-amount"><?php echo 15 * 1.25; ?></span></span> at no extra cost to me
                            </span> </label>

                    </fieldset>
                    <!-- / Checkbox -->

<!--                    Turn that into £62.50 with Gift Aid-->
<!--                    Tick ‘Yes’ to Gift Aid and the Government will give us 25% on top of your donation.-->
<!---->
<!--                    It doesn’t cost you a penny, and helps to keep us going.-->



                    <div class="field-group">
                        <label for="guide-form-field-1"
                               class="field-label">
                            <span class="heading size--xl">Email</span>
                            <div class="field-description">
                                We&rsquo;ll only contact you if there&rsquo;s
                                something wrong with your donation.
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





                    <!-- Segmented group -->
                    <fieldset
                            class="field-group segmented-group-wrapper">

                        <legend class="group-legend heading size--xxl">
                            Select your payment method
                        </legend>

                        <!-- Wrapper for labels -->
                        <div class="segmented-group">

                            <label for="payment-option-1"> <input
                                        id="payment-option-1"
                                        name="payment-options"
                                        class="input--radio js-payment-method"
                                        value="3"
                                        type="radio"
                                        data-parsley-error-message="Please select your preferred payment method."
                                        required
                                        aria-invalid="false">
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading">Donate by card</h2>
                                </div>
                            </label>

                            <label for="payment-option-2"> <input
                                        id="payment-option-2"
                                        name="payment-options"
                                        class="input--radio js-payment-method"
                                        value="15"
                                        type="radio"
                                        checked>
                                <div class="segmented-label">
                                    <h2 class="size--xxl heading visuallyhidden">Donate using Paypal</h2>
                                    <div class="margin--half">
                                        <div class="svg">
                                            <?php include_once ('assets/svg/paypal.svg'); ?>
                                        </div>
                                    </div>
                                </div>
                            </label>

                        </div>
                        <!-- / Wrapper for labels -->

                    </fieldset>
                    <!-- / Segmented group -->





                    <div class="fieldset-wrapper bg bg--subtle payment-fields js-payment-fields">
                        <fieldset>

                            <legend class="heading size--xl">
                                <svg class="icon lock-icon color--primary">
                                    <use xlink:href="#lock"/>
                                </svg>
                                <span>Payment details</span></legend>


                            <p><em>We accept VISA, MasterCard, American
                                    Express.</em></p>

                            <!-- Set the field to 'tel' to allow for numberpad on touch devices, making it easier to complete the fields -->
                            <div class="group">
                                <div class="group__item flex-3 field-group">
                                    <label for="cardnumber"
                                           class="field-label"> Card
                                        number </label> <input type="tel"
                                                               class="field-input field-input--cardnumber"
                                                               name="cardnumber"
                                                               id="cardnumber"
                                                               placeholder="E.g. 1234 5678 9012 3456"
                                                               autocomplete="cc-number"
                                                               maxlength="23"
                                                               data-parsley-luhn="true"
                                                               data-parsley-error-message="Please complete this field with the card number on the front of your card."
                                                               required
                                                               aria-invalid="false">
                                </div>
                                <div class="group__item group__item--dont-grow">
                                    <svg class="icon credit-card js-credit-card"
                                         viewBox="0 0 78 48"
                                         width="78"
                                         height="48"
                                         data-focussed="none"
                                         aria-hidden="true">
                                        <g id="credit-card" class="credit-cards">
                                            <title>Credit card</title>
                                            <desc>human-readable description of
                                                the message we trying to
                                                accomplish
                                            </desc>
                                            <path class="credit-card__outer"
                                                  d="M78,42c0,3.3-2.7,6-6,6H6c-3.3,0-6-2.7-6-6V6c0-3.3,2.7-6,6-6h66c3.3,0,6,2.7,6,6V42z"/>
                                            <path class="credit-card__inner"
                                                  d="M74,40c0,2.2-1.8,4-4,4H8c-2.2,0-4-1.8-4-4V8c0-2.2,1.8-4,4-4h62c2.2,0,4,1.8,4,4V40z"/>
                                            <rect class="credit-card__magnetic-strip" x="4" y="10" width="70"
                                                  height="10"/>
                                            <rect class="credit-card__number"
                                                  x="10" y="26" width="36"
                                                  height="4"/>
                                            <rect class="credit-card__name"
                                                  x="10" y="34" width="24"
                                                  height="4"/>
                                            <rect class="credit-card__cvc"
                                                  x="58" y="26" width="12"
                                                  height="4"/>
                                            <rect class="credit-card__date" x="46" y="34" width="12" height="4" />
                                        </g>
                                    </svg>
                                </div>
                            </div>


                            <div class="group">
                                <div class="group__item flex-2 field-group">
                                    <label for="ccname"
                                           class="field-label">Cardholder name
                                        (as printed on your card)</label> <input
                                            type="text"
                                            class="field-input field-input--ccname"
                                            name="ccname"
                                            id="ccname"
                                            placeholder="E.g. J O SMITH"
                                            autocomplete="cc-name"
                                            data-parsley-error-message="Please complete this field with the cardholder name as it appears on the front of your card."
                                            required
                                            aria-invalid="false">
                                </div>
                                <div class="group__item field-group">
                                    <label for="cc-exp"
                                           class="field-label"> Expiry
                                        (MM / YY) </label> <input type="tel"
                                                                class="field-input field-input--date"
                                                                name="cc-exp"
                                                                id="cc-exp"
                                                                placeholder="E.g. 10/19"
                                                                autocomplete="cc-exp"
                                                                data-parsley-error-message="Please complete this field with the expiration month and year on the front of your card."
                                                                required
                                                                aria-invalid="false">
                                </div>
                                <!-- The security code (CVC) field should never be stored so turn off autocomplete -->
                                <div class="group__item field-group">
                                    <label for="cvc"
                                           class="field-label">Security
                                        code</label> <input type="tel"
                                                            class="field-input field-input--date"
                                                            name="cvc"
                                                            id="cvc"
                                                            pattern="[0-9]{3,4}"
                                                            maxlength="4"
                                                            autocomplete="off"
                                                            data-parsley-error-message="Please complete this field with the security code as it appears on of your card."
                                                            required
                                                            aria-invalid="false">
                                </div>
                            </div>

                            <div class="group">
                                <div class="group__item">
	                                <?php include_once ('assets/svg/stripe.svg'); ?>
                                </div>
                            </div>

                            <hr>

                            <div class="field-group no-max-width">
                                <button type="submit"
                                        class="button button--success size--xl">
                            <span>Donate <span>&pound;<span
                                            class="js-donation-amount">15</span></span> now and save another life
                            <svg class="icon">
                                <use xlink:href="#arrow-right"/>
                            </svg>
                                </button>
                            </div>



                        </fieldset>
                    </div>



<!--                            <!-- Checkbox -->
<!--                            <fieldset class="field-group checkbox-group">-->
<!---->
<!--                                <legend class="group-legend heading size--xl">-->
<!--                                    Subscribe to our newsletter (optional)-->
<!--                                </legend>-->
<!---->
<!--                                <div class="field-description">-->
<!--                                    We will send you relevant materials, such as promotions, once a month. We will guard your email with-->
<!--                                    our lives and never give it out to a-->
<!--                                    third-party. You can unsubscribe at any time. <a-->
<!--                                            href="/privacy">Our Privacy-->
<!--                                        Policy</a>.-->
<!--                                </div>-->
<!---->
<!--                                <label for="subscribe"> <input-->
<!--                                            id="subscribe"-->
<!--                                            name="subscribe"-->
<!--                                            class="input--checkbox"-->
<!--                                            value="data-value"-->
<!--                                            type="checkbox"> <span-->
<!--                                            class="checkbox-label">-->
<!--                                Yes, I would like COMPANY to send me relevant materials-->
<!--                            </span> </label>-->
<!---->
<!--                            </fieldset>-->
<!--                            <!-- / Checkbox -->






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
                <h2 class="size--xl heading">Spread the word, save another
                    life</h2>
                <p>or</p>
                <h2 class="size--xl heading">Show the world your support for
                    us!</h2>

                <!-- Share this -->
                <div class="share">
                    <a href="#share-this"
                       class="share__share-button js-share__share-button"
                       aria-label="Open share panel"
                       aria-expanded="false"
                       aria-haspopup="true">
                        <svg class="icon share__share-icon" aria-hidden="true">
                            <use xlink:href="#icon-share"/>
                        </svg><span class="share__share-text">Share this</span>
                    </a>

                    <!-- change aria-hidden to `true` if js -->
                    <div class="share__panel js-share__panel"
                         id="share-this"
                         aria-hidden="true">

                        <p class="heading size--xl share__title" aria-hidden="true">Share this
                            with</p>

                        <ul class="share__channels">
                            <li class="share__channel share__channel--email">
                                <a class="share__channel-link"
                                   href="mailto:?subject={SUBJECT}&amp;body={URL}">
                                    <svg class="icon share__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#email"/>
                                    </svg><span class="share__channel-label" aria-hidden="true">Email</span>
                                    <span class="visuallyhidden">Share this with Email</span>
                                </a>
                            </li>
                            <li class="share__channel share__channel--facebook">
                                <a class="share__channel-link"
                                   href="https://www.facebook.com/sharer/sharer.php?u={URL}">
                                    <svg class="icon share__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#facebook"/>
                                    </svg><span class="share__channel-label" aria-hidden="true">Facebook</span>
                                    <span class="visuallyhidden">Share this with Facebook</span>
                                </a>
                            </li>
                            <li class="share__channel share__channel--twitter">
                                <a class="share__channel-link"
                                   href="https://twitter.com/intent/tweet?text={TEXT}&amp;url={URL}">
                                    <svg class="icon share__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#twitter"/>
                                    </svg><span class="share__channel-label" aria-hidden="true">Twitter</span>
                                    <span class="visuallyhidden">Share this with Twitter</span>
                                </a>
                            </li>
                            <li class="share__channel share__channel--pinterest">
                                <a class="share__channel-link"
                                   href="https://uk.pinterest.com/pin/create/bookmarklet/?url={URL}&amp;description={DESCRIPTION}&amp;title={TITLE}&amp;media={IMAGE}">
                                    <svg class="icon share__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#pinterest"/>
                                    </svg><span class="share__channel-label" aria-hidden="true">Pinterest</span>
                                    <span class="visuallyhidden">Share this with Pinterest</span>
                                </a>
                            </li>
                            <li class="share__channel share__channel--whatsapp">
                                <a class="share__channel-link"
                                   href="whatsapp://send?text={TEXT - URL}%3Focid%3Dwsnews.chat-apps.in-app-msg.whatsapp.trial.link1_.auin">
                                    <svg class="icon share__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#whatsapp"/>
                                    </svg><span class="share__channel-label" aria-hidden="true">WhatsApp</span>
                                    <span class="visuallyhidden">Share this with WhatsApp</span>
                                </a>
                            </li>
                            <li class="share__channel share__channel--linkedin">
                                <a class="share__channel-link"
                                   href="https://www.linkedin.com/shareArticle?mini=true&url={URL}&title={TITLE}&summary={SUMMARY optional}&source={SOURCE optional}">
                                    <svg class="icon share__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#linkedin"/>
                                    </svg><span class="share__channel-label" aria-hidden="true">LinkedIn</span>
                                    <span class="visuallyhidden">Share this with LinkedIn</span>
                                </a>
                            </li>
                            <li class="share__channel share__channel--google-plus">
                                <a class="share__channel-link"
                                   href="https://plus.google.com/share?url={URL}">
                                    <svg class="icon share__share-icon"
                                         aria-hidden="true">
                                        <use xlink:href="#google-plus"/>
                                    </svg><span class="share__channel-label" aria-hidden="true">Google +</span>
                                    <span class="visuallyhidden">Share this with Google plus</span>
                                </a>
                            </li>
                        </ul>

                        <button class="share__close-button js-share__share-button">
                            <span class="visuallyhidden">Close share panel</span>
                            <span class="share__close-button-graphic"
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

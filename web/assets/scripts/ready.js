$(function () {


    // Traverse DOM and create variables
    var html = $('html'),
        viewport = $(window),
        distance = 0,
        searchToggler = $('.js-search-toggle'),
        globalSearch = $('.js-global-search');

    var scrollEventFired = false,
        scrollEventFrequency = 100;


    // Add js hook using vanilla Javascript in head tag instead.
    // Needed for basil to run on ready()
    html.addClass('js');


    var basil = $('.basil');
    // Run Basil on ready in case there's any elements already in 'view'
    basil.each(function (i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass('is-visible');
        }
    });


    var navigationToggler = $('.js-nav-toggle'),
        nav = $('.js-nav-wrapper');

    // Toggle class names on click event
    navigationToggler.click(function (e) {

        navigationToggler.toggleClass('is-toggled');
        nav.toggleClass('is-active');

        //Don't "return false" as it stops event propagation
        e.preventDefault();

    });


    // Set throttle to true when a scroll event fires
    viewport.scroll(function () {

        scrollEventFired = true;


        // Check if any elements should become visible, this should be
        // moved to exist within setInterval.scrollEventFired()
        basil.each(function (i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass('is-visible');
            }
        });


    });


    // Allow scroll event to run according to scrollEventFrequency
    setInterval(function () {
        if (scrollEventFired) {

            scrollEventFired = false;
            // console.log('Scroll fired');

            // Check distance from top
            if (viewport.scrollTop() > distance) {
                // nav.addClass('is-collapsed');
                // searchToggler.addClass('is-moved');
                // navigationToggler.addClass('is-active');
            }
            else {
                // nav.removeClass('is-collapsed');
                // searchToggler.removeClass('is-moved');
                // navigationToggler.removeClass('is-active');
            }

        }
    }, scrollEventFrequency);


    var skipToContent = $('.js-skip-to-content');
    // Bind a click event to the 'skip' link
    skipToContent.click(function (event) {

        // strip the leading hash and declare
        // the content we're skipping to
        var skipTo = '#' + this.href.split('#')[1];

        // Setting 'tabindex' to -1 takes an element out of normal
        // tab flow but allows it to be focused via javascript
        $(skipTo).attr('tabindex', -1).on('blur focusout', function () {

            // when focus leaves this element,
            // remove the tabindex attribute
            $(this).removeAttr('tabindex');

        }).focus(); // focus on the content container
    });




    /* Pikaday date picker
     -----------------------------------------------------------------------------------------
     */
    var $datepickers = $('.js-pikaday');
    $datepickers.each(function(index){

        var $datepicker = $(this);

        $datepicker
            .attr('type', 'text')
            .pikaday();
    });




    /* Parsley form validation
     -----------------------------------------------------------------------------------------
     */
    var $form = $('.js-validate-form');

    if($form.length > 0) {

        $form.find('fieldset').each(function (index) {
            var fieldset = this;
            var $fieldset = $(fieldset);
            if (fieldset.hasAttribute('required')) {
                $fieldset.find('input')
                    .prop('required', true)
                    .attr('data-parsley-multiple', 'field-group-' + index);
            }
        });

        $form.parsley({
            trigger: 'change keyup touchend blur',
            triggerAfterFailure: 'change keyup touchend select blur',
            errorClass: 'field-group--has-error',
            errorsWrapper: '<ul class="field-error" aria-live="assertive" role="status"></ul>',
            errorsContainer: function (ParsleyField) {
                var $field = $(ParsleyField.$element);
                var $formItem = $field.closest('.form-group');
                if ($formItem.length > 0) {
                    return $formItem;
                } else {
                    return $field.closest('.field-group');
                }
            },
            classHandler: function (ParsleyField) {
                return $(ParsleyField.$element).closest('.field-group');
            }
        }).on('field:error', function () {
            var $element = this.$element;
            $element.attr('aria-invalid', true);
            var $errorElement = $element.closest('.field-group').find('.field-error');
            var errorElementId = $errorElement.attr('id');
            $element.attr('aria-describedby', errorElementId);

        }).on('field:success', function () {
            var $element = this.$element;
            $element.attr('aria-invalid', false);
            $element.removeAttr('aria-describedby');
        });

    }; // End of if



    /* Oliver | Credit card enhancement
     -----------------------------------------------------------------------------------------
     */
    var $creditcard = $('.js-credit-card');
    var $paymentFields = $('.js-payment-fields input');

    $paymentFields.focus(function(){

        newClass = $(this).attr('name');
        $creditcard.attr('data-focussed', newClass);
    });

    /* Progressive collapsibles
     -----------------------------------------------------------------------------------------
     */

    var $collapsibleHeading = $('.js-collapsible-heading');

    $collapsibleHeading.each(function () {

        var $this = $(this);

        // create unique id for a11y relationship

        var id = 'collapsible-' + $this.index();

        // wrap the content and make it focusable

        $this.nextUntil('.js-collapsible-heading').wrapAll('<div class="js-collapsible-content collapsible-content" id="' + id + '" aria-hidden="true">');
        var panel = $this.next();

        // Add the button inside `.js-collapsible-heading` so both the heading and button semanics are read

        $this.wrapInner('<button aria-expanded="false" type="button" aria-controls="' + id + '">');
        $this.addClass('collapsible-heading');
        var button = $this.children('button');

        // Toggle the state properties

        button.on('click', function () {
            var state = $(this).attr('aria-expanded') === 'false' ? true : false;
            $(this).attr('aria-expanded', state);
            panel.attr('aria-hidden', !state);

            // Debug
            // console.log('State is now:' + state);
        });

    });

    /* Towncrier
     -----------------------------------------------------------------------------------------
     */
    var $towncrierShareButton = $('.js-towncrier__share-button');
    var $towncrierPanel = $('.js-towncrier__panel');

    $towncrierShareButton.click(function (event) {
        var state = $towncrierShareButton.attr('aria-expanded') === 'false' ? true : false;
        $towncrierShareButton.attr('aria-expanded', state);
        $towncrierPanel.attr('aria-hidden', !state);

        event.preventDefault();
        // Debug
        // console.log('State is now:' + state);
    });


    /* Tab Interface
     -----------------------------------------------------------------------------------------
     */

// The class for the container div

    var $container = '.js-tab-interface';

// The setup

    $($container + '> ul').attr('role', 'tablist');
    $($container + ' [role="tablist"] li').attr('role', 'presentation');
    $('[role="tablist"] a').attr({
        'role': 'tab',
        'tabindex': '-1'
    });

// Make each aria-controls correspond id of targeted section (re href)

    $('[role="tablist"] a').each(function () {
        $(this).attr(
            'aria-controls', $(this).attr('href').substring(1)
        );
    });

// Make the first tab selected by default and allow it focus

    $('[role="tablist"] li:first-child a').attr({
        'aria-selected': 'true',
        'tabindex': '0'
    });

// Make each section focusable and give it the tabpanel role

    $($container + ' section').attr({
        'role': 'tabpanel'
    });

// Make first child of each panel focusable programmatically

    $($container + ' section > *:first-child').attr({
        'tabindex': '0'
    });

// Make all but the first section hidden (ARIA state and display CSS)

    $('[role="tabpanel"]:not(:first-of-type)').attr({
        'aria-hidden': 'true'
    });


// Change focus between tabs with arrow keys

    $('[role="tab"]').on('keydown', function (e) {

        // define current, previous and next (possible) tabs

        var $original = $(this);
        var $prev = $(this).parents('li').prev().children('[role="tab"]');
        var $next = $(this).parents('li').next().children('[role="tab"]');
        var $target;

        // find the direction (prev or next)

        switch (e.keyCode) {
            case 37:
                $target = $prev;
                break;
            case 39:
                $target = $next;
                break;
            default:
                $target = false
                break;
        }

        if ($target.length) {
            $original.attr({
                'tabindex': '-1',
                'aria-selected': null
            });
            $target.attr({
                'tabindex': '0',
                'aria-selected': true
            }).focus();
        }

        // Hide panels

        $($container + ' [role="tabpanel"]')
            .attr('aria-hidden', 'true');

        // Show panel which corresponds to target

        $('#' + $(document.activeElement).attr('href').substring(1))
            .attr('aria-hidden', null);

    });

// Handle click on tab to show + focus tabpanel

    $('[role="tab"]').on('click', function (e) {

        e.preventDefault();

        // remove focusability [sic] and aria-selected

        $('[role="tab"]').attr({
            'tabindex': '-1',
            'aria-selected': null
        });

        // replace above on clicked tab

        $(this).attr({
            'aria-selected': true,
            'tabindex': '0'
        });

        // Hide panels

        $($container + ' [role="tabpanel"]').attr('aria-hidden', 'true');

        // show corresponding panel

        $('#' + $(this).attr('href').substring(1))
            .attr('aria-hidden', null);

    });


}); // End of Jquery document ready function()

(function () {

    var updateARIAroles = function (contentToggler) {
        if (exists(contentToggler)) {

            // This allows us to iterate on multiple elements [1]
            var index = 0;
            for (index = 0; index < contentToggler.length; index++) {

                // Find the element's toggle target by looking for data-toggle
                // Note: we're using `getAttribute` instead of `dataset.` due to better browser support for the former
                var target = contentToggler[index].getAttribute('data-toggler');
                var contentTarget = [];
                contentTarget[index] = $('[data-toggle="' + target + '"]');

                if (mq.matches && target == "nav") {

                    // Set default aria attributes
                    // Hide all elements
                    contentToggler[index].setAttribute('aria-expanded', true);
                    contentTarget[index].setAttribute('aria-hidden', false);
                    // contentTarget[index].setAttribute('hidden', true);

                }
                else {

                    // Set default aria attributes
                    // Hide all elements
                    contentToggler[index].setAttribute('aria-expanded', false);
                    contentTarget[index].setAttribute('aria-hidden', true);

                }
            }
        } // end of exists
    };

    myApp.extend('updateARIAroles', updateARIAroles);

})();
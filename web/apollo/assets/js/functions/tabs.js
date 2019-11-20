(function () {
    var tabs = function () {
        // The class for the container div

        var container = '.js-tab-interface';

        // The setup
        findElement(container + '> ul').setAttribute('role', 'tablist');
        findElement(container + ' [role="tablist"] li').setAttribute('role', 'presentation');
        document.querySelectorAll('[role="tablist"] a').forEach(function (obj) {
            obj.setAttribute('role', 'tab');
            obj.setAttribute('tabindex', '-1');
            // Make each aria-controls correspond id of targeted section (re href)
            obj.setAttribute('aria-controls', obj.getAttribute('href').substring(1));
        });

        // Make the first tab selected by default and allow it focus
        findElement('[role="tablist"] li a').setAttribute('aria-selected', 'true');
        findElement('[role="tablist"] li a').setAttribute('tabindex', '0');

        // Give each section tabpanel role
        document.querySelectorAll(container + ' section').forEach( function (obj) {
            obj.setAttribute('role', 'tabpanel')
        });

        // Make first child of each panel focusable programmatically
        findElement(container + ' section > *:first-child').setAttribute('tabindex', '0');

        // Make all but the first section hidden (ARIA state and display CSS)
        document.querySelectorAll('[role="tabpanel"]:not(:first-of-type)').forEach(function (obj) {
            obj.setAttribute('aria-hidden', 'true');
        });

        // Change focus between tabs with arrow keys
        document.querySelectorAll('[role="tab"]').forEach( function (obj) {
            obj.onkeydown = function (e) {

                // define current, previous and next (possible) tabs
                var original = this;
                var prev;
                var next;
                var target;

                if(this.parentElement.previousElementSibling !== null){
                    prev = this.parentElement.previousElementSibling.children[0];
                }  else {
                    prev = false;
                }

                if(this.parentElement.nextElementSibling !== null) {
                    next = this.parentElement.nextElementSibling.children[0]
                } else {
                    next = false;
                }

                // find the direction (prev or next)
                switch (e.key) {
                    case 'ArrowLeft':
                        target = prev;
                        break;

                    case 'ArrowRight':
                        target = next;
                        break;

                    default:
                        target = false;
                        break;
                }

                if (target !== false) {
                    original.setAttribute('tabindex', '-1');
                    original.setAttribute('aria-selected', null);

                    target.setAttribute('tabindex', '0');
                    target.setAttribute('aria-selected', true);
                    target.focus();
                }

                // Hide panels
                document.querySelectorAll(container + ' [role="tabpanel"]').forEach( function (obj) {
                    obj.setAttribute('aria-hidden', 'true');
                });

                // Show panel which corresponds to target
                findElement('#' + document.activeElement.getAttribute('aria-controls'))
                    .setAttribute('aria-hidden', null);
            };
        });

        // Handle click on tab to show + focus tabpanel
        document.querySelectorAll('[role="tab"]').forEach(function (obj) {
            obj.onclick = function (e) {
                e.preventDefault();

                // remove focusability [sic] and aria-selected

                document.querySelectorAll('[role="tab"]').forEach( function (obj) {
                    obj.setAttribute('tabindex', '-1');
                    obj.setAttribute('aria-selected', null);

                });

                // replace above on clicked tab
                this.setAttribute('aria-selected', true);
                this.setAttribute('tabindex', '0');

                // Hide panels
                document.querySelectorAll(container + ' [role="tabpanel"]').forEach( function (obj) {
                    obj.setAttribute('aria-hidden', 'true');
                });

                // show corresponding panel
                findElement('#' + this.getAttribute('aria-controls'))
                    .setAttribute('aria-hidden', null);
            };
        });
    };

    myApp.extend('tabs', tabs);
})();
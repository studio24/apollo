(function () {
    var tabs = function () {
        // The class for the container div

        var container = '.js-tab-interface';

        // The setup

        findElement(container + '> ul').setAttribute('role', 'tablist');
        findElement(container + ' [role="tablist"] li').setAttribute('role', 'presentation');
        document.querySelectorAll('[role="tablist"] a').forEach(obj => {
            obj.setAttribute('role', 'tab');
        });
        findElement('[role="tablist"] a').setAttribute('tabindex', '-1');

        // Make each aria-controls correspond id of targeted section (re href)

        document.querySelectorAll('[role="tablist"] a').forEach( (obj) => {
            obj.setAttribute('aria-controls', obj.getAttribute('href').substring(1));
        });

        // Make the first tab selected by default and allow it focus

        findElement('[role="tablist"] li:first-child a').setAttribute('aria-selected', 'true');
        findElement('[role="tablist"] li:first-child a').setAttribute('tabindex', '0');

        // Make each section focusable and give it the tabpanel role

        document.querySelectorAll(container + ' section').forEach( obj => {
            obj.setAttribute('role', 'tabpanel')
        });

        // Make first child of each panel focusable programmatically

        findElement(container + ' section > *:first-child').setAttribute('tabindex', '0');

        // Make all but the first section hidden (ARIA state and display CSS)

        document.querySelectorAll('[role="tabpanel"]:not(:first-of-type)').forEach(obj => {
            obj.setAttribute('aria-hidden', 'true');
        });

        // Change focus between tabs with arrow keys

        findElement('[role="tab"]').onkeydown = function (e) {

            // define current, previous and next (possible) tabs

            console.log(this.parent);

            var original = this;
            var prev = this.parents('li').prev().children('[role="tab"]');
            var next = this.parents('li').next().children('[role="tab"]');
            var target;

            // find the direction (prev or next)

            switch (e.key) {
                case 37:
                    target = prev;
                    break;

                case 39:
                    target = next;
                    break;

                default:
                    target = false;
                    break;
            }

            if (target.length) {
                original.setAttribute('tabindex', '-1');
                original.setAttribute('aria-selected', null);

                target.attr({
                    'tabindex': '0',
                    'aria-selected': true
                }).focus();
            }

            // Hide panels

            findElement(container + ' [role="tabpanel"]')
                .setAttribute('aria-hidden', 'true');

            // Show panel which corresponds to target

            findElement('#' + findElement(document.activeElement).attr('href').substring(1))
                .setAttribute('aria-hidden', null);

        };

        // Handle click on tab to show + focus tabpanel

        document.querySelectorAll('[role="tab"]').forEach(obj => {
            obj.onclick = function (e) {
                e.preventDefault();

                // remove focusability [sic] and aria-selected

                document.querySelectorAll('[role="tab"]').forEach( obj => {
                    obj.setAttribute('tabindex', '-1');
                });
                document.querySelectorAll('[role="tab"]').forEach( obj => {
                    obj.setAttribute('aria-selected', null);
                });

                // replace above on clicked tab

                this.setAttribute('aria-selected', true);
                this.setAttribute('tabindex', '0');

                // Hide panels
                document.querySelectorAll(container + ' [role="tabpanel"]').forEach( obj => {
                    obj.setAttribute('aria-hidden', 'true');
                });

                // show corresponding panel

                findElement('#' + this.getAttribute('href').substring(1))
                    .setAttribute('aria-hidden', null);
            };
        });
    }

    myApp.extend('tabs', tabs);
})();
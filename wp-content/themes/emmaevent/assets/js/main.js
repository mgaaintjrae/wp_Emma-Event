// Form
jQuery(document).ready(function () {
    'use strict';
    jQuery('input[type="text"]').focus(function () {
        if (this.value == this.defaultValue) {
            this.value = '';
        }
        if (this.value != this.defaultValue) {
            this.select();
        }
    });
    jQuery('input[type="text"]').blur(function () {
        if (this.value == '') {
            this.value = this.defaultValue;
        }
    });
});


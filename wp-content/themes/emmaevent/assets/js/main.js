// Form
jQuery(document).ready(function () {
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


//Cookies

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#efefef",
      "text": "#023d2b"
    },
    "button": {
      "background": "#d6a859",
      "text": "#ffffff"
    }
  },
  "theme": "classic",
  "position": "top",
  "static": true,
  "content": {
    "message": "Ce site web utilise des cookies pour vous garantir la meilleure expérience possible. ",
    "dismiss": "J'ai compris",
    "link": "En savoir plus",
    "href": "https://emma-event.fr/mentions-legales/"
  }
});

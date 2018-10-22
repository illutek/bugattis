/**
 * Created by Stefan on 6/03/2015.
 */
(function ($) {
    $(document).ready(function () {
        var base = window.Drupal.settings.basePath + 'sites/default/files/background_images/';
        $.backstretch([
            base + "background_25-min.jpg",
            base + "background_26-min.jpg",
            base + "background_27-min.jpg",
            base + "background_28-min.jpg"
        ], {
            fade: 1050,
            duration: 7000
        });
    });
}(jQuery));

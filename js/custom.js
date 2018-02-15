/**
 * Created by Stefan on 6/03/2015.
 */
(function ($) {
    $(document).ready(function () {
        var base = window.Drupal.settings.basePath + 'sites/default/files/background_images/';
        $.backstretch([
            base + "background_20-min.jpg",
            base + "background_21-min.jpg",
            base + "background_22-min.jpg",
            base + "background_23-min.jpg",
            base + "background_24-min.jpg"
        ], {
            fade: 1050,
            duration: 7000
        });
    });
}(jQuery));

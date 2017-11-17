/**
 * Created by Stefan on 6/03/2015.
 */
(function ($) {
    $(document).ready(function () {
        var base = window.Drupal.settings.basePath + 'sites/default/files/background_images/';
        $.backstretch([
            base + "background_15-min.jpg",
            base + "background_16-min.jpg",
            base + "background_17-min.jpg",
            base + "background_18-min.jpg"
        ], {
            fade: 1050,
            duration: 7000
        });
    });
}(jQuery));

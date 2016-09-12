/**
 * Created by Stefan on 6/03/2015.
 */
(function ($) {
    $(document).ready(function () {
        var base = window.Drupal.settings.basePath + 'sites/default/files/background_images/';
        $.backstretch([
            base + "background_1-min.jpg",
            base + "background_2-min.jpg",
            base + "background_3-min.jpg"
        ], {
            fade: 1050,
            duration: 7000
        });
    });
}(jQuery));

/**
 * Created by Stefan on 6/03/2015.
 */
(function ($) {
    $(document).ready(function () {
        var base = window.Drupal.settings.basePath + 'sites/default/files/background_images/';
        $.backstretch([
            base + "background_5-min.jpg",
            base + "background_6-min.jpg",
            base + "background_7-min.jpg",
            base + "background_8-min.jpg",
            base + "background_9-min.jpg",
            base + "background_10-min.jpg"
        ], {
            fade: 1050,
            duration: 7000
        });
    });
}(jQuery));

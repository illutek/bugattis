/**
 * Created by Stefan on 6/03/2015.
 */
(function ($) {
    $(document).ready(function () {
        var base = window.Drupal.settings.basePath + 'sites/default/files/background_images/';
        $.backstretch([
            base + "background_43-min.jpg",
            base + "background_44-min.jpg",
            base + "background_45-min.jpg",
            base + "background_46-min.jpg"
        ], {
            fade: 1050,
            duration: 7000
        });
    });
}(jQuery));

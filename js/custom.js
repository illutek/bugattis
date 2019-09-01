/**
 * Created by Stefan on 6/03/2015.
 */
(function ($) {
    $(document).ready(function () {
        var base = window.Drupal.settings.basePath + 'sites/default/files/background_images/';
        $.backstretch([
            base + "background_34-min.jpg",
            base + "background_35-min.jpg",
            base + "background_36-min.jpg",
            base + "background_37-min.jpg",
            base + "background_38-min.jpg"
        ], {
            fade: 1050,
            duration: 7000
        });
    });
}(jQuery));

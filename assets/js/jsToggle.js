jQuery(document).ready(function() {
    jQuery('.hamburgerBtn').click(function(e) {
        jQuery('.main-navigation').slideToggle(500);

        e.preventDefault();
    });

});

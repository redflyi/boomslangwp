(function($) {
$('#toggle').toggle(
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost/newboomslang/wp-content/themes/custom/assets/images/Hamburger.png" alt="close" />');
        });
    },
    function() {
        $('#popout').animate({ left: -250 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost/newboomslang/wp-content/themes/custom/assets/images/Hamburger.png" alt="close" />');
        });
    }
);
})(jQuery);

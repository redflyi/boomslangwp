/* Open when someone clicks on the span element */
jQuery(document).ready(function() {
  jQuery('.hamburgerBtn').click(function(e) {
      jQuery('.main-navigation').style.width = "100%";
}        e.preventDefault();
    });

});
/* Close when someone clicks on the "x" symbol inside the overlay */
//function closeNav() {
//  document.getElementById(".main-navigation").style.width = "0%";
//}

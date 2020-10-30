jQuery(document).ready(function() {
  jQuery(".hamburgerBtn").click(function(){
  jQuery(".main-navigation").css("display", "block")
    jQuery(".hamburgerBtn").css("display", "none")
    jQuery(".closebtn").css("display", "inline-block");
});
}
);

jQuery(document).ready(function() {
  jQuery(".closebtn").click(function(){
  jQuery(".main-navigation").css("display", "none")
  jQuery(".closebtn").css("display", "none")
  jQuery(".hamburgerBtn").css("display", "inline-block");
});
}
);

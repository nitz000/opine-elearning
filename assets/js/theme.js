$(window).on("load", function() {
  $("#preloader")
    .delay(1000)
    .fadeOut("slow")
    .$(".page-content")
    .fadeIn();
});
$(document).ready(function() {
  $(".validate-form").validate();

  $(".forgot-submit").click(function() {
    $(".forgot-message").show();
  });
});

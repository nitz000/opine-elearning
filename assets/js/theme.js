$(window).on("load", function() {
  $("#preloader")
    .delay(200)
    .fadeOut("slow")
    .$(".page-content")
    .fadeIn();
});
$(document).ready(function() {
  $(".chosen-select").chosen();
  $.validator.setDefaults({ ignore: ":hidden:not(select)" });
  $(".validate-form").validate({
    errorPlacement: function(error, element) {
      console.log("placement");
      if (element.is("select.chosen-select")) {
        console.log("placement for chosen");
        // placement for chosen
        element.next("div.chosen-container").append(error);
      } else {
        // standard placement
        error.insertAfter(element);
      }
    }
  });
  $(".forgot-submit").click(function() {
    $(".forgot-message").show();
  });
  $(".datatable").DataTable();
  $(".deleteuser").click(function(e) {
    e.preventDefault();
    var lHref = $("form#form1").attr("action");
    bootbox.confirm("Are you sure you want to delete?", function(confirmed) {
      if (confirmed) {
        window.location.href = lHref;
      }
    });
  });
  $(".deletecourse").click(function(e) {
    e.preventDefault();
    var lHref = $("form#form1").attr("action");
    bootbox.confirm("Are you sure you want to delete?", function(confirmed) {
      if (confirmed) {
        window.location.href = lHref;
      }
    });
  });
  $(".deletesubject").click(function(e) {
    e.preventDefault();
    var lHref = $("form#form1").attr("action");
    bootbox.confirm("Are you sure you want to delete?", function(confirmed) {
      if (confirmed) {
        window.location.href = lHref;
      }
    });
  });
  $(".addstudentlink").click(function(e) {
    bootbox.alert("Added succesfully", function() {});
  });
});

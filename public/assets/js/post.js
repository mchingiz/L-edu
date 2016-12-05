$(document).ready(function(){
  var checkBox = $("#deadlineBox input");
  var input = $("#deadlineDiv input");

  $(checkBox).change(function(){
    $(input).prop("disabled",!$(checkBox).is(":checked"));
  })
});

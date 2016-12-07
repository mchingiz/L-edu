$(document).ready(function(){
  var checkBox = $(".form-group #hasDeadline");
  var input = $(".form-group #deadline");

  $(checkBox).change(function(){
    $(input).prop("disabled",!$(checkBox).is(":checked"));
  })
});

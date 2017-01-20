$(document).ready(function(){
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

///////////////////////Follow////////////////////////////////
$('#login').on('click',function(e){
e.preventDefault();

var formData = {
  email: $('#email').val(),
  password: $('#password').val(),
}
  $.ajax({
    type: "POST",
    url: "/login",
    data: formData,
    success: function (data) {
      console.log("Success"+data)
      var errors = data.responseJSON;
      console.log(errors)
      //location.reload();
    },
    error: function (data) {
      console.log('Error:', data);
    }
  });
});

})

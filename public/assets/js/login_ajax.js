$(document).ready(function(){
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

///////////////////////Login////////////////////////////////
$('#login').on('click',function(e){
e.preventDefault();

var formData = {
  email: $('#email').val(),
  password: $('#password').val(),
}

$.ajax({
      url: '/user/login',
      type: 'POST',
      // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
          data: formData,
          dataType:'json',
          success: function(data){
              location.reload();
          },
          error: function(data){
            var errors = data.responseJSON;
    
            $("#login-overlay .text-danger").text(data.responseJSON.message)
            $("#login-overlay .form-group").addClass("has-error")
          }
    })

});

})

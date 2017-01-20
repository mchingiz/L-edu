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
    dataType:'json',
    success: function (response) {
      console.log(response)
       if(response.success) {
         location.reload();
       }
    },
    error: function (jqXHR) {
      var response = $.parseJSON(jqXHR.responseText);
      if(response.message) {
        alert(response.message);
      }
    }
});
    
});

})

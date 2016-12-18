$(document).ready(function(){
var url="/post"
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
///////////////////////Save Post////////////////////////////////
$('#save-post').click(function(){

    if($(this).text()=="Save Post"){
    console.log("save ")
    var post_id = $(this).val();
    $.ajax({
        type: "GET",
        url: url + '/save/' + post_id,
        success: function (data) {
          $("#save-post").html('Unsave').attr('value', data);
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    }

    if($(this).text()=="Unsave"){
    console.log("unsave ")
    var saved_post_id = $(this).val();
    $.ajax({
        type: "DELETE",
        url: url + '/unsave/' + saved_post_id,
        success: function (data) {
          console.log(data);
          $("#save-post").html('Save Post').attr('value',data);
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    }
});

////////////Add a reminder///////////////////////////////////
$('#reminder-form button').click(function(){
    var post_id = $(this).val();

    var formData = {
           datetime: $("#reminder-form input").val()
    }
    $.ajax({
        type: "POST",
        url: url + '/addreminder/' + post_id,
        data: formData,
        success: function (data) {
          console.log(data);
          $("#reminder-form").html('<p><i class="material-icons">done</i>Reminder added. We will send mail to you about it</p>')
        },
        error: function (data) {
            $("#reminder-form ").append("<p class='text-danger col-md-8 col-md-offset-2 text-left'>The datetime must be after today</p>")
            console.log('Error:', data);
        }
    });
});


})

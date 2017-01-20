$(document).ready(function(){
var url="/post"
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
///////////////////////Save Post////////////////////////////////
$('.buttons').on('click',"#save-post" ,function(){

    if($(this).text()=="Save Post"){
    console.log("save ")
    var post_id = $(this).val();
    $.ajax({
        type: "GET",
        url: url + '/save/' + post_id,
        success: function (data) {
          $(".buttons").load(location.href + " .buttons>*","");
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
          //$("#save-post").html('Save Post').attr('value',data);
          $(".buttons").load(location.href + " .buttons>*","");
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    }
});

////////////Add a reminder///////////////////////////////////
$('#reminder-form').on('click',"button",function(){
    var post_id = $(this).val();
    console.log("add reminder")
    var formData = {
           datetime: $("#reminder-form input").val()
    }
    $.ajax({
        type: "POST",
        url: url + '/addreminder/' + post_id,
        data: formData,
        success: function (data) {
          console.log(data);
          $("#success").show();
          $("#reminder-form").hide()
          $(".buttons").load(location.href + " .buttons>*","");
        },
        error: function (data) {
            $("#reminder-form ").append("<p class='text-danger col-md-8 col-md-offset-2 text-left'>The datetime must be after today</p>")
            console.log('Error:', data);
        }
    });
});

////////Delete a reminder/////////////
$('.buttons').on('click',"#delete-reminder",function(){
    var reminder_id = $(this).val();

    $.ajax({
        type: "POST",
        url: url + '/deletereminder/' + reminder_id,
        success: function (data) {
          console.log(data);
          $(".buttons").load(location.href + " .buttons");
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
});

})

$(document).ready(function(){
var url="/post"
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

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



})

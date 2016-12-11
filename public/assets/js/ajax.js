$(document).ready(function(){
var url="/post"
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('#save-post').click(function(){
    var post_id = $(this).val();
    console.log(post_id);

    $.ajax({
        type: "GET",
        url: url + '/save/' + post_id,
        success: function () {
            console.log("data");
            $("body").css("background-color","green")
            //$("#task" + task_id).remove();
        },
        error: function (data) {
          $("body").css("background-color","red")
            console.log('Error:', data);
        }
    });
});

})

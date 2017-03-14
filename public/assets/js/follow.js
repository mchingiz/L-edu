$(document).ready(function(){
var url="/company"
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

///////////////////////Follow////////////////////////////////
$('.follow-buttons').on('click',"#follow" ,function(){
    var company_id = $(this).val();
    $.ajax({
        type: "POST",
        url: url + '/follow/' + company_id,
        success: function (data) {
          console.log("Success"+data)
          $(".buttons").load(location.href + " .buttons>*","");
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    
});

$('.follow-buttons').on('click',"#unfollow" ,function(){
    var company_id = $(this).val();
    console.log($(this))
    console.log(" company " +company_id)
    $.ajax({
        type: "DELETE",
        url: url + '/unfollow/' + company_id,
        success: function (data) {
          console.log("Success"+data)
          $(".buttons").load(location.href + " .buttons>*","");

        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    
});
})

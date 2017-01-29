
$(document).ready(function(){


window.onpageshow = function(event) {
if (event.persisted) {
window.location.reload();
}
};

var url="/company"
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

///////////////////////Follow////////////////////////////////
$('.buttons').on('click',"#follow" ,function(){
    var company_id = $(this).val();
    $.ajax({
        type: "POST",
        url: url + '/follow/' + company_id,
        success: function (data) {
          $(".buttons").empty()
          .append('<button id="unfollow" value="'+data+'" class="button-custom button-unfollow" >Unfollow</button>');
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    
});

$('.buttons').on('click',"#unfollow" ,function(){
    var company_id = $(this).val();
    console.log($(this))
    console.log(" company " +company_id)
    $.ajax({
        type: "DELETE",
        url: url + '/unfollow/' + company_id,
        success: function (data) {
          console.log("Success"+data)
          $(".buttons").empty()
          .append('<button id="follow" value="'+data+'" class="button-custom button-follow" ><i class="fa fa-user-plus"></i>Follow</button>')

        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    
});
})

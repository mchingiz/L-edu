
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
        context: this,
        success: function (data) {
          $(this).parent(".buttons").empty()
          .append('<button id="unfollow" value="'+data+'" class="btn button-custom button-unfollow" >Unfollow</button>');
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    
});

$('.buttons').on('click',"#unfollow" ,function(){
    var company_id = $(this).val();
    $.ajax({
        type: "DELETE",
        url: url + '/unfollow/' + company_id,
        context: this,
        success: function (data) {
           $(this).parent(".buttons").empty()
          .append('<button id="follow" value="'+data+'" class="btn button-custom button-follow" ></i>Follow</button>')

        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
    
});
})

////Overlay screen /Open close reminder form///////////////////
$(document).ready(function(){
  $("#overlay").on('click',function(){

    console.log( event.target.id)
    if(event.target.id!="add-reminder"){
      $("#reminder-form").hide();
      $("#success").hide();
      $(".main-wrapper").css("opacity","1")
      $("#overlay").css("display","none");
    }
  })

  $(".buttons").on('click',"#add-reminder", function(){

    if($("#reminder-form").css("display")=="none"){
      $("#reminder-form").show();
      $(".main-wrapper").css("opacity","0.4")
      $("#overlay").css("display","block");
    }
  })
})

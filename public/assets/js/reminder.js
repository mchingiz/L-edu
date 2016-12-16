////Overlay screen /Open close reminder form///////////////////
$(document).ready(function(){
  $(".main-wrapper").click(function(e){
    console.log( event.target.id)
    if(event.target.id!="add-reminder"){
      $("#reminder-form").hide();
      $(".main-wrapper").css("opacity","1")
      $("#overlay").css("display","none");
    }
  })

  $("#add-reminder").click(function(){
    if($("#reminder-form").css("display")=="none"){
      $("#reminder-form").show();
      $(".main-wrapper").css("opacity","0.4")
      $("#overlay").css("display","block");
    }
  })
})

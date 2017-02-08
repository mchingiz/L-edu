////Overlay screen /Open close reminder form///////////////////
$(document).ready(function(){
   $(".main-wrapper").on('click',function(){

    if(!$(event.target).hasClass("login")){
      $("#login-overlay").hide();
      $(".main-wrapper").css("opacity","1")
      $("#overlay").css("display","none");
    }
  })

  $(".login").on('click', function(){
    if($("#login-overlay").css("display")=="none"){
      $("#login-overlay").show();
      $(".main-wrapper").css("opacity","0.4")
      $("#overlay").css("display","block");
    }
  })

  
})

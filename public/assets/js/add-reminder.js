// ACTIONS slider
$(".post-item .post-item-image").mouseenter(function(){
  var height = $(this).find("img").height();
  $(this).find("img, .post-item-actions").stop(true,false).animate({
    top: "-"+height+"px",
  },300);
})

$(".post-item .post-item-image").mouseleave(function(){
  $(this).find("img, .post-item-actions").stop(true,false).animate({
    top: "0px",
  },200);
})
//End of ACTIONS slider

// ACTIONS pop up
var open = false;

$("body").click(function(e){
  if(open){
    $("#popUp").css("display","none");
    console.log("closed");
    open=false;
  }
})

$(".add-reminder").click(function(e){
  if(open==false){
    $("#popUp").css("display","initial");
    console.log("opened");
    open=true;
    e.stopPropagation();
  }

})

// End of ACTIONS pop up

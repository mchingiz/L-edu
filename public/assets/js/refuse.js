$(document).ready(function(){
  var hidden = true;

  $("button[name='refuse']").on('click',function(){

    if(hidden){
      $(".refuse").stop( true, true ).slideDown();
      hidden=false;
    }else{
      $(".refuse").stop( true, true ).slideUp();
      hidden=true;
    }

  })

});

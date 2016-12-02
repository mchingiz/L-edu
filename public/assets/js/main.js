$(document).ready(function(){

// Search Input Field( Full nav)
  //Increase width of search input field while focusing
  OpenSearchInput();
  //Make width of search input field default when body is clicked
  CloseSearchInput();

//According to window width , collapse or full width menu is activated
  ActivateCollapseNavbar();

//Pull/Push collapse menu when button is clicked
  ToggleCollapseNavbar();

//Measure width
  IsWidthChanged();

});

$(window).resize(function(){
  ActivateCollapseNavbar();
  CloseCollapseNavbarWithoutEffect();
})


function OpenSearchInput(){
  $("#full-nav-search #input-search").focus(function(){
      $(".navbar #full-nav-search").stop().animate({
      width:"220px"},650);
      $("#full-nav-search #input-search").stop().animate({
      width:"200px"},650);
    });
}

function CloseSearchInput(){
  $("body").click(function(event){
      if(event.target.id!="input-search"){
      $(".navbar #full-nav-search").stop().animate({
      width:"80px"},650);
      $("#full-nav-search #input-search").stop().animate({
      width:"67px"},650);
      }
  })
}

var j=true;
function ActivateCollapseNavbar(){
  if( $("#top-collapse").css("display")!="none" ){
    $("#navbar").prop("id","navbar-collapse")
    PreventHref();
    if(j){
      ToggleDropdownMenu();
    }
    j=false;
  }
  else{
    $("#navbar-collapse").prop("id","navbar")
    $("#navbar").css("left","0px")
    ActivateHref();
  }
}

function ToggleCollapseNavbar(){
  $("#collapse-button").click(function(){
    if($("body").css("left")=="0px"){
    	OpenCollapseNavbar();
    }
    else{
      CloseCollapseNavbar();
    }
  })
}
function OpenCollapseNavbar(){
  $("body").animate({ left:"200px"},500);
  $("#top-collapse").animate({ left:"200px"},500);
  $("#navbar-collapse").animate({ left:"0px"},500);
}

function CloseCollapseNavbar(){
  $("body").animate({ left:"0"},500);
  $("#top-collapse").animate({ left:"0"},500);
  $("#navbar-collapse").animate({ left:"-200px"},500);
}


function ToggleDropdownMenu(){

  console.log("Toggle")
  $("#navbar-collapse .navbar-nav li a").click(function(){

    console.log("Click")
    //check if dropdown menu is open or closed
    var check= $(this).parent().find(".dropdown-menu").css("display")!="block"
    console.log(check)
    $("#navbar-collapse .navbar-nav li .dropdown-menu").removeClass("dropdown-menu-open").addClass("dropdown-menu-close")
    if(check)
      $(this).parent().find(".dropdown-menu").removeClass("dropdown-menu-close").addClass("dropdown-menu-open");
  })

}

function CloseCollapseNavbarWithoutEffect(){
  if(IsWidthChanged()){
    //if the width is changed push(close) close menu
    $("body").css("left","0");
    $("#navbar .navbar-nav li .dropdown-menu").removeClass("dropdown-menu-open")
    $("#top-collapse").css("left","0")
    $("#navbar-collapse").css("left","-200px")
  }
}

var lastWindowWidth;
function IsWidthChanged(){

  var result=false,
      $window = $(this),
      windowWidth = $window.width();
      if(lastWindowWidth!=windowWidth){
        result=true;
      }
      lastWindowWidth = windowWidth;
    return result;
}

function PreventHref(){
  for(var i=1;i<=10;i++){
    if( $("#navbar-collapse .navbar-nav li:nth-child("+i+")").find(".dropdown-menu").length){
      $("#navbar-collapse .navbar-nav li:nth-child("+i+")>a").attr("onclick","return false;")
      console.log("onclick")
    }
  }
}

  function ActivateHref(){
    $("#navbar .navbar-nav li a").attr("onclick","return true;")
    console.log("activated")
  }

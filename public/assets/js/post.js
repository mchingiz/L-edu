$(document).ready(function(){
  //********** DEADLINE INPUT **********
    var checkBox = $(".form-group #hasDeadline");
    var deadline = $(".form-group #deadline");

    $(checkBox).change(function(){
      $(deadline).prop("disabled",!$(checkBox).is(":checked"));
    })
});


//********** WHICH PAGE IS IT **********

var page; // 'edit post' or 'add post' page
var previousImage;

if( $(".cropFrame").css("display") == "block" ){
  page = "edit"; // It is 'edit post' page
  previousImage = $("#imagePreview").attr('src');
  console.log(previousImage);
}
else if( $(".cropFrame").css("display") == "none" ){
  page = "add"; // It is 'add post' page
}


//********** IMAGE PREVIEW **********
  var showImage = function(event) {
    var input = event.target;

    if( $("input#photo").val() != "" ){ // new image is chosen
      $(".cropFrame").css("display","block");
    }else{
      if(page=='edit'){ // new image is not chosen and it is 'edit page'
        $("#imagePreview").attr("src",previousImage);
      }
      else if(page=='add'){ // new image is not chosen and it is 'add page'
        $(".cropFrame").css("display","none");
      }
    }

    var reader = new FileReader();
    reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('imagePreview');
      output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
  };

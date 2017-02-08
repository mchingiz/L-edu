//********** Chanhing or adding cover photo **********

var page; // 'edit post' or 'add post' page
var previousImage;

page=$("input[name='editOrAdd']").val();
if(page == 'edit'){
  previousImage = $("#imagePreview").attr('src');
}


//********** IMAGE PREVIEW **********
  var showImage = function(event) {
    var input = event.target;

    if( $("input#cover").val() != "" ){ // new image is chosen
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

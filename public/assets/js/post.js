$(document).ready(function(){
  //********** DEADLINE INPUT **********
    var checkBox = $(".form-group #hasDeadline");
    var input = $(".form-group #deadline");

    $(checkBox).change(function(){
      $(input).prop("disabled",!$(checkBox).is(":checked"));
    })

  //********** IMAGE PREVIEW ********
    $(".cropFrame").hide();
    // Rest of the code regarding cropping image is out of the 'ready' function
});

//********** IMAGE PREVIEW **********
  var showImage = function(event) {
    var input = event.target;
    $(".cropFrame").show();

    var reader = new FileReader();
    reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('imagePreview');
      output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
  };

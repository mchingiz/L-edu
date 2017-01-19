$(document).ready(function(){
    AlignHeight();
})

$(window).resize(function(){
 AlignHeight();
})

function AlignHeight(){
    var height=$(".list-post .img-box").width();
    var imgHeight=$(".list-post .img-box img").width();
    console.log( "img:" +imgHeight +" box:"+ height)
    $(".img-box").css("height",imgheight)
}



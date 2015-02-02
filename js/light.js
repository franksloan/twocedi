//Picture pop up js

var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");

$overlay.append($image);
$overlay.append($caption);

$("body").append($overlay);

$("#imageGallery a").click(function(event){
	event.preventDefault();
	var imgLoc = $(this).attr("href");	

	$image.attr("src", imgLoc);
	$overlay.show();
	var captionText = $(this).children("img").attr("alt");
	$caption.text(captionText);
});

$overlay.click(function(){
	$overlay.hide();
});

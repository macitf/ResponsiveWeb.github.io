$(document).ready(function() {
	// preload images
	$("#image_list a").each(function() {
			var swappedImage = new Image();
			swappedImage.src = $(this).attr("href");
	});

	// set up event handlers for links    
	$("#image_list a").click(function(evt) {
			evt.preventDefault(); // cancel the default action of the link

			var imageURL = $(this).attr("href");
			var caption = $(this).attr("title");

			// Fade out current image and caption
			$("#caption, #image").fadeOut(1000, function() {
					// This callback runs after fadeOut is complete

					// Update the caption and image
					$("#image").attr("src", imageURL);
					$("#caption").text(caption);

					// Fade them in
					$("#caption, #image").fadeIn(1000);
			});
	});

	// move focus to first thumbnail
	$("li:first-child a").focus();
});

$(document).ready(function(){
	
	$.ajax({
		type: "GET",
		url: "data.xml",
		dataType: "xml",
		success: xmlParser
	});
});

function xmlParser(xml) {
	$('#load').fadeOut("fast");
	
	$(xml).find("painting").each(function(){
		var paintingCon = '<div class="painting">';
			paintingCon += '<img src="images/' + $(this).find("image").text() + '" ';
			paintingCon += 'width="200" height="225" alt="' + $(this).find("title").text() + '" >';
			paintingCon += '<br><div class="title">' + $(this).find("title").text() + '<br>';
			paintingCon += '$' + $(this).find("price").text();
			paintingCon += '</div></div>';
		
		$("#container").append(paintingCon);
		$(".painting").fadeIn("slow");
	});

}


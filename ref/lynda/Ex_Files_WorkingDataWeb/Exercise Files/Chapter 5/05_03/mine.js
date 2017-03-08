$(document).ready(function() {
	var yamlFile = YAML.load('data.yaml');
	window.alert('it');
	
	$.each($yamlFile.paintings.painting,function(k,v) {
		var title = v.title;
		var img = v.image;
		var price = v.price;
		
		$('#container').append('<div class="painting"><img src="images/' + img + '" width="200" height="225" alt="' + title + '"><h4 class="title">' + title + '</h4><p class="price">$' + price '</p></div>');
	});
	
});

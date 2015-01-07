jQuery(document).ready(function(){
	console.log(jQuery('#map-canvas').length);
	if(jQuery('#map-canvas').length)
	{
		google.maps.event.addDomListener(window, 'load', initializeGMap);	
	}
});

function initializeGMap() 
{
	var myLatlng = new google.maps.LatLng(jQuery('#map-canvas').data('lat'), jQuery('#map-canvas').data('lng'));
	var mapOptions = {
		zoom: 14,
		center: myLatlng,
		disableDefaultUI: true
	}
	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'My location!'
	});
}
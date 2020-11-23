$(function() {

	var isMapRu = $('#map-ru').length ? true : false;
	var isMapCh = $('#map-ch').length ? true : false;

	if(isMapRu && isMapCh){
		initMap();
	};

	// Настройки для карты
	function initMap() {
		var mapStyle = [{ "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" } ] }, { "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "color": "#f5f5f5" } ] }, { "featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [ { "color": "#bdbdbd" } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "poi", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "road", "elementType": "geometry", "stylers": [ { "color": "#ffffff" } ] }, { "featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#dadada" } ] }, { "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "transit.line", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "transit.station", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#c9c9c9" } ] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }];
		var mapIcon = {
				url: "/wp-content/themes/wood-bag/img/icon/placemark.png",
				scaledSize: new google.maps.Size(52, 66)
			};
		var mapZoom = 16;
		var mRuAddress = new google.maps.LatLng(56.836294, 60.614485);
		var mChAddress = new google.maps.LatLng(29.816405, 121.546795);

    var mapRu = new google.maps.Map(document.getElementById('map-ru'), {
	    zoom: mapZoom,
	    center: mRuAddress,
	    scrollwheel: false,
	    disableDefaultUI: true,
	    zoomControl: true,
	    zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_BOTTOM
			},
	    styles: mapStyle
    });

    var mapCh = new google.maps.Map(document.getElementById('map-ch'), {
	    zoom: mapZoom,
	    center: mChAddress,
	    scrollwheel: false,
	    disableDefaultUI: true,
	    zoomControl: true,
	    zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_BOTTOM
			},
	    styles: mapStyle
    });

    var markerRu = new google.maps.Marker({
      position: mRuAddress,
      map: mapRu,
      icon: mapIcon
    });

    var markerCh = new google.maps.Marker({
      position: mChAddress,
      map: mapCh,
      icon: mapIcon
    });

  }

});
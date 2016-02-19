	function initialize() {
			var myLatlng = new google.maps.LatLng(-23.658135, -46.533869);
			var mapOptions = {
					zoom: 17,
					center: myLatlng,
					disableDefaultUI: false,
					scrollwheel: false,
					draggable: false
			}
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'Dra. Eliana Felix Licitações'
			});
			var styles = [
					{
							stylers: [
									{ hue: "#1B7DA0" },
									{ saturation: -20 }
							]
					},{
							featureType: "road",
							elementType: "geometry",
							stylers: [
									{ lightness: 100 },
									{ visibility: "simplified" }
							]
					},{
							featureType: "road.local",
							elementType: "labels",
					}
			];
			map.setOptions({styles: styles});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
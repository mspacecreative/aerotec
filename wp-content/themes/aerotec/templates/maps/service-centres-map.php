<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Complex Marker Icons</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
    
        function initMap() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap',
				styles: [
				    {
				        "featureType": "water",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#e9e9e9"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f5f5f5"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 29
				            },
				            {
				                "weight": 0.2
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 18
				            }
				        ]
				    },
				    {
				        "featureType": "road.local",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f5f5f5"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "featureType": "poi.park",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#dedede"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "saturation": 36
				            },
				            {
				                "color": "#333333"
				            },
				            {
				                "lightness": 40
				            }
				        ]
				    },
				    {
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            },
				            {
				                "lightness": 19
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#fefefe"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#fefefe"
				            },
				            {
				                "lightness": 17
				            },
				            {
				                "weight": 1.2
				            }
				        ]
				    }
				]
            };
                            
            // Display a map on the web page
            map = new google.maps.Map(document.getElementById("map"), mapOptions);
            map.setTilt(50);
                
            // Multiple markers location, latitude, and longitude
            var markers = [
                ['Nova Scotia', 43.6386507, -65.7209915, 3],
                ['New Brunswick', 46.1804165, -68.5934095, 2],
                ['PEI', 46.6644233, -64.2350265, 1]
            ];
                                
            // Info window content
            var infoWindowContent = [
                ['<div class="info_content">' +
                '<h3>Lorem ipsum dolor sit amet</h3>' +
                '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nunc quis dui posuere feugiat imperdiet eu felis. Ut sollicitudin libero eget rutrum hendrerit.</p>' + '<a href="#">LEARN MORE</a>' + '</div>'],
                ['<div class="info_content">' +
                '<h3>Lorem ipsum dolor sit amet</h3>' +
                '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nunc quis dui posuere feugiat imperdiet eu felis. Ut sollicitudin libero eget rutrum hendrerit.</p>' + '<a href="#">LEARN MORE</a>' + '</div>'],
                ['<div class="info_content">' +
                '<h3>Lorem ipsum dolor sit amet</h3>' +
                '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nunc quis dui posuere feugiat imperdiet eu felis. Ut sollicitudin libero eget rutrum hendrerit.</p>' + '<a href="#">LEARN MORE</a>' + '</div>']
            ];
                
            // Add multiple markers to map
            var infoWindow = new google.maps.InfoWindow(), marker, i;
            
            // Place each marker on the map  
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });
                
                // Add info window to marker    
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
						map.setCenter(marker.getPosition());
                    }
                })(marker, i));
        
                // Center the map to fit all markers on the screen
                map.fitBounds(bounds);
            }
        
            // Set zoom level
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(7);
                google.maps.event.removeListener(boundsListener);
            });
            
        }
        // Load initialize function
        google.maps.event.addDomListener(window, 'load', initMap);
    
        </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYC5cfN7Ucvr01ksmsr7TRdW9ad08jtso&callback=initMap">
    </script>
  </body>
</html>
        <!-- 
            You need to include this script tag on any page that has a Google Map.

            The following script tag will work when opening this example locally on your computer.
            But if you use this on a localhost server or a live website you will need to include an API key. 
            Sign up for one here (it's free for small usage): 
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key

            After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_m8khbJqSROifhKM48sKCxJfaIpIqsfo"></script>
        -->

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_m8khbJqSROifhKM48sKCxJfaIpIqsfo"></script>
        <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 4,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(53.1171161, 10.1091857), 

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#1997ca"
            },
            {
                "visibility": "on"
            }
        ]
    }
]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // FR
                var marqueur1 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 47.3108131, lng: 2.9215063}
                  });

                // UK
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 52.4800015, lng: -1.2718434}
                 });

                // DE
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 51.073973, lng: 10.4261449}
                 });

                // AT
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 47.4992002, lng: 14.5478111}
                 });

                // CH
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 46.8278158, lng: 8.3557644}
                 });

                // ES
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 40.4615752, lng: -3.3764384}
                 });

                // PT
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 40.6682295, lng: -8.0972286}
                 });

                // IT
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 42.9940943, lng: 12.5090272}
                 });

                // SE
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 59.5720542, lng: 16.3358788}
                 });

                // NO
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 60.7394811, lng: 8.3980308}
                 });

                // DK
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 55.6366807, lng: 11.458264}
                 });

                // BE
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 50.5887394, lng: 4.6347009}
                 });

                // NL
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 52.1117217, lng: 5.5038494}
                 });

                // SK
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 48.7508469, lng: 19.5351218}
                 });

                // PL
                var marqueur2 = new google.maps.Marker({
                    map: map,
                    title: 'Hello World!',
                    animation: google.maps.Animation.DROP,
                    icon: 'http://www.simonvidal.fr/wp-content/themes/portfolio/assets/images/rajaicon.png',
                    position: {lat: 52.2576437, lng: 19.7415738}
                 });


     
                function drop() {
                    for (var i =0; i < markerArray.length; i++) {
                    setTimeout(function() {
                      addMarkerMethod();
                    }, i * 200);
                  }
                }
            }
        </script>


        <div id="map"></div>



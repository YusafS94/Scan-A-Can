
var myLatLng = { lat: 53.643902, lng: -1.780360 };
var mapOptions = {
    center: myLatLng,
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};


var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

var directionsService = new google.maps.DirectionsService();

var directionsDisplay = new google.maps.DirectionsRenderer();

directionsDisplay.setMap(map);


function calcRoute() {
    var request = {
        origin:'HD13DH',
        destination: 'HD16BY',
        travelMode: google.maps.TravelMode.WALKING, //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }

    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            const output = document.querySelector('#output');
            output.innerHTML = "<div class='alert-info'>WALKING distance <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Duration <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".</div>";

            directionsDisplay.setDirections(result);
        } else {
            directionsDisplay.setDirections({ routes: [] });
            map.setCenter(myLatLng);

            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
        }
    });

}





var input1 = 'HD13DH';
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = 'HD16BY';
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);

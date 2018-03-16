"use strict";

var _createClass = function () {
    function defineProperties(target, props) {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true;
            if ("value" in descriptor)
                descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);
        }
    } return function (Constructor, protoProps, staticProps) {
        if (protoProps) defineProperties(Constructor.prototype, protoProps);
        if (staticProps) defineProperties(Constructor, staticProps);
        return Constructor;
    };
}();

function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}

;(function () {
    var UserLocation = function () {
        function UserLocation() {
            _classCallCheck(this, UserLocation);
        }

        _createClass(UserLocation, null, [{
            key: "get",
            value: function get(callback) {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (location) {
                        callback({
                            lat: location.coords.latitude,
                            lng: location.coords.longitude
                        });
                    });
                } else {
                    alert("No pudimos encontrar tu ubicación");
                }
            }
        }]);

        return UserLocation;
    }();

    var centro_escalon = {
        lat: 13.702186,
        lng: -89.231801
    };

    var centro_merliot = {
      lat: 13.676570,
      lng: -89.262743
    };

    var centro_soho = {
      lat: 13.678033,
      lng: -89.251246
    };

    var centro_smiguel = {
      lat: 13.476788,
        lng: -88.184481
    };

    google.maps.event.addDomListener(window, "load", function () {
        var mapa = new google.maps.Map(document.getElementById('mapa'), {
            center: centro_escalon,
            zoom: 16
        });

        var marker = new google.maps.Marker({
            map: mapa,
            position: centro_escalon,
            title: "Centro de Liquidación Escalon",
            visible: true
        });

        UserLocation.get(function (coords) {
            var origen = new google.maps.LatLng(coords.lat, coords.lng); //LatLng
            var destino = new google.maps.LatLng(centro_merliot.lat, centro_merliot.lng); //LatLng
            var destino2 = new google.maps.LatLng(centro_escalon.lat, centro_escalon.lng); //LatLng
            var destino3 = new google.maps.LatLng(centro_soho.lat, centro_soho.lng); //LatLng
            var destino4 = new google.maps.LatLng(centro_smiguel.lat, centro_smiguel.lng); //LatLng

            var service = new google.maps.DistanceMatrixService();

            service.getDistanceMatrix({
                origins: [origen],
                destinations: [destino, destino2, destino3, destino4],
                travelMode: google.maps.TravelMode.DRIVING
            }, function (response, status) {
                if (status === google.maps.DistanceMatrixStatus.OK) {
                    const duration_element = response.rows[0].elements[0];
                    const duracion_viaje = duration_element.duration.text;

                    const duration_element2 = response.rows[0].elements[1];
                    const duracion_viaje2 = duration_element2.duration.text;

                    const duration_element3 = response.rows[0].elements[2];
                    const duracion_viaje3 = duration_element3.duration.text;

                    const duration_element4 = response.rows[0].elements[3];
                    const duracion_viaje4 = duration_element4.duration.text;

                    document.getElementById("message").innerHTML = "A " + duracion_viaje + " de Ti";
                    document.getElementById("message2").innerHTML = "A " + duracion_viaje2 + " de Ti";
                    document.getElementById("message3").innerHTML = "A " + duracion_viaje3 + " de Ti";
                    document.getElementById("message4").innerHTML = "A " + duracion_viaje4 + " de Ti";
                }
            });
        });
    });
})();
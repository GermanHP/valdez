"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

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

    google.maps.event.addDomListener(window, "load", function () {
        var mapa = new google.maps.Map(document.getElementById('mapa'), {
            center: centro_escalon,
            zoom: 16
        });

        UserLocation.get(function (coords) {
            var origen = new google.maps.LatLng(coords.lat, coords.lng); //LatLng
            var destino = new google.maps.LatLng(centro_escalon.lat, centro_escalon.lng); //LatLng

            var service = new google.maps.DistanceMatrixService();

            service.getDistanceMatrix({
                origins: [origen],
                destinations: [destino],
                travelMode: google.maps.TravelMode.DRIVING
            }, function (response, status) {
                if (status === google.maps.DistanceMatrixStatus.OK) {
                    var duration_element = response.rows[0].elements[0];

                    console.log(duration_element);
                }
            });
        });
    });
})();
var CACHE_NAME = "valdez-v1";
var cache_urls = ["/offline/view.html", "/offline/style.css", "/offline/sucursal-merliot.png",
                  "/offline/sucursal-escalon.png", "/offline/Ubicacion-cascadas.jpg", "/offline/sucur-sanmiguel.png"];

self.addEventListener("install", function (ev) {
    console.log("SW Instalado");

    caches.open(CACHE_NAME).then(function (cache) {
        console.log("cache opened");
        return cache.addAll(cache_urls);
    });
});

self.addEventListener('fetch', (event) => {
    console.info('Event: Fetch');

    var request = event.request;

    //Le dices al buscador que espere por la solicitud de la red y que responda con lo siguiente
    event.respondWith(
        //Si la solicitud está lista en el cache, respondes con lo siguiente
        caches.match(request).then((response) => {
            if (response) {
                return response;
            }

            //Si la solicitud no está en el cache, agrega lo siguiente
            return fetch(request).then((response) => {
                var responseToCache = response.clone();
                caches.open(CACHE_NAME).then((cache) => {
                    cache.put(request, responseToCache).catch((err) => {
                        console.warn(request.url + ': ' + err.message);
                    });
                });

                return response;
            });
        })
    );
});

/*
  ACTIVATE EVENT: triggered once after registering, also used to clean up caches.
*/

//Agregando `activate` event listener
self.addEventListener('activate', (event) => {
    console.info('Event: Activate');

    //Removiendo al antiguo y no requerido cache
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cache) => {
                    if (cache !== CACHE_NAME) {     //CACHE_NAME = 'cache-v1'
                        return caches.delete(cache); //Eliminando el cache
                    }
                })
            );
        })
    );
});

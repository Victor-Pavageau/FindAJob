
const NomDuCache= 'ma_sauvegarde';
const assets = [
    '/',
    '/index.php',
    './ressources/views/index.blade.php',
    './resources/views/entreprise.blade.php',
    './ressources/views/login.blade.php',
    'manifest.json',
    './css/buttons.css',
    'logo.png'
];

self.addEventListener('install', evt => {

     evt.waitUntil(  caches.open(NomDuCache).then(cache => {
        console.log('caching shell assets');
        cache.addAll(assets);
        })
    )

});

self.addEventListener('activate', evt => {
    console.log('service Worker has been activated');
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.open('ma_sauvegarde').then(function(cache) {
        return cache.match(event.request).then(function (response) {
          return response || fetch(event.request).then(function(response) {
            cache.put(event.request, response.clone());
            return response;
          });
        });
      })
    );
  });
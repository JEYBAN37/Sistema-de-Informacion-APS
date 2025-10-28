const CACHE_NAME = 'aps-cache-v1';
const urlsToCache = [
  '/',
  '/css/app.css',
  '/js/app.js',
  '/img/cake.icon.png'
];

// Instalar y guardar archivos
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
  );
});

// Interceptar peticiones
self.addEventListener('fetch', event => {
  event.respondWith(
    fetch(event.request).catch(() => caches.match(event.request))
  );
});

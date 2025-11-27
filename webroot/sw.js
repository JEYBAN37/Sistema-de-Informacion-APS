// 🆕 Cambia la versión del caché si actualizas archivos
const BASE_URL = "/aps/aps_2025_v1";
const CACHE_NAME = "aps-cache-v43";

// 🗂️ Archivos a cachear
const urlsToCache = [
  `${BASE_URL}/`,
  `${BASE_URL}/Familias`,
  `${BASE_URL}/Sociambientals/add`,
  `${BASE_URL}/css/tailwind.min.css`,
  `${BASE_URL}/img/cake.icon.png`,
  `${BASE_URL}/offline.html`
];


// 🧱 INSTALACIÓN — Cachea solo los archivos que existan correctamente
self.addEventListener("install", (event) => {
  console.log("📦 Instalando Service Worker...");
  event.waitUntil(
    caches.open(CACHE_NAME).then(async (cache) => {
      for (const url of urlsToCache) {
        try {
          const response = await fetch(url, { cache: "no-store" });
          if (response.ok) {
            await cache.put(url, response.clone());
            console.log("✅ Cacheado:", url);
          } else {
            console.warn("⚠️ No se pudo cachear:", url, response.status);
          }
        } catch (err) {
          console.warn("⚠️ Error al intentar cachear:", url);
        }
      }
    })
  );
});

// 🔄 ACTIVACIÓN — Limpia versiones anteriores
self.addEventListener("activate", (event) => {
  console.log("♻️ Activando nuevo SW...");
  event.waitUntil(
    caches.keys().then((keys) =>
      Promise.all(
        keys.map((key) => {
          if (key !== CACHE_NAME) {
            console.log("🧹 Eliminando cache viejo:", key);
            return caches.delete(key);
          }
        })
      )
    )
  );
});

// ⚙️ FETCH — Guarda dinámicamente páginas visitadas
self.addEventListener("fetch", (event) => {
  if (event.request.method !== "GET") return;

  event.respondWith(
    fetch(event.request)
      .then((response) => {
        // ✅ Guarda la página si carga bien
        const clone = response.clone();
        caches.open(CACHE_NAME).then((cache) => {
          cache.put(event.request, clone);
        });
        return response;
      })
      .catch(async () => {
        // ⚠️ Si no hay conexión, busca en caché
        const cachedResponse = await caches.match(event.request);
        if (cachedResponse) {
          console.log("🗂️ Mostrando desde caché:", event.request.url);
          return cachedResponse;
        }
        // Si no hay nada en caché, muestra offline.html
        return caches.match(`${BASE_URL}/offline.html`);
      })
  );
});

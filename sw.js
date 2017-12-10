var CACHE_NAME = 'Akakom Career Center';
var urlsToCache = [
  '/',
  '/index.html',
  '/Cluster/pencarian.php',
  '/vendor/simple-line-icons/simple-line-icons.min.css',
  '/vendor/bootstrap/css/bootstrap.min.css',
  '/vendor/bootstrap/css/bootstrap.css',
  '/vendor/bootstrap/css/bootstrap-theme.css',
  '/vendor/bootstrap/css/bootstrap-theme.min.css',
  '/vendor/swiper/css/swiper.min.css',
  '/vendor/jquery.min.js',
  '/vendor/jquery-migrate.min.js',
  '/vendor/bootstrap/js/bootstrap.min.js',
  '/vendor/jquery.easing.js',
  '/vendor/jquery.back-to-top.js',
  '/vendor/jquery.smooth-scroll.js',
  '/vendor/jquery.wow.min.js',
  '/vendor/swiper/js/swiper.jquery.min.js',
  '/css/animate.css',
  '/img',

];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        return cache.addAll(urlsToCache);
      })
  );  
});

self.addEventListener('activate', function(event) {
  console.log('Finally active. Ready to start serving content!');  
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return response
        if (response) {
          return response;
        }
        return fetch(event.request);
      }
    )
  );
});

self.addEventListener('push', function(event) {  
  var title = 'Yay a message.';  
  var body = 'We have received a push message.';  
  var icon = '/images/smiley.svg';  
  var tag = 'simple-push-example-tag';
  event.waitUntil(  
    self.registration.showNotification(title, {  
      body: body,  
      icon: icon,  
      tag: tag  
    })  
  );  
});
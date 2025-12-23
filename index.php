<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Media Map Platform</title>
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>

<!-- TOP BAR -->
<header class="topbar">
  <div class="logo">광고플레이</div>

  <input class="search" placeholder="Please search for the media you want" />

  <div class="filters">
    <button class="active">Entire</button>
    <button>Building</button>
    <button>Traffic</button>
    <button>Shopping</button>
    <button>Life</button>
  </div>
</header>

<!-- MAIN -->
<div class="layout">
  <!-- LEFT LIST -->
  <aside id="sidebar"></aside>

  <!-- MAP -->
  <div id="map"></div>

    <div className="aspect-[4/3] bg-gray-100 relative">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3183.612123345085!2d126.9690720757498!3d37.55460322481248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca3e3564c132f%3A0xe51f94b3ae4bff12!2sSeoul%20Station!5e1!3m2!1sen!2sph!4v1766412810454!5m2!1sen!2sph"
  
                     width="100%"
                      height="100%" 
                      allowFullScreen
                      loading="lazy"
                      referrerPolicy="no-referrer-when-downgrade"
                      title="GBPL Office Location"
                      className="w-full h-full" />
                  </div>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3183.612123345085!2d126.9690720757498!3d37.55460322481248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca3e3564c132f%3A0xe51f94b3ae4bff12!2sSeoul%20Station!5e1!3m2!1sen!2sph!4v1766412810454!5m2!1sen!2sph"
  
  
  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
  ></iframe> -->
  <!-- <iframe 
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15900.060586714446!2d124.16431945000001!3d8.1721444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sph!4v1766411497640!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

  </iframe> -->
</div>

<!-- GOOGLE MAP -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script src="./js/script.js"></script>

</body>
</html>

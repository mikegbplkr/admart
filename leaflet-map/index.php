<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Leaflet Map</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Leaflet CSS -->
 <!-- Leaflet -->
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  />

  <!-- Marker Cluster -->
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css"
  />
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css"
  />

  <style>
    /* Fix Tailwind + Leaflet height issue */
    #map {
      height: 100%;
      width: 100%;
    }
  </style>
  
</head>
<body class="h-screen flex flex-col">

<!-- Topbar -->
<header class="h-[60px] flex items-center px-4 bg-blue-900 text-white">
  <div class="font-bold">Ad Mart</div>
  <input id="searchInput" class="ml-4 flex-1 px-3 py-2 rounded-full text-black" placeholder="Search locations">
</header>

<!-- Main layout -->
<div class="flex flex-1 h-[calc(100vh-60px)]">
  <aside id="sidebar" class="w-[360px] border-r border-gray-200 overflow-y-auto"></aside>
  <div id="map" class="flex-1"></div>
</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<!-- Marker Cluster JS -->
<script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>
<!-- Your JS -->
<script src="./script.js"></script>

</body>
</html>

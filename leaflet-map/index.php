<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Leaflet + Tailwind Map</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

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
<body class="h-screen overflow-hidden">

<!-- TOP BAR -->
<header class="h-14 bg-blue-900 text-white flex items-center px-4 gap-4">
  <div class="font-bold">광고플레이</div>
  <input
    type="text"
    placeholder="Please search for the media you want"
    class="flex-1 rounded-full px-4 py-2 text-black"
  />
</header>

<!-- MAIN -->
<div class="flex h-[calc(100vh-56px)]">

  <!-- SIDEBAR -->
  <aside id="sidebar" class="w-96 bg-white border-r overflow-y-auto"></aside>

  <!-- MAP -->
  <div class="flex-1 relative">
    <div id="map" class="absolute inset-0"></div>
  </div>

</div>

<!-- Leaflet -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Marker Cluster -->
<script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>

<script src="app.js"></script>
</body>
</html>

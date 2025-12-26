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

<!-- 테마별 맞춤광고 - theme -->
<!-- 광고 현장 사례 - advertisement -->



<!-- Topbar -->


<div class="h-[60px] flex items-center px-4 bg-blue-900 text-white py-2 border-b border-b-gray">
    <div class="flex gap-2 justify-between w-full">
        <div class="flex gap-2">
            <div>Logo</div>
            <div>Marquee</div>
            <div>dropdown 1</div> 
            <div>modal</div>
            <div>theme</div>
        </div>
        
        <div class="flex gap-2"> 
            <div>User Guide</div>
            <div>Dopdown 2</div> | 
            <div>Login</div> 
            <div>Jopin the member</div> 
        </div>
    </div>
</div>
<header class="h-[60px] flex items-center px-4 bg-blue-900 text-white border-b-4 py-2 border-b-gray">
  <div class="font-bold">Ad Mart</div>
  <input id="searchInput" class="w-26 ml-4 flex-1 px-3 py-2 rounded-full text-black" placeholder="Search locations">
 
  <div class="flex gap-2">
    <button class="px-4 py-1 rounded-full bg-blue-600 text-white">Entire</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Building</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Traffic</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Shopping</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Life</button>
  </div>
  <div class="ml-4 flex items-center gap-2">
    <!-- English / US Flag -->
    <div id="lang-en" class="p-1 rounded bg-white hover:bg-gray-200 transition">
      <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="English" class="h-5 w-5 rounded">
    </div>

    <!-- Korean Flag -->
    <div id="lang-kr" class="p-1 rounded bg-white hover:bg-gray-200 transition">
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Flag_of_South_Korea.svg" alt="Korean" class="h-5 w-5 rounded">
    </div>
  </div>
</header>

<!-- Main layout -->
<div class="flex flex-1 h-[calc(100vh-60px)]">
  <aside id="sidebar" class="w-[360px] border-r border-gray-200 overflow-y-auto"></aside>
  <div id="map" class="flex-1"></div>
</div>




<!-- MODAL (AUTO OPEN) --> 
<!-- MODAL -->
<div id="modal" class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 p-4">
  <div class="bg-white w-full max-w-5xl rounded-xl shadow-xl overflow-hidden relative flex flex-col md:flex-row">

    <!-- Close button -->
    <button
      onclick="closeModal()"
      class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-2xl font-bold z-10"
    >
      ✕
    </button>

    <!-- LEFT SIDEBAR LINKS -->
    <div class="md:w-1/3 bg-gray-50 p-4 flex flex-col gap-2 overflow-y-auto">
      <h3 class="font-semibold text-lg mb-2">카테고리 선택</h3>

      <!-- Category links -->
      <button class="sidebar-link px-3 py-1 rounded text-left hover:bg-gray-200 transition" data-id="1">
        건물 대형 전광판 · 빌보드 · 래핑
      </button>
      <button class="sidebar-link px-3 py-1 rounded text-left hover:bg-gray-200 transition" data-id="2">
        쇼핑몰 · 광장 · 영화관
      </button>
      <button class="sidebar-link px-3 py-1 rounded text-left hover:bg-gray-200 transition" data-id="3">
        지하철 · 버스 · 공항 · 터미널
      </button>
      <button class="sidebar-link px-3 py-1 rounded text-left hover:bg-gray-200 transition" data-id="4">
        아파트 · 오피스 · 마트 · 편의점
      </button>
      
      <button class="sidebar-link px-3 py-1 rounded text-left hover:bg-gray-200 transition" data-id="5">
        ★ 인물 · 스타 인증샷 포인트 ★
      </button>

      
      <button class="sidebar-link px-3 py-1 rounded text-left hover:bg-gray-200 transition" data-id="6">
       ★ 핫플! 타임싱크! ★
      </button>
      
      <button class="sidebar-link px-3 py-1 rounded text-left hover:bg-gray-200 transition" data-id="7">
        ★ 패키지 특가! ★
      </button>

      <!-- <hr class="my-2">

      <span class="font-semibold text-sm">★ 인물 · 스타 인증샷 포인트 ★</span>
      <span class="font-semibold text-sm">★ 핫플! 타임싱크! ★</span>
      <span class="font-semibold text-sm">★ 패키지 특가! ★</span> -->
    </div>

    <!-- RIGHT CONTENT -->
    <div id="modal-content" class="md:w-2/3 p-4 flex flex-col justify-center items-center">
      <!-- Content dynamically inserted here -->
    </div>
  </div>
</div>


<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<!-- Marker Cluster JS -->
<script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>
<!-- Your JS -->
<script src="./js/lang.js"></script>
<script src="./js/script.js"></script>
<script src="./js/modal.js"></script>

<script>     
  function loadContent(id) {
    modalContent.innerHTML = `
      <img src="${modalData[id].image}" alt="${translations[currentLang].modalTitles[id]}" class="w-full h-64 object-cover rounded-lg mb-4" />
      <h2 class="text-xl font-bold text-blue-800 mb-2">${translations[currentLang].modalTitles[id]}</h2>
      <p class="text-gray-600">${translations[currentLang].modalTexts[id]}</p>
    `;
  }
  
  document.querySelectorAll(".sidebar-link").forEach(btn => {
    btn.addEventListener("click", () => {
      loadContent(btn.dataset.id);
      document.querySelectorAll(".sidebar-link").forEach(b => b.classList.remove("bg-gray-200"));
      btn.classList.add("bg-gray-200");
    });
  });
  
  loadContent(1);
</script>
</body>
</html>

<?php
  // include './db/db.php'; 
  // include 'auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Leaflet Map</title>
  <script src="https://cdn.tailwindcss.com"></script> 
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  /> 
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css"
  />
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css"
  />

  <style> 
    #map {
      height: 100%;
      width: 100%;
    }
    .dropdown-content {
        display: none;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    /* .nav-item {
        @apply flex items-center justify-center
              cursor-pointer
              px-4 py-2
              text-white
              hover:bg-blue-700
              transition;
      } */
  </style>
  
</head>
<body class="h-screen flex flex-col">
  
<div class="h-[60px] flex items-center px-4 bg-blue-900 text-white py-2 border-b border-b-gray">
    <div class="flex gap-2 justify-between w-full">
        <div class="flex gap-2">
            <div class=" flex h-full items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">Logo</div>
            <div>
              <marquee direction="left" scrollamount="2">
                  기업광고, 지자체광고, 연예인광고, 지역축제광고, 브랜드런칭광고, 생일축하
                  <div>
                      1533-1975로 문의 주시면, 예산에 맞춰 패키지로 제안드립니다. 1533-1975
                  </div>
              </marquee>
            </div><!-- Wrapper -->
            <div class="relative inline-block text-left" id="regionDropdown">
              <!-- Button -->
 
            <div id="dropdownButton" class=" flex h-full items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">
              지역 바로가기 
              <i class="fa-solid fa-angle-down transition-transform" id="arrowIcon"></i>
            </div> 
              <!-- Dropdown -->
              <div
                id="dropdownMenu"
                class="absolute right-0 z-[9999] mt-2 hidden w-[420px] rounded-md border border-gray-200 bg-white shadow-lg"
              >
                <div class="grid grid-cols-3 gap-4 p-4 text-sm">
                  <!-- 전국/수도권 -->
                  <div>
                    <p class="mb-2 font-semibold text-gray-800">전국/수도권</p>
                    <ul class="space-y-1">
                      <li class="region-item" data-region="all">전국</li>
                      <li class="region-item" data-region="metro">수도권</li>
                    </ul>
                  </div>

                  <!-- 서울시 -->
                  <div>
                    <p class="mb-2 font-semibold text-gray-800">서울시</p>
                    <ul class="space-y-1">
                      <li class="region-item" data-region="seoul">서울시(전체)</li>
                    </ul>
                    <ul class="mt-2 space-y-1">
                      <li class="region-item" data-region="gabuk">강북</li>
                      <li class="region-item" data-region="ganam">강남</li>
                      <li class="region-item" data-region="gadong">강동</li>
                      <li class="region-item" data-region="gaseo">강서</li>
                    </ul>
                  </div>

                  <!-- 광역시도 -->
                  <div>
                    <p class="mb-2 font-semibold text-gray-800">광역시도</p>
                    <ul class="space-y-1">
                      <li class="region-item" data-region="sejong">세종시</li>
                      <li class="region-item" data-region="daejeon">대전시</li>
                      <li class="region-item" data-region="gwangju">광주시</li>
                      <li class="region-item" data-region="daegu">대구시</li>
                      <li class="region-item" data-region="busan">부산시</li>
                      <li class="region-item" data-region="ulsan">울산시</li>
                      <li class="region-item" data-region="changwon">창원시</li>
                      <li class="region-item" data-region="jeju">제주도</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> 



            <div onclick="openModal()" class=" flex items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">
              Open Modal
            </div>
 
            <div id="dropdownButton" class=" flex h-full items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">
              
              <a href="https://www.youtube.com/channel/UCxXNbNumZkcpjIGzUaOnfnQ" target="_blank"> Theme </a> 
            </div>  
        </div>
        
        <div class="flex gap-4"> 
            <div class=" flex h-full items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">
              <a href="https://www.k-goplay.com/assets/public/doc/%EA%B4%91%EA%B3%A0%ED%94%8C%EB%A0%88%EC%9D%B4-%EA%B4%91%EA%B3%A0%EB%A7%A4%EC%B2%B4%EC%86%8C%EA%B0%9C%EC%84%9C.pdf"> User Guide </a>

            </div>
            <div class=" flex h-full items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">Dopdown 2</div> 
            <?php //if (isLoggedIn()): ?>
              <!-- <div class="relative"> 
                  <div id="dropdown-user" class="flex h-full items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">
                      <span><?php // echo htmlspecialchars(getUserName()); ?></span>
                  </div> 
                  <div class="dropdown-user-management absolute hidden bg-white text-black border shadow-md mt-1">
                      <a href="management.php" class="block px-4 py-2">Management</a>
                      <a href="logout.php" class="block px-4 py-2">Logout</a>
                  </div>
              </div> -->
          <?php //else: ?>
              <div class="flex h-full items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">
                  <a href="./leaflet-map/auth/login.php">Login</a>
              </div>
              <div class="flex h-full items-center justify-center cursor-pointer px-4 py-2 text-white hover:bg-blue-700 transition">
                  <a href="./leaflet-map/auth/register.php">Join the member</a>
              </div>
          <?php //endif; ?>
        </div>
    </div>
</div>
<header class="h-[60px] flex items-center px-4 bg-blue-900 text-white border-b-4 py-2 border-b-gray gap-2">
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
      <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="English" class="h-5 w-5 rounded cursor-pointer">
    </div>

    <!-- Korean Flag -->
    <div id="lang-kr" class="p-1 rounded bg-white hover:bg-gray-200 transition">
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Flag_of_South_Korea.svg" alt="Korean" class="h-5 w-5 rounded cursor-pointer">
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
  const modal = document.getElementById("modal");
  const content = document.getElementById("modal-content"); 

  const button = document.getElementById("dropdownButton");
  const menu = document.getElementById("dropdownMenu");
  const arrow = document.getElementById("arrowIcon"); 
   

  // const dropdownUser = document.getElementById('.dropdown-user');
  // const dropdownContent = document.querySelector('.dropdown-user-managementt');

  // dropdownUser.addEventListener('click', () => {
  //     dropdownContent.classList.toggle('hidden');
  // });



  loadContent(1);

  function loadContent(id) {
    modalContent.innerHTML = `
      <img src="${modalData[id].image}" alt="${translations[currentLang].modalTitles[id]}" class="w-full h-64 object-cover rounded-lg mb-4" />
      <h2 class="text-xl font-bold text-blue-800 mb-2">${translations[currentLang].modalTitles[id]}</h2>
      <p class="text-gray-600">${translations[currentLang].modalTexts[id]}</p>
    `;
  }

  function openModal() {
    modal.classList.remove("hidden");
  }

  function closeModal() {
    modal.classList.add("hidden");
  }
  
  // Toggle dropdown
  button.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    arrow.classList.toggle("rotate-180");
  });

  // Click outside to close
  document.addEventListener("click", (e) => {
    if (!document.getElementById("regionDropdown").contains(e.target)) {
      menu.classList.add("hidden");
      arrow.classList.remove("rotate-180");
    }
  });

  // Region click handler
  document.querySelectorAll(".region-item").forEach(item => {
    item.classList.add(
      "cursor-pointer",
      "rounded",
      "px-2",
      "py-1",
      "hover:bg-gray-100",
      "transition"
    );

    item.addEventListener("click", () => {
      const region = item.dataset.region;
      console.log("Selected region:", region);

      // Example: close dropdown after select
      menu.classList.add("hidden");
      arrow.classList.remove("rotate-180");
    });
  });
  document.querySelectorAll(".sidebar-link").forEach(btn => {
    btn.addEventListener("click", () => {
      loadContent(btn.dataset.id);
      document.querySelectorAll(".sidebar-link").forEach(b => b.classList.remove("bg-gray-200"));
      btn.classList.add("bg-gray-200");
    });
  });
  
</script>
</body>
</html>

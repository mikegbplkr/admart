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
 
  <div class="flex gap-2">
    <button class="px-4 py-1 rounded-full bg-blue-600 text-white">Entire</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Building</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Traffic</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Shopping</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Life</button>
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
<script src="./script.js"></script>

<script>
 
  const modalData = {
    1: {
      title: "대형 전광판 광고",
      image: "https://cdn.crowdpic.net/detail-thumb/thumb_d_FFCF185383F07ECD946674C1EDE4E3E3.jpg",
      text: "압도적 스케일과 임팩트 확실하게! 브랜드 가치 제고"
    },
    2: {
      title: "쇼핑몰 · 광장 광고",
      image: "https://cdn.imweb.me/thumbnail/20250418/b47b0236e902b.jpg",
      text: "고객 접근성이 뛰어난 위치에서 홍보"
    },
    3: {
      title: "지하철 · 버스 광고",
      image: "https://i.pinimg.com/originals/3d/6c/c2/3d6cc2e514ab2344ba1dd8e5ad456f19.jpg",
      text: "대중교통을 이용하는 다수 타겟에게 노출"
    },
    4: {
      title: "아파트 · 오피스 광고",
      image: "https://tse3.mm.bing.net/th/id/OIP.1dSlW2ETs0SL-y67ElBqrgHaDO?pid=Api&P=0&h=180",
      text: "주거지역과 업무지역 집중 홍보"
    },
    5: {
      title: "★ 인물 · 스타 인증샷 포인트 ★",
      image: "https://i.ytimg.com/vi/ah3ckNtTc7A/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AGICIAC0AWKAgwIABABGE8gWyhlMA8=&rs=AOn4CLAyJ36evUFrrvYRPFldNPYJonKUzA",
      text: "3일, 7일, 15일"
    },
    6: {
      title: "★ 핫플! 타임싱크! ★",
      image: "https://tse1.mm.bing.net/th/id/OIP.VsuUx9zNjmxVbh0-eW4xXAHaE7?pid=Api&P=0&h=180",
      text: "문화・예술・축제・관광"
    },
    7: {
      title: "★ 패키지 특가! ★",
      image: "https://cdn.bizwnews.com/news/photo/202508/109284_119440_2926.png",
      text: "합리적인 비용 전광판 패키지"
    }
  };

  function closeModal() {
    document.getElementById("modal").classList.add("hidden");
  }

  // Load initial content
  const modalContent = document.getElementById("modal-content");
  function loadContent(id) {
    const data = modalData[id];
    modalContent.innerHTML = `
      <img src="${data.image}" alt="${data.title}" class="w-full h-64 object-cover rounded-lg mb-4" />
      <h2 class="text-xl font-bold text-blue-800 mb-2">${data.title}</h2>
      <p class="text-gray-600">${data.text}</p>
    `;
  }

  // Attach click to sidebar links
  document.querySelectorAll(".sidebar-link").forEach(btn => {
    btn.addEventListener("click", () => {
      loadContent(btn.dataset.id);

      // Optional: highlight active link
      document.querySelectorAll(".sidebar-link").forEach(b => b.classList.remove("bg-gray-200"));
      btn.classList.add("bg-gray-200");
    });
  });

  // Show first content by default
  loadContent(1); 
</script>
</body>
</html>

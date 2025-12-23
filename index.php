<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Media Map Platform</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden font-sans">

<!-- TOP BAR -->
<header class="h-[60px] flex items-center gap-4 px-4 bg-[#143c8c] text-white">
  <div class="font-bold text-lg">Ad Mart</div>

  <input
    id="searchInput"
    class="flex-1 px-4 py-2 rounded-full text-black outline-none"
    placeholder="Please search for the media you want"
  /> 

  <div class="flex gap-2">
    <button class="px-4 py-1 rounded-full bg-blue-600 text-white">Entire</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Building</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Traffic</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Shopping</button>
    <button class="px-4 py-1 rounded-full bg-white text-black">Life</button>
  </div>
</header>

<!-- MAIN LAYOUT -->
<div class="flex h-[calc(100vh-60px)]">

  <!-- SIDEBAR -->
  <aside
    id="sidebar"
    class="w-[360px] overflow-y-auto border-r border-gray-200 bg-white"
  >
    <!-- Cards injected by JS -->
  </aside>

  <!-- MAP -->
  <div class="flex-1">
    <iframe
      id="map-frame"
      class="w-full h-full border-0"
      loading="lazy"
      allowfullscreen>
    </iframe>
  </div>

</div>

<!-- MODAL (AUTO OPEN) -->
<div
  id="modal"
  class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
>
  <div
    class="bg-white w-full max-w-md rounded-lg shadow-lg p-6 relative"
    onclick="event.stopPropagation()"
  >
    <!-- Close -->
    <button
      onclick="closeModal()"
      class="absolute top-3 right-3 text-gray-400 hover:text-gray-600"
    >
      ✕
    </button>

    <h2 class="text-xl font-semibold mb-4">Welcome</h2>
    <p class="text-gray-600 mb-6">
      This modal opens automatically using Tailwind CSS.
    </p>

    <div class="flex justify-end gap-2">
      <button
        onclick="closeModal()"
        class="px-4 py-2 rounded border"
      >
        Close
      </button>
      <button class="px-4 py-2 rounded bg-blue-600 text-white">
        Confirm
      </button>
    </div>
  </div>
</div>

<!-- JS -->
<script src="./js/script.js"></script>

<script>
  // Modal opens by default
  function closeModal() {
    document.getElementById("modal").classList.add("hidden");
  }
</script>

</body>
</html>

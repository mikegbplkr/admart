const locations = [
  { id: 1, title: "Gangnam Station", lat: 37.4979, lng: 127.0276, desc: "High traffic commercial district", img: "https://english.seoul.go.kr/wp-content/uploads/2016/03/gangnam_07.jpg", category: ["Traffic"] },
  { id: 2, title: "Gyeongbokgung", lat: 37.5796, lng: 126.9770, desc: "Tourist landmark", img: "https://www.ourbigjourney.com/wp-content/uploads/2023/04/DSC09561.jpg", category: ["Building"] },
  { id: 3, title: "Incheon Airport", lat: 37.4602, lng: 126.4407, desc: "International airport", img: "https://airssist.com/wp-content/uploads/2023/05/Incheon-Airport-Photo-798x798.jpg", category: ["Life", "Traffic"] },
  { id: 4, title: "COEX Mall", lat: 37.5120, lng: 127.0580, desc: "Shopping center", img: "https://www.kkday.com/en/blog/wp-content/uploads/kr_coex-1.jpg", category: ["Shopping"] }
];

const sidebar = document.getElementById("sidebar");
const searchInput = document.getElementById("searchInput");
const categoryButtons = document.querySelectorAll("header button");

let selectedCategory = "Entire";

// Initialize map
const map = L.map("map").setView([37.5665, 126.9780], 10);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// Marker Cluster
const markerCluster = L.markerClusterGroup({
  iconCreateFunction: cluster => L.divIcon({
    html: `<div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center">${cluster.getChildCount()}</div>`,
    className: 'marker-cluster',
    iconSize: L.point(40, 40)
  })
});
map.addLayer(markerCluster);

let allMarkers = [];
let visibleMarkers = [];

// Create markers
locations.forEach(loc => {
  const popupContent = `
    <div class="flex items-start gap-2">
      <img src="${loc.img}" alt="${loc.title}" class="w-20 h-16 object-cover rounded" />
      <div>
        <h4 class="font-semibold">${loc.title}</h4>
        <p class="text-sm">${loc.desc}</p>
      </div>
    </div>
  `;
  const customIcon = L.icon({
    iconUrl: loc.img,
    iconSize: [50, 50],
    iconAnchor: [25, 50],
    popupAnchor: [0, -50],
    className: 'rounded-full border border-white shadow-lg'
  });
  const marker = L.marker([loc.lat, loc.lng], { icon: customIcon, data: loc }).bindPopup(popupContent);
  allMarkers.push(marker);
  markerCluster.addLayer(marker);
});
visibleMarkers = [...allMarkers];

// Render sidebar
function renderSidebar() {
  sidebar.innerHTML = "";
  const clusterGroups = new Map();

  visibleMarkers.forEach(marker => {
    const parent = markerCluster.getVisibleParent(marker);
    if (!parent) return;
    const key = parent._leaflet_id;
    if (!clusterGroups.has(key)) clusterGroups.set(key, []);
    clusterGroups.get(key).push(marker);
  });

  clusterGroups.forEach(group => {
    const card = document.createElement("div");
    card.className = "p-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50 transition flex flex-col gap-2";

    if (group.length === 1) {
      const loc = group[0].options.data;
      card.innerHTML = `
        <div class="overflow-hidden rounded">
          <img src="${loc.img}" alt="${loc.title}" class="w-full h-42 object-cover transition-transform duration-300 ease-in-out hover:scale-105" />
        </div>
        <div>
          <h4 class="font-semibold">${loc.title}</h4>
          <p class="text-sm text-gray-600">${loc.desc}</p>
        </div>
      `;
      card.addEventListener("click", () => {
        map.setView([loc.lat, loc.lng], 14);
        group[0].openPopup();
      });
    } else {
      const imgsHTML = group.map(m => `<img src="${m.options.data.img}" alt="${m.options.data.title}" class="w-20 h-16 object-cover rounded" />`).join('');
      card.innerHTML = `
        <div class="scroll-x flex gap-2 overflow-x-auto">${imgsHTML}</div>
        <div>
          <h4 class="font-semibold">${group.length} locations</h4>
          <p class="text-sm text-gray-600">${group.map(m => m.options.data.title).join(", ")}</p>
        </div>
      `;
      card.addEventListener("click", () => {
        map.fitBounds(L.featureGroup(group).getBounds());
      });
    }

    sidebar.appendChild(card);
  });
}

// Filter function (search + category)
function applyFilters() {
  const keyword = searchInput.value.toLowerCase();

  visibleMarkers = allMarkers.filter(marker => {
    const loc = marker.options.data;

    // Search filter
    const matchSearch = loc.title.toLowerCase().includes(keyword) || loc.desc.toLowerCase().includes(keyword);

    // Category filter
    let matchCategory = true;
    if (selectedCategory !== "Entire") {
      if (Array.isArray(loc.category)) {
        matchCategory = loc.category.includes(selectedCategory);
      } else {
        matchCategory = loc.category === selectedCategory;
      }
    }

    return matchSearch && matchCategory;
  });

  markerCluster.clearLayers();
  visibleMarkers.forEach(m => markerCluster.addLayer(m));

  setTimeout(renderSidebar, 50);
}

// Category button click
categoryButtons.forEach(btn => {
  btn.addEventListener("click", () => {
    selectedCategory = btn.textContent;

    categoryButtons.forEach(b => {
      if (b === btn) {
        b.classList.add("bg-blue-600", "text-white");
        b.classList.remove("bg-white", "text-black");
      } else {
        b.classList.remove("bg-blue-600", "text-white");
        b.classList.add("bg-white", "text-black");
      }
    });

    applyFilters();
  });
});

// Search input
searchInput.addEventListener("input", () => {
  applyFilters();
});

// Initial render
setTimeout(renderSidebar, 100);

// Update sidebar on cluster animation or zoom
markerCluster.on("animationend", renderSidebar);
map.on("zoomend", () => setTimeout(renderSidebar, 100));
markerCluster.on("clusterclick", () => setTimeout(renderSidebar, 100));

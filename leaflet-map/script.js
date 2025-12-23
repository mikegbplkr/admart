const locations = [
  { id: 1, title: "Gangnam Station", lat: 37.4979, lng: 127.0276, desc: "High traffic commercial district", img: "https://english.seoul.go.kr/wp-content/uploads/2016/03/gangnam_07.jpg" },
  { id: 2, title: "Gyeongbokgung", lat: 37.5796, lng: 126.9770, desc: "Tourist landmark", img: "https://www.ourbigjourney.com/wp-content/uploads/2023/04/DSC09561.jpg" },
  { id: 3, title: "Incheon Airport", lat: 37.4602, lng: 126.4407, desc: "International airport", img: "https://airssist.com/wp-content/uploads/2023/05/Incheon-Airport-Photo-798x798.jpg" }
];

const sidebar = document.getElementById("sidebar");
const searchInput = document.getElementById("searchInput");

// Initialize Leaflet map
const map = L.map("map").setView([37.5665, 126.9780], 10);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// Marker cluster group
// const markerCluster = L.markerClusterGroup();
// map.addLayer(markerCluster);
const markerCluster = L.markerClusterGroup({
  iconCreateFunction: function (cluster) {
    const count = cluster.getChildCount();

    return L.divIcon({
      html: `
        <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold shadow">
          ${count}
        </div>
      `,
      className: "custom-cluster-icon",
      iconSize: L.point(40, 40)
    });
  }
});

map.addLayer(markerCluster);





// Keep track of markers
let allMarkers = [];

// Render sidebar cards and markers
function renderCards(data) {
  sidebar.innerHTML = "";
  markerCluster.clearLayers(); // remove old markers

  if (!data.length) {
    sidebar.innerHTML = `<div class="p-4 text-gray-500 text-sm">No results found</div>`;
    return;
  }

  const bounds = [];

  data.forEach(loc => {
    // Sidebar card
    const card = document.createElement("div");
    // card.className = "p-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50 transition flex flex-col gap-2";
    card.className = "p-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50 transition transform hover:scale-102 flex flex-col gap-2";

    card.innerHTML = `
      <div class="overflow-hidden rounded">
        <img src="${loc.img}" alt="${loc.title}" 
          class="w-full h-42 object-cover transition-transform duration-300 ease-in-out hover:scale-105" />
      </div>
      <div>
        <h4 class="font-semibold">${loc.title}</h4>
        <p class="text-sm text-gray-600">${loc.desc}</p> 
      </div>
    `;


    card.addEventListener("click", () => {
      map.setView([loc.lat, loc.lng], 14);
    });

    sidebar.appendChild(card);

    // Popup content: image + text
    const popupContent = `
      <div class="flex items-start gap-2">
        <img src="${loc.img}" alt="${loc.title}" class="w-20 h-16 object-cover rounded" />
        <div>
          <h4 class="font-semibold">${loc.title}</h4>
          <p class="text-sm">${loc.desc}</p>
        </div>
      </div>
    `;

    // Custom marker icon
    const customIcon = L.icon({
      iconUrl: loc.img,
      iconSize: [50, 50],
      iconAnchor: [25, 50],
      popupAnchor: [0, -50],
      className: 'rounded-full border border-white shadow-lg'
    });

    const marker = L.marker([loc.lat, loc.lng], { icon: customIcon })
      .bindPopup(popupContent, { minWidth: 220 });
    marker.__location = loc; 
    markerCluster.addLayer(marker);
    allMarkers.push(marker);

    bounds.push([loc.lat, loc.lng]);
  });

  if (bounds.length) {
    map.fitBounds(bounds, { padding: [50, 50] });
  }
}

// Initial render
renderCards(locations);

// Search filter
searchInput.addEventListener("input", e => {
  const keyword = e.target.value.toLowerCase();
  const filtered = locations.filter(loc =>
    loc.title.toLowerCase().includes(keyword) ||
    loc.desc.toLowerCase().includes(keyword)
  );
  renderCards(filtered);
});

const locations = [
  { id: 1, title: "Gangnam Station", lat: 37.4979, lng: 127.0276, desc: "High traffic commercial district", img: "https://via.placeholder.com/50/ff0000/fff?text=G" },
  { id: 2, title: "Gyeongbokgung", lat: 37.5796, lng: 126.9770, desc: "Tourist landmark", img: "https://via.placeholder.com/50/00ff00/fff?text=G" },
  { id: 3, title: "Incheon Airport", lat: 37.4602, lng: 126.4407, desc: "International airport", img: "https://via.placeholder.com/50/0000ff/fff?text=I" }
];

const sidebar = document.getElementById("sidebar");
const searchInput = document.getElementById("searchInput");

// Initialize Leaflet map
const map = L.map("map").setView([37.5665, 126.9780], 10);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// Marker cluster group
const markerCluster = L.markerClusterGroup();
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
    card.className = "p-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50 transition";
    card.innerHTML = `<h4 class="font-semibold">${loc.title}</h4><p class="text-sm text-gray-600">${loc.desc}</p>`;

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

document.addEventListener("DOMContentLoaded", () => {
  const locations = [
    {
      id: 1,
      title: "Gangnam Station",
      lat: 37.4979,
      lng: 127.0276,
      image: "https://via.placeholder.com/350x180",
      desc: "High traffic commercial district"
    },
    {
      id: 2,
      title: "Gyeongbokgung",
      lat: 37.5796,
      lng: 126.9770,
      image: "https://via.placeholder.com/350x180",
      desc: "Tourist landmark"
    },
    {
      id: 3,
      title: "Incheon Airport",
      lat: 37.4602,
      lng: 126.4407,
      image: "https://via.placeholder.com/350x180",
      desc: "International airport"
    }
  ];

  const sidebar = document.getElementById("sidebar");
  const mapFrame = document.getElementById("map-frame");
  const searchInput = document.getElementById("searchInput");

  // Initial map
  setMap(locations[0].lat, locations[0].lng);

  renderCards(locations);

  // 🔍 Search listener
  searchInput.addEventListener("input", e => {
    const keyword = e.target.value.toLowerCase();

    const filtered = locations.filter(loc =>
      loc.title.toLowerCase().includes(keyword) ||
      loc.desc.toLowerCase().includes(keyword)
    );

    renderCards(filtered);
  });

  function renderCards(data) {
    sidebar.innerHTML = "";

    if (data.length === 0) {
      sidebar.innerHTML = `
        <div class="p-4 text-gray-500 text-sm">
          No results found
        </div>
      `;
      return;
    }

    data.forEach(loc => {
      const card = document.createElement("div");
      card.className =
        "p-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50 transition";

      card.innerHTML = `
        <img src="${loc.image}" class="w-full rounded mb-2">
        <h4 class="text-sm font-semibold">${loc.title}</h4>
        <p class="text-xs text-gray-600">${loc.desc}</p>
      `;

      card.addEventListener("click", () => {
        setMap(loc.lat, loc.lng);
      });

      sidebar.appendChild(card);
    });
  }

  function setMap(lat, lng) {
    mapFrame.src = `https://www.google.com/maps?q=${lat},${lng}&z=15&output=embed`;
  }
});

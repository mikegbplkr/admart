const locations = [
      {
        title: "Seoul Station",
        lat: 37.5546,
        lng: 126.9691,
        image: "https://via.placeholder.com/350x180",
        desc: "Major transportation hub"
      },
      {
        title: "Gangnam Station",
        lat: 37.4979,
        lng: 127.0276,
        image: "https://via.placeholder.com/350x180",
        desc: "High traffic commercial area"
      },
      {
        title: "Gyeongbokgung",
        lat: 37.5796,
        lng: 126.9770,
        image: "https://via.placeholder.com/350x180",
        desc: "Historic palace"
      }
    ];

    // Init map
    const map = L.map("map").setView([37.5665, 126.9780], 11);

    // Tiles
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: "&copy; OpenStreetMap contributors"
    }).addTo(map);

    // Cluster
    const markers = L.markerClusterGroup();
    const sidebar = document.getElementById("sidebar");

    locations.forEach(loc => {
      const marker = L.marker([loc.lat, loc.lng])
        .bindPopup(`<strong>${loc.title}</strong><br>${loc.desc}`);

      markers.addLayer(marker);

      // Sidebar card
      const card = document.createElement("div");
      card.className =
        "card p-3 border-b cursor-pointer hover:bg-gray-100 transition";

      card.innerHTML = `
        <img src="${loc.image}" class="rounded mb-2" onerror="this.src='https://placekitten.com/350/180'" />
        <h4 class="text-sm font-semibold">${loc.title}</h4>
        <p class="text-xs text-gray-600">${loc.desc}</p>
      `;

      card.onclick = () => {
        map.setView([loc.lat, loc.lng], 15);
        marker.openPopup();
      };

      sidebar.appendChild(card);
    });

    map.addLayer(markers);
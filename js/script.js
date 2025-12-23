let map;
let markers = [];

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

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 37.5665, lng: 126.9780 },
    zoom: 9,
    mapTypeControl: true,
    streetViewControl: true
  });

  const infoWindow = new google.maps.InfoWindow();
  const sidebar = document.getElementById("sidebar");

  locations.forEach(loc => {
    // Marker
    const marker = new google.maps.Marker({
      position: { lat: loc.lat, lng: loc.lng },
      map,
      title: loc.title
    });

    marker.addListener("click", () => {
      infoWindow.setContent(`
        <strong>${loc.title}</strong><br/>
        ${loc.desc}
      `);
      infoWindow.open(map, marker);
    });

    markers.push(marker);

    // Sidebar Card
    const card = document.createElement("div");
    card.className = "card";
    card.innerHTML = `
      <img src="${loc.image}">
      <h4>${loc.title}</h4>
      <p>${loc.desc}</p>
    `;

    card.onclick = () => {
      map.setCenter(marker.getPosition());
      map.setZoom(14);
      google.maps.event.trigger(marker, "click");
    };

    sidebar.appendChild(card);
  });

  // Cluster
  new markerClusterer.MarkerClusterer({
    map,
    markers
  });
}

window.onload = initMap;

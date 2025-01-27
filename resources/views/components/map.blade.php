<section id="section-map">
    <div id="map"></div>
    <div id="info-tab" class="info-tab">
        <div id="info-content"></div>
    </div>
</section>

<script>
  // Create a map and set its view to the desired coordinates (Estonia's center) and zoom level
  var map = L.map('map', {
    center: [58.5953, 25.0136], // Estonia's approximate center
    zoom: 8, 
    scrollWheelZoom: false, // Disable zoom by default
  });

  setTimeout(() => {
    map.invalidateSize();
  }, 10);

  // Enable zoom only when holding the Ctrl key
  map.on('keydown', function (e) {
    if (e.originalEvent.key === 'Control') {
      map.scrollWheelZoom.enable();
    }
  });

  map.on('keyup', function (e) {
    if (e.originalEvent.key === 'Control') {
      map.scrollWheelZoom.disable();
    }
  });

  // Add grayscale map tiles using CartoDB's Positron tiles (black and white)
  L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '© <a href="https://carto.com/">CARTO</a>',
    subdomains: 'abcd',
    maxZoom: 20
  }).addTo(map);

  // Define a custom icon using the shared image
  var customIcon = L.icon({
    iconUrl: "{{ asset('/img/marker.webp') }}",
    iconSize: [50, 50], 
    iconAnchor: [25, 50], 
  });

  // Define an orange icon for when the marker is clicked
  var clickedIcon = L.icon({
    iconUrl: "{{ asset('/img/marker-active.webp') }}", 
    iconSize: [50, 50], 
    iconAnchor: [25, 50], 
  });

  // Define marker coordinates and info
  var locations = [
    {
      coords: [58.3859, 24.4971], // Pärnu
      title: "Snus Empire Pärnu",
      address: "Hommiku 13, Pärnu, 8001, Pärnu, Pärnumaa",
      hours: "E-P 10:00 - 20:00",
      phone: "+372 5344 0155"
    },
    {
      coords: [58.3639, 25.5951], // Viljandi
      title: "Snus Empire Viljandi",
      address: "Lossi 22, 71003, Viljandi, Viljandimaa",
      hours: "E - P 10:00 - 20:00",
      phone: "+372 5360 0699"
    },
    {
      coords: [58.3776, 26.7290], // Tartu
      title: "Snus Empire Tartu",
      address: "Raatuse 23, 50603 Tartu, Tartumaa",
      hours: "E - R 09:00 - 20:00, L - P 10:00 - 20:00",
      phone: "+372 5917 3971"
    },
    {
      coords: [59.3971, 24.6653], // Mustamäe keskus, Tallinn
      title: "Snus Empire Mustamäe",
      address: "A. H. Tammsaare tee 104a, 12918 Tallinn, Harjumaa",
      hours: "E - P 10:00 - 20:00",
      phone: "+372 5788 0966"
    },
    {
      coords: [59.4370, 24.7453], // Vabaduse Väljak, Tallinn
      title: "Snus Empire Tallinn",
      address: "Pärnu maantee 18, 10141 Tallinn, Harjumaa",
      hours: "E - R 09:00 - 20:00, L - P 10:00 - 20:00",
      phone: "+372 5197 8233"
    },
    {
      coords: [59.4449, 24.7535], // AS Tallinna Sadam, Tallinn
      title: "Snus Empire Nuuskatori",
      address: "Sadama 25/2, 10111 Tallinn, Harjumaa",
      hours: "E - P 10:00 - 19:00",
      phone: "+372 5853 5687"
    },
    {
      coords: [59.4336, 24.8548], // Lasnamäe tervisemaja, Tallinn
      title: "Snus Empire Lasnamäe",
      address: "Linnamäe tee 3, 13912, Tallinn, Harjumaa",
      hours: "E - P 10:00 - 20:00",
      phone: "+372 5385 4348"
    }
  ];

  // Track the currently clicked marker
  var currentClickedMarker = null;

  // Add each marker to the map using the custom icon
  locations.forEach(function(location) {
    var marker = L.marker(location.coords, { icon: customIcon }).addTo(map);

    marker.on('click', function() {
      // If a marker is already clicked, reset it to its original state
      if (currentClickedMarker && currentClickedMarker !== marker) {
        currentClickedMarker.setIcon(customIcon); // Reset previous marker
      }

      // Toggle the clicked state for the current marker
      if (marker === currentClickedMarker) {
        // Unclick the marker (reset it)
        marker.setIcon(customIcon);
        document.getElementById('info-tab').style.display = 'none'; // Hide the info tab
        currentClickedMarker = null; // Reset the clicked marker
      } else {
        // Click the marker (change its icon to orange)
        marker.setIcon(clickedIcon);
        var content = `
          <h3>${location.title}</h3>
          <p><strong>Aadress:</strong> ${location.address}</p>
          <p><strong>Avatud:</strong> ${location.hours}</p>
          <p><strong>Telefon:</strong> ${location.phone}</p>
        `;
        document.getElementById('info-content').innerHTML = content;
        document.getElementById('info-tab').style.display = 'block'; // Show the info tab
        currentClickedMarker = marker; // Set the current marker as clicked
      }
    });
  });
</script>

<style>
  #map {
    padding: 100px 0;
    text-align: center;
    max-width: 1800px;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
    height: 500px;
    border-radius: 0.8rem;
    background-color: #f4f4f4;
    position: relative; 
  }

  /* Styling for the info tab */
  .info-tab {
    display: none;
    position: absolute;
    top: 820px;
    left: 85px;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    width: 250px;
    height: auto;
    max-height: 300px;
    overflow-y: auto;
    font-size: 14px;
    margin: 0;
  }
  
  .info-tab h3 {
    margin-top: 0;
  }
</style>

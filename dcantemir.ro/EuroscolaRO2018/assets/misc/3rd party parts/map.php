<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
<div id="mapid" class="shadow">
    <script>
        let mymap = L.map('mapid', {
            zoomControl: false,
            //attributionControl: false
        }).setView([46.26021, 26.77684], 13);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: '',
            maxZoom: 17,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoiZXRoYW53ZXN0aWNrIiwiYSI6ImNqbWM5dnVzMzFyNWwzcGxrcWM4dDJqYXMifQ.PW-7Jf_2icBH59RJ1js7UQ'
        }).addTo(mymap);
        L.marker([46.25321, 26.77684]).addTo(mymap)
            .bindPopup('<img class="float-right" src="../assets/img/posts/cantemir.png" style="width:2rem; height: auto;">  <?= $cantemir ?>')
            .openPopup();
    </script>
</div>

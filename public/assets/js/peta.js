var long;
var lat;
var id;

$.ajax({
    url: 'api/GpsData',
    success: function (data) {
        long = data[0].longitude;
        lat = data[0].latitude;
        id = data[0].id_gokart;
        // alert(long + " ; " + lat);
        renderMap();
    }
});

function renderMap() {
    const tileUrl = 'https://cartodb-basemaps-{s}.global.ssl.fastly.net/rastertiles/voyager/{z}/{x}/{y}.png';
    const tileAttribute = '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, &copy; <a href="https://carto.com/attribution">CARTO</a>';
    new Vue({
        el: '#app',
        data() {
            return {
                map: null,
                tileLayer: null,
                marker: null
            }
        },
        mounted() {
            this.initMap();
            this.initLayers();
        },
        methods: {
            initMap: function () {
                this.map = L.map('map').setView([lat, long], 18);

                this.tileLayer = L.tileLayer(tileUrl, {
                    maxZoom: 25,
                    attribution: tileAttribute
                }).addTo(this.map);
            },
            initLayers: function () {
                this.marker = L.marker([lat, long]).addTo(this.map)
                    .bindPopup('Gokart ' + id)
                    .openPopup();
            }
        }
    })
}

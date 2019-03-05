var defaultIcon = L.icon({
    iconUrl:       '/images/vendor/leaflet/dist/marker-icon.png',
    iconRetinaUrl: '/images/vendor/leaflet/dist/marker-icon-2x.png',
    shadowUrl:     '/images/vendor/leaflet/dist/marker-shadow.png',
    iconSize:    [25, 41],
    iconAnchor:  [12, 41],
    popupAnchor: [1, -34],
    tooltipAnchor: [16, -28],
    shadowSize:  [41, 41]
});

//Aqui creamos el mapa con unas coordenadas para que la vista del mapa sea esa y lo agregamos al div map
let map = L.map('map').setView([37.405389, -5.936159], 15);


//Aquí cogemos el tipo de mapa que queremos, este por ejemplo tiene nombre de localizaciones y el de mas abajo no  
  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18
}).addTo(map);


//Creamos un puntero señalando por ejemplo el Zona este
  L.marker([37.405389, -5.936159],{icon: defaultIcon},{draggable: false}).addTo(map).bindPopup('CC Zona Este')

//Creamos un circulo para señalar la posicion del Palacio de Congresos
// var circle = L.circle([37.404524, -5.932458], {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 100
// }).addTo(map);


//Añadimos al circulo un popup
// circle.bindPopup("Palacio de Congresos");


//Creamos un poligono para señalar la posicion de una fábrica
// var polygon = L.polygon([
//     [37.408654, -5.934005],
//     [37.411479, -5.932297],
//     [37.410120, -5.928488],
//     [37.407310, -5.930030]
// ]).addTo(map);


//Añadimos al poligono un popup
// polygon.bindPopup("Antigua Fábrica de Algodón");
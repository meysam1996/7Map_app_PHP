const defaultLocation = [35.722,51.328];
const defaultZoom = 15;

var mymap = L.map('map').setView(defaultLocation, defaultZoom);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: '7Learn.ac <a href="https://www.7learn.ac/">7Map Project</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
    }).addTo(mymap);
  
document.getElementById('map').style.setProperty('height', window.innerHeight+ 'px');

// set view in map
//mymap.setView([38.077,46.294],defaultZoom);

// show and pin marker
// var marker = L.marker(defaultLocation).addTo(mymap);
// marker.bindPopup("7Learn office 1!").openPopup();

// get view bound Information
// var northLine = mymap.getBounds().getNorth(); // Khat Shomali
// var westLine = mymap.getBounds().getWest(); // Khat Gharbi
// var southLine = mymap.getBounds().getSouth(); // Khat Jonobi
// var eastLine = mymap.getBounds().getEast(); // Khat Sharghi

// Use map Events
// mymap.on('dblclick',function(event){
// 	L.marker([event.latlng.lat,event.latlng.lng]).addTo(mymap);
// });

// setTimeout(function(){
// 	mymap.setView([northLine,westLine],defaultZoom);
// },4000);

// var current_posotion, current_accuracy;
// mymap.on("locationfound", function(e){
// 	if (current_posotion) {
// 		mymap.removeLayer(current_posotion);
// 		mymap.removeLayer(current_accuracy);
// 	}
// 	var radius = e.accuracy / 2;
// 	current_posotion = L.marker(e.latlng).addTo(mymap).bindPopup("دقت تقریبی : " + radius + " متر").openPopup();
// 	current_accuracy = L.circle(e.latlng, radius).addTo(mymap);
// });

// mymap.on("locationerror", function(e){
// 	alert(e.message)
// });

// function locate(){
// 	mymap.locate({setView: true, maxZoom: defaultZoom});
// }

// mymap.on("dblclick", function (){
// 	locate();
// });


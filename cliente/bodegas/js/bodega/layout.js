var mymap =null;
window.onload = function() {
	tamPage();
	fn_tamMap();
	fn_listProvee();
};


function tamPage(){
	let h=$(window).height();
	console.log(h);
	let y=(h*1.003205128)-89.10;
	$("#mapid").height(y);
}

function fn_tamMap(){
	mymap = L.map('mapid').setView([32.054389,-116.617553], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);	

}

/*****************************PROVEEDOR********************************************************************************************************************************************************/    
	var vecMark=[];
	function fn_proveedores(vec){
		//console.log(vec);
		let html=``;
		vecMark=[];
		$("#list_prove").empty();
		for(let d=0;d<vec.length;d++){
			let pve=vec[d];

			html=html+`<button type="button" class="list-group-item list-group-item-action" onclick="fn_popupMarkerProveedor(`+d+`)">
				<img src="`+((pve.logo=='')?'./img/image7.png':pve.logo)+`" alt="" width="50" height="40">
				<span>`+pve.nom+`</span>
				<p style="margin: 0px;font-size: 10px;">"`+pve.descr+`"</p>
	           </button>`;	

	        vecMark[d]=L.marker([pve.latitud,pve.longitud]).addTo(mymap).bindPopup("<b>"+pve.nom+"</b>").openPopup();

	        vecMark[d].on('click', fn_clickMarkerProveedor);
		}

		$("#list_prove").append(html);	}


	function fn_clickMarkerProveedor(){
		console.log("click en el marker");
	}

	function fn_popupMarkerProveedor(id){
		vecMark[id].openPopup();
	}

/****************************\PROVEEDOR********************************************************************************************************************************************************/    


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
		attribution: 'Map data &copy; <a href="	https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
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
		console.log(vec);
		let html=``;
		vecMark=[];
		$("#list_prove").empty();
		for(let d=0;d<vec.length;d++){
			let pve=vec[d];

			html=html+`<button type="button" class="list-group-item list-group-item-action" onclick="fn_popupMarkerProveedor(`+d+`)">
				<img src="`+((pve.logo=='')?'../../img/prove/logoproveedor1.png':pve.logo)+`" alt="" width="60" height="50" id
				="imgprov">
				<span>`+pve.nom+`</span><a><img src="img/travel1.png"  width="40" height="30" ALIGN=RIGHT></a>
				<p style="margin: 0px;font-size: 10px;" id="lemaprov">"`+pve.descr+`"</p>
				<center></center>
	           </button>`;	

	         let vinos=pve.tops;
	        //console.log("vinos",vinos);
	           	
	        vecMark[d]=L.marker([pve.latitud,pve.longitud]).addTo(mymap).bindPopup(
	        	`<br><div class="row" id="rowPrincipal">
	        		<h5 class="modal-title" id="exampleModalLabel" style="color: white;  font-size: 20px;   font-family: 'Mr Dafoe', cursive; margin-left:0px; ">
	        			<img src="`+pve.logo+`" width="20" height="20">`+pve.nom+`
	        	 	</h5>
	        	</div> 
	        	<br>	
		         <div class="row row-cols-1 row-cols-md-3">
				   <div class="col mb-4">`+((vinos.length>0)?`
				    <div class="card h-100 " >
				      <img src="`+vinos[0].img+`" class="card-img-top " alt="..." align="center" >
				      <p class="titleP">`+vinos[0].nom+`</p>
				    </div>
				  </div>
				  <div class="col mb-4">
				    <div class="card h-100 " >
				      <img src="`+vinos[1].img+`" class="card-img-top " alt="..." align="center">
				      <p class="titleP">`+vinos[1].nom+`</p>
				    </div>
				  </div>
				  <div class="col mb-4">
				    <div class="card h-100" >
				      <img src="`+vinos[2].img+`" class="card-img-top " alt="..." align="center">
				      <p class="titleP">`+vinos[2].nom+`</p>
				    </div>`:'')+`
				  </div>
				</div>`	
	        	).openPopup();

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


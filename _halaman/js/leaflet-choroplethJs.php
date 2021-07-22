<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

 <script src="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
 <script src="assets/js/leaflet.ajax.js"></script>

   <script type="text/javascript">

   <?php
   $kecamatan = [
				   "Cakung"=>["#000000",100],
				   "Cempaka Putih"=>["#000000",300],
				   "Cengkareng"=>["#000000",1000],
				   "Cilandak"=>["#000000",874],
				   "Cilincing"=>["#000000",912],
				   "Cipayung"=>["#000000",245],
				   "Ciracas"=>["#000000",124],
				   "Duren Sawit"=>["#000000",923],
				   "Gambir"=>["#000000",923],
				   "Grogol Petamburan"=>["#000000",123],
				   "Jagakarsa"=>["#000000",756],
				   "Jatinegara"=>["#000000",502],
				   "Johar Baru"=>["#000000",230],
				   "Kalideres"=>["#000000",402],
				   "Kebayoran Baru"=>["#000000",829],
				   "Kebayoran Lama"=>["#000000",124],
				   "Kebon Jeruk"=>["#000000",192],
				   "Kelapa Gading"=>["#000000",923],
				   "Kemayoran"=>["#000000",753],
				   "Kembangan"=>["#000000",923],
				   "KEP. SERIBU SELATAN"=>["#000000",400],
				   "KEP. SERIBU UTARA"=>["#000000",200],
				   "Koja"=>["#000000",213],
				   "Kramat Jati"=>["#000000",932],
				   "Makasar"=>["#000000",294],
				   "Mampang Prapatan"=>["#000000",23],
				   "Matraman"=>["#000000",49],
				   "Menteng"=>["#000000",94],
				   "Pademangan"=>["#000000",20],
				   "Palmerah"=>["#000000",120],
				   "Pancoran"=>["#000000",302],
				   "Pasar Minggu"=>["#000000",102],
				   "Pasar Rebo"=>["#000000",230],
				   "Penjaringan"=>["#000000",120],
				   "Pesanggrahan"=>["#000000",40],
				   "Pulo Gadung"=>["#000000",11],
				   "Sawah Besar"=>["#000000",5],
				   "Senen"=>["#000000",102],
				   "Setia Budi"=>["#000000",320],
				   "Taman Sari"=>["#000000",11],
				   "Tambora"=>["#000000",15],
				   "Tanah Abang"=>["#000000",230],
				   "Tanjung Priok"=>["#000000",500],
				   "Tebet"=>["#000000",1230],
   				];
	?>
	<?php 
	foreach ($kecamatan as $key => $value) {
		$data[$key]=$value[1];
	}
	?>

	var AKUMULASI = <?=json_encode($data)?>; 

   	var map = L.map('mapid', { zoomControl: false }).setView([-6.2283628, 106.8384331], 11);

   	var LayerKita=L.tileLayer('https://api.mapbox.com/styles/v1/ahmadrayz007/ckgm68sw40c0t19ku96sruwx5/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoiYWhtYWRyYXl6MDA3IiwiYSI6ImNrZ20za3VpajAwZzMzMHFwdjdsbHMwOWEifQ.C0aD4wgHpty05joPNsiuKA', {
    attribution: '© <a href="https://www.mapbox.com/about/maps/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> <strong><a href="https://www.mapbox.com/map-feedback/" target="_blank">Improve this map</a></strong>',
    maxZoom: 18,
});
	map.addLayer(LayerKita);

	// control that shows state info on hover
	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
		this._div.innerHTML = '<h4>Perkembangan Kasus Aktif</h4>' +  (props ?
			'<b>' + props.Kecamatan + '</b><br />' + AKUMULASI[props.Kecamatan] + ' people / mi<sup>2</sup>'
			: 'Sentuh untuk melihat');
	};

	info.addTo(map);
	// get color depending on population density value
	function getColor(d) {
		return d > 1000 ? '#800026' :
				d > 500  ? '#BD0026' :
				d > 200  ? '#E31A1C' :
				d > 100  ? '#FC4E2A' :
				d > 50   ? '#FD8D3C' :
				d > 20   ? '#FEB24C' :
				d > 10   ? '#FED976' :
							'#FFEDA0';

	}
	
	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(AKUMULASI[feature.properties.Kecamatan])
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}

	function resetHighlight(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3'
		});

		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}
	
	var legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {

		var div = L.DomUtil.create('div', 'info legend'),
			grades = [0, 10, 20, 50, 100, 200, 500, 1000],
			labels = [],
			from, to;

		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(
				'<i style="background:' + getColor(from + 1) + '"></i> ' +
				from + (to ? '&ndash;' + to : '+'));
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	legend.addTo(map);

	

	function popUp(f,l){
	    var out = [];
	    if (f.properties){
	        // for(key in f.properties){
	        // 	console.log(key);

	        // }
			out.push("Kecamatan: "+f.properties["Kecamatan"]);
	        l.bindPopup(out.join("<br />"));
	    }
	}

	// legend

	function iconByName(name) {
		return '<i class="icon" style="background-color:'+name+';border-radius:50%"></i>';
	}

	function featureToMarker(feature, latlng) {
		return L.marker(latlng, {
			icon: L.divIcon({
				className: 'marker-'+feature.properties.amenity,
				html: iconByName(feature.properties.amenity),
				iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
				iconSize: [25, 41],
				iconAnchor: [12, 41],
				popupAnchor: [1, -34],
				shadowSize: [41, 41]
			})
		});
	}

	var baseLayers = [

	];

	<?php
		$getKecamatan=$db->ObjectBuilder()->get('m_kecamatan');
		foreach ($getKecamatan as $row) {
			?>
			<?php
			$arrayKec[]='{
			name: "'.$row->nm_kecamatan.'",
			icon: iconByName("'.$row->warna_kecamatan.'"),
			layer: new L.GeoJSON.AJAX(["assets/unggah/geojson/'.$row->geojson_kecamatan.'"],{
				style: style,
				onEachFeature:onEachFeature
			}).addTo(map)
			}';
		}
	?>


	var overLayers = [{
		collapsed: true,
		group: "Layer Kecamatan",
		layers: [
			<?=implode(',', $arrayKec);?>
		]
	}
	];

	var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers,{
		collapsibleGroups: true,
		position:"topleft"

	});

	map.addControl(panelLayers);

	//marker
    var myIcon = L.icon({
	    iconUrl: '<?=assets('icons/marker.png')?>',
	    iconSize: [30, 36],
	});
	<?php
	$db->join('m_kecamatan b','a.id_kecamatan=b.id_kecamatan','LEFT');
	$getdata=$db->ObjectBuilder()->get('t_hotspot a');
	foreach ($getdata as $row) {
		?>
		L.marker([<?=$row->lat?>,<?=$row->long?>],{icon: myIcon}).addTo(map)
				.bindPopup("Lokasi : <?=$row->lokasi?>,Kec. <?=$row->nm_kecamatan?><br>Keterangan : <?=$row->keterangan?><br>Tanggal : <?=$row->tanggal?>");
		<?php
	}
	?>


   </script>

<!doctype html>

<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BUS MAP | Le ultimate guia urbano de los pampas</title>
		<link rel="stylesheet" type="text/css" href="http://douglasmedina.com/assets/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="index.css">
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>	
		<script type="text/javascript"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	</head>
	<body>
		<img class="logo" src="imgs/rm-r-180.png">
		<div id="googleMap"></div>
		<div class="rotas">
			<img class="logo-icon" src="">
			<ul>
				<li><input type="checkbox" class="rota" onclick="M4(this)">Metro4 - ROTA</input></li>
				<li><input type="checkbox" onclick="M3(this)">Metro3 - ROTA</input></li>
				<li><input type="checkbox" onclick="L4(this)">Linha4 - ROTA</input></li>
			</ul>
		</div>
		<script>
			function initialize() {

				//estilos do mapa
				var styles = [
					{
						featureType: 'water',
						elementType: 'all',
						stylers: [
							{ hue: '#00ccff' },
							{ saturation: 100 },
							{ lightness: -34 },
							{ visibility: 'simplified' }
						]
					},{
						featureType: 'landscape',
						elementType: 'all',
						stylers: [
							{ hue: '#222222' },
							{ saturation: -100 },
							{ lightness: 39 },
							{ visibility: 'simplified' }
						]
					},{
						featureType: 'road',
						elementType: 'geometry',
						stylers: [
							{ hue: '#222222' },
							{ saturation: -100 },
							{ lightness: 100 },
							{ visibility: 'on' }
						]
					},{
						featureType: 'road.highway',
						elementType: 'geometry',
						stylers: [
							{ hue: '#ffff00' },
							{ saturation: 100 },
							{ lightness: -22 },
							{ visibility: 'simplified' }
						]
					},{
						featureType: 'poi',
						elementType: 'all',
						stylers: [
							{ hue: '#000000' },
							{ saturation: -100 },
							{ lightness: -100 },
							{ visibility: 'off' }
						]
					},{
						featureType: 'transit',
						elementType: 'labels',
						stylers: [
							{ hue: '#999999' },
							{ saturation: 0 },
							{ lightness: -100 },
							{ visibility: 'off' }
						]
					},{
						featureType: 'transit',
						elementType: 'geometry',
						stylers: [
							{ hue: '#999999' },
							{ saturation: 0 },
							{ lightness: -20 },
							{ visibility: 'on' }
						]
					}
					];
				//definições gerais do mapa
				var mapOptions = {
					zoom: 15,
					center: new google.maps.LatLng(-29.849559,-51.17),
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					panControl: false,//dessabilitado
					zoomControl: true,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.DEFAULT,
						position: google.maps.ControlPosition.LEFT_CENTER
					},
					mapTypeControl: false,//desabilitado
					scaleControl: false,//desabilitado
					streetViewControl: true,
					};
				//setas de direção
				var symbol = {
					path: 'm 0,0 -1,0 1,-1 1,1 z',
					strokeColor: '#00F',
					fillColor: '#00F',
					fillOpacity: 0.5,
					strokeWeight: 0.75,
					};
				//ROTAS
				var Metro4 = [
					new google.maps.LatLng(-29.8519892, -51.17920574),//Estacao
					new google.maps.LatLng(-29.85156348, -51.17913734), 
					new google.maps.LatLng(-29.85183915, -51.17819722),
					new google.maps.LatLng(-29.85279955, -51.1783424), 
					new google.maps.LatLng(-29.85257562, -51.1774025),//Tumelero
					new google.maps.LatLng(-29.8531578, -51.17432579),//Nacional
					new google.maps.LatLng(-29.84739248, -51.1718986),//Posto de Saude

					new google.maps.LatLng(-29.84646191, -51.17459154), //Posto Claret
					new google.maps.LatLng(-29.84451526, -51.17363513), //Pedro Lerbach
					new google.maps.LatLng(-29.84681381, -51.16698056), //Pelotas
					new google.maps.LatLng(-29.84270523, -51.1651513), //Salgado Filho
					new google.maps.LatLng(-29.84278899, -51.16401404),
					new google.maps.LatLng(-29.84277037, -51.16381556),//inicio da curva
					new google.maps.LatLng(-29.84253772, -51.16283923),
					new google.maps.LatLng(-29.84236556, -51.16233498),
					new google.maps.LatLng(-29.84221666, -51.16167516),
					new google.maps.LatLng(-29.84230972, -51.1613211), //fim da curva
					new google.maps.LatLng(-29.84321707, -51.15943819),
					new google.maps.LatLng(-29.84338923, -51.15917534),
					new google.maps.LatLng(-29.84384523, -51.15878373),
					new google.maps.LatLng(-29.84398482, -51.1586228),
					new google.maps.LatLng(-29.84408718, -51.15844041),
					new google.maps.LatLng(-29.84425469, -51.15800053),
					new google.maps.LatLng(-29.84430587, -51.15776986),
					new google.maps.LatLng(-29.84435706, -51.15740508),
					new google.maps.LatLng(-29.84430587, -51.15648776),
					new google.maps.LatLng(-29.84421281, -51.15271121), //sinaleira - Novo Hamburgo
					new google.maps.LatLng(-29.84492937, -51.1526522),
					new google.maps.LatLng(-29.84646949, -51.15260661),
					new google.maps.LatLng(-29.84975438, -51.15272462),// Parada 11
					new google.maps.LatLng(-29.84890758, -51.15662992),
					new google.maps.LatLng(-29.84931702, -51.15901172),
					new google.maps.LatLng(-29.84903786, -51.16280973),
					new google.maps.LatLng(-29.84910299, -51.16522372),//Xis da 15
					new google.maps.LatLng(-29.84797702, -51.16377532),//Pedro Lerbach
					new google.maps.LatLng(-29.84448734, -51.17367804),
					new google.maps.LatLng(-29.85257562, -51.1774025),//Tumelero
					new google.maps.LatLng(-29.85300194, -51.17938578), 
					new google.maps.LatLng(-29.8519892, -51.17920574),//Estacao
					];
				var Metro3 = [
					new google.maps.LatLng(-29.8519892, -51.17920574),//Estacao
					new google.maps.LatLng(-29.85156348, -51.17913734), 
					new google.maps.LatLng(-29.85183915, -51.17819722),
					new google.maps.LatLng(-29.85279955, -51.1783424), 
					new google.maps.LatLng(-29.85257562, -51.1774025),//Tumelero
					new google.maps.LatLng(-29.8531578, -51.17432579),//Nacional
					new google.maps.LatLng(-29.84739248, -51.1718986),//Posto de Saude

					new google.maps.LatLng(-29.84870053, -51.16818622),	//Fit Flex
					new google.maps.LatLng(-29.84900296, -51.16733328),	//Ary Leite	- Curva
					new google.maps.LatLng(-29.84907624, -51.16699666),
					new google.maps.LatLng(-29.84911579, -51.16675995),
					new google.maps.LatLng(-29.84914661, -51.16647363),
					new google.maps.LatLng(-29.84910299, -51.16522372),//Xis da 15
					new google.maps.LatLng(-29.84903786, -51.16280973),
					new google.maps.LatLng(-29.84931702, -51.15901172),
					new google.maps.LatLng(-29.84890758, -51.15662992),
					new google.maps.LatLng(-29.84975438, -51.15272462),// Parada 11
					new google.maps.LatLng(-29.85011264, -51.1511448),
					new google.maps.LatLng(-29.85011497, -51.15079612),// "convento de padres" - CURVA
					new google.maps.LatLng(-29.85010799, -51.15068614),
					new google.maps.LatLng(-29.85005913, -51.15036964),
					new google.maps.LatLng(-29.84997306, -51.14986002),//João Neves da Fontoura
					new google.maps.LatLng(-29.84996841, -51.14975542),//JNF
					new google.maps.LatLng(-29.84986139, -51.14907414),
					new google.maps.LatLng(-29.8498358, -51.14886492),
					new google.maps.LatLng(-29.84972879, -51.1483714),
					new google.maps.LatLng(-29.84860515, -51.14612103),
					new google.maps.LatLng(-29.84852838, -51.14590243),//Luis Pasteur
					new google.maps.LatLng(-29.84851907, -51.14357427), //Rua da paz
					];
				var Linha4 = [
					new google.maps.LatLng(-29.8519892, -51.17920574),//Estacao
					new google.maps.LatLng(-29.85156348, -51.17913734), 
					new google.maps.LatLng(-29.85183915, -51.17819722),
					new google.maps.LatLng(-29.85279955, -51.1783424), 
					new google.maps.LatLng(-29.85257562, -51.1774025),//Tumelero
					new google.maps.LatLng(-29.8531578, -51.17432579),//Nacional
					new google.maps.LatLng(-29.84739248, -51.1718986),//Posto de Saude

					new google.maps.LatLng(-29.84870053, -51.16818622),	//Fit Flex
					new google.maps.LatLng(-29.84900296, -51.16733328),	//Ary Leite	- Curva
					new google.maps.LatLng(-29.84907624, -51.16699666),
					new google.maps.LatLng(-29.84911579, -51.16675995),
					new google.maps.LatLng(-29.84914661, -51.16647363),
					new google.maps.LatLng(-29.84910299, -51.16522372),//Xis da 15
					new google.maps.LatLng(-29.84903786, -51.16280973),
					new google.maps.LatLng(-29.84931702, -51.15901172),
					new google.maps.LatLng(-29.84890758, -51.15662992),
					new google.maps.LatLng(-29.84975438, -51.15272462),// Parada 11
					new google.maps.LatLng(-29.85011264, -51.1511448),
					new google.maps.LatLng(-29.85011497, -51.15079612),// "convento de padres" - CURVA
					new google.maps.LatLng(-29.85010799, -51.15068614),
					new google.maps.LatLng(-29.85005913, -51.15036964),
					new google.maps.LatLng(-29.84997306, -51.14986002),//João Neves da Fontoura
					new google.maps.LatLng(-29.84996841, -51.14975542),//JNF
					new google.maps.LatLng(-29.84986139, -51.14907414),
					new google.maps.LatLng(-29.8498358, -51.14886492),
					new google.maps.LatLng(-29.84972879, -51.1483714),
					new google.maps.LatLng(-29.84860515, -51.14612103),
					new google.maps.LatLng(-29.84852838, -51.14590243),//Luis Pasteur
					new google.maps.LatLng(-29.84851907, -51.14357427), //Rua da paz

					new google.maps.LatLng(-29.84852256, -51.14325307),//Dom Pedrito
					new google.maps.LatLng(-29.84853652, -51.1430975),
					new google.maps.LatLng(-29.84864586, -51.14265159),
					new google.maps.LatLng(-29.84916639, -51.14105098), //Cristo Rei
					new google.maps.LatLng(-29.84945602, -51.14004247), //Rio Madeira
					];
				//Script do mapa
				map = new google.maps.Map(document.getElementById('googleMap'),mapOptions);
				map.setOptions({styles: styles});

				//Polylines
				metro4 = new google.maps.Polyline({
					path: Metro4,
					icons: [
						{icon: symbol, offset: '0%'},
						{icon: symbol, offset: '5%'},
						{icon: symbol, offset: '10%'},
						{icon: symbol, offset: '15%'},
						{icon: symbol, offset: '20%'},
						{icon: symbol, offset: '25%'},
						{icon: symbol, offset: '30%'},
						{icon: symbol, offset: '35%'},
						{icon: symbol, offset: '40%'},
						{icon: symbol, offset: '45%'},
						{icon: symbol, offset: '50%'},
						{icon: symbol, offset: '55%'},
						{icon: symbol, offset: '60%'},
						{icon: symbol, offset: '65%'},
						{icon: symbol, offset: '70%'},
						{icon: symbol, offset: '75%'},
						{icon: symbol, offset: '80%'},
						{icon: symbol, offset: '85%'},
						{icon: symbol, offset: '90%'},
						{icon: symbol, offset: '95%'},
						{icon: symbol, offset: '100%'},
				    ],
					geodesic: false,
					strokeColor: '#0cf',
					strokeOpacity: .5,
					strokeWeight: 5
					});
				metro3 = new google.maps.Polyline({
					path: Metro3,
					icons: [
						{icon: symbol, offset: '0%'},
						{icon: symbol, offset: '5%'},
						{icon: symbol, offset: '10%'},
						{icon: symbol, offset: '15%'},
						{icon: symbol, offset: '20%'},
						{icon: symbol, offset: '25%'},
						{icon: symbol, offset: '30%'},
						{icon: symbol, offset: '35%'},
						{icon: symbol, offset: '40%'},
						{icon: symbol, offset: '45%'},
						{icon: symbol, offset: '50%'},
						{icon: symbol, offset: '55%'},
						{icon: symbol, offset: '60%'},
						{icon: symbol, offset: '65%'},
						{icon: symbol, offset: '70%'},
						{icon: symbol, offset: '75%'},
						{icon: symbol, offset: '80%'},
						{icon: symbol, offset: '85%'},
						{icon: symbol, offset: '90%'},
						{icon: symbol, offset: '95%'},
						{icon: symbol, offset: '100%'},
				    ],
					geodesic: false,
					strokeColor: '#00f',
					strokeOpacity: .5,
					strokeWeight: 5
					});
				linha4 = new google.maps.Polyline({
					path: Linha4,
					icons: [
						{icon: symbol, offset: '0%'},
						{icon: symbol, offset: '5%'},
						{icon: symbol, offset: '10%'},
						{icon: symbol, offset: '15%'},
						{icon: symbol, offset: '20%'},
						{icon: symbol, offset: '25%'},
						{icon: symbol, offset: '30%'},
						{icon: symbol, offset: '35%'},
						{icon: symbol, offset: '40%'},
						{icon: symbol, offset: '45%'},
						{icon: symbol, offset: '50%'},
						{icon: symbol, offset: '55%'},
						{icon: symbol, offset: '60%'},
						{icon: symbol, offset: '65%'},
						{icon: symbol, offset: '70%'},
						{icon: symbol, offset: '75%'},
						{icon: symbol, offset: '80%'},
						{icon: symbol, offset: '85%'},
						{icon: symbol, offset: '90%'},
						{icon: symbol, offset: '95%'},
						{icon: symbol, offset: '100%'},
				    ],
					geodesic: false,
					strokeColor: '#ff0',
					strokeOpacity: .5,
					strokeWeight: 5
					});

				//visibilidade do mapa na função
				metro4.setMap(null);
				metro3.setMap(null);
				linha4.setMap(null);

			}
			//TOGGLES
			function M4 (obj)

				{
					if(obj.checked)
						metro4.setMap(map);
					else
						metro4.setMap(null);
				}
			function M3 (obj)

				{
					if(obj.checked)
						metro3.setMap(map);
					else
						metro3.setMap(null);
				}
			function L4 (obj)

				{
					if(obj.checked)
						linha4.setMap(map);
					else
						linha4.setMap(null);
				}

			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
	</body>
</html>
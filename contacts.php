<html>
<head>
	<title>Berserk</title>
	<link type="text/css" href="site.css" rel="stylesheet">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy7cTiN3i7AohHvFQ2b7legGsTReWF8NA"></script>       
	<script type="text/javascript">
		// When the window has finished loading create our google map below
		google.maps.event.addDomListener(window, 'load', init);

		function init() {
			// Basic options for a simple Google Map
			// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
			var mapOptions = {
				// How zoomed in you want the map to start at (always required)
				zoom: 17,
				// The latitude and longitude to center the map (always required)
				center: new google.maps.LatLng(48.297299, 25.927409), // New York

				// How you would like to style the map. 
				// This is where you would paste any style found on Snazzy Maps.
				styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ffaa00"},{"saturation":"-33"},{"lightness":"10"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#9c5e18"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"saturation":"-23"},{"gamma":"2.01"},{"color":"#f2f6f6"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"saturation":"-14"}]}]
			};

			// Get the HTML DOM element that will contain your map 
			// We are using a div with id="map" seen below in the <body>
			var mapElement = document.getElementById('map');

			// Create the Google Map using our element and options defined above
			var map = new google.maps.Map(mapElement, mapOptions);

			// Let's also add a marker while we're at it
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(48.297299, 25.927409),
				map: map,
				title: 'Тренування'
			});
		}
	</script>    
</head>
<body>
	<!-- contacts page -->
	<div class="contacts-frame contacts-border background-cover">
		<div class="header">		
				<div class="header-links header-links-l">
					<div class="header-links-left hover-underscore "><a href="pronas.php" >Про нас</a></div>
					<div class="header-links-left hover-underscore "><a href="#" >Події</a></div>
					<div class="header-links-left hover-underscore "><a href="#" >Заходи</a></div>
					<div class="header-links-left hover-underscore "><a href="#" >Тренування</a></div>
					<div class="header-links-left hover-underscore"><a href="contacts.php" >Контакти</a></div>
				</div>			
				<div class="header-links header-links-r">
				<div class="header-links-right">
						<div class="language hover-underscore left" ><a href="#" class="active-link" >ua</a></div>
						<div class="language hover-underscore left" ><a href="#" >en</a></div>
					</div>
					<div class="header-links-right"><a href="tel:+38 (050) 131 83 03"class="right">+38 (050) 131 83 03</a></div>
					<div class="header-links-right"><a href="tel:+38 (050) 664 25 94" class="right">+38 (050) 664 25 94</a></div>
					
				</div>
				<center>
					<div class="header-logo">
						<img src="img/logo.svg" >
					</div>
				</center>
		</div>
		<center>
		<div class="contact-head solo-page">Контакти</div>		
		<img class="decor-img" src="img/decor-line.png"/>
		<div class="contact-text">З’яжіться з нами</div>
		<form class="contact-form">
			<input type="text" class="form-input small left" placeholder="ВАШЕ ІМ'Я"/>
			<input type="text" class="form-input small right" placeholder="EMAIL"/><br/>
			<textarea  class="form-input big" placeholder="ПОВІДОМЛЕННЯ..."></textarea>
			<div class="socicons contacts-icons"><a href="https://vk.com/club17573259" class="social vk"></a><a href="#" class="social in"></a><a href="https://www.facebook.com/groups/807763889397170/" class="social fb"></a></div>			
			<a onclick="form.submit();" class="btn"><span class="icon icon-lines"></span>Відправити</a>				
			<div class="contacts-afterform">		
				<div class="left">
					<b>+38 (050) 664 25 94</b> <span>Андрій</span><br />
					<b>+38 (050) 131 83 03</b> <span>Максим</span>	
				</div>	
				<div class="right">
				<b>Україна, м. Чернівці<br/>
					вул. Щепкіна, 2</b>
				</div>
			</div>
		</form>	
		
		</center>
		
	</div>
	
	<div id="map"></div>
	<div class="contacts-subfooter">
		<div class="subfooter-content">
			<div class="left subfooter-content3">
				<div>КОНТАКТИ</div><br />
				<div>Україна, м. Чернівці<br />
				вул. Щепкіна, 2</div>
				Пошта: <b>berserk@gmail.com</b>	
			</div>		
			<div class="left subfooter-content1">
				<div>Телефонуте:</div>	
				<span><b>+38 (050) 664 25 94</b> - Андрій<br />
				<b>+38 (050) 131 83 03</b> - Максим	</span>	
			</div>	
			<div class="right subfooter-content2">
				<div class="hover-underscore"><a href="#">Тренування</a></div>
				<div class="hover-underscore"><a href="#">контакти</a></div>
			</div>
			<div class="right ">
				НАВІГАЦІЯ<br /> <br />
				<div class="hover-underscore"><a href="#">про нас</a></div>
				<div class="hover-underscore"><a href="#">події</a></div>
				<div class="hover-underscore"><a href="#">заходи</a></div>
			</div>	
		</div>	
	</div>
	<footer class="site-footer">
		<span class="footertext left">© 2018 berserk. All rights reserved</span>
		<div class="socicons footer-icons"><a href="https://vk.com/club17573259" class="social vk white"></a><a href="#" class="social in white"></a><a href="https://www.facebook.com/groups/807763889397170/" class="social fb white"></a></div>
		<span class="footertext right footer-contacts">Made by T&T</span>
	</footer>
</body>
</html>
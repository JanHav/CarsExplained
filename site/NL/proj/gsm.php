<!DOCTYPE html>
<html lang=nl>
<!--Bewerkt door Jan Haverbeke-->
<head>
	<meta charset="utf-8" />
	<meta name= description content="GSM slot, goedkoop, arduino, DIY">
	<meta name= keywords content="GSM slot, arduino, zelfbouw">
	<title>GSMslot</title>
	<link rel="icon" href="../../images/favicon.ico" type="image/ico" sizes="16x16">

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <!-- Included CSS Files -->
  <link rel="stylesheet" href="../../css/foundation.css">
  <link rel="stylesheet" href="../../css/responsive.css">

  <!--Included javascript files-->
  <script src="../../js/modernizr.foundation.js"></script>

  
  </head>

  <body>	
	
    <!--Header includen-->
    <?php include("header.html"); ?>

    <!--Uitleg over UWB-->
	<div class="row">
		<div class="twelve columns">
			<div class="row">
				<div class="six columns">
					<h1>GSM slot</h1>
				<p>
          			<br /><br />
					We gebruiken een SIM800C arduino GSM shield van elecrow. Dit shield is compatibel met de GPRS_SIM900 bibliotheek van Seeed-Studio. 
					Deze bibliotheek moeten we dus nog installeren.
					<br /><br />
					<h4>Shield verbinden met gsm-netwerk?</h4>
					<ol>
					  <li>Shield op Arduino Uno plaatsen</li>
					  <li>Het voorbeeldprogramma SIM900_Serial_Debug uploaden, als je vervolgens de serial monitor opent kan je met behulp van AT-commands
					  de pincode van de SIM-kaart ingeven zodat er verbinding met het netwerk gemaakt kunnen worden. Zie bijgevoegde afbeelding.</li>
					  <li>Je kan via de serial monitor en AT-commands controleren of je verbonden bent met een netwerk, of je kan kijken naar de knipfrequentie van
					  Netlight (verbonden = 60ms ON en 3000ms OFF).
					</li>
					</ol>  
					<h4>SMS'en ontvangen?</h4>
					Laad het voorbeelprogramma GPRS_Loophandle.
				</p>
				<p>
					Jan Haverbeke <br>Derde bachelor autotechnologie <br>0032471070354
				</p>         
										
				</div>
		
				<div class="six columns">
          		<alt="Shield verbinden met gsm-netwerk"><img src="../../images/inigsm.jpg" style="width:100%"></a>
          		<alt="Berichten ontvangen met behulp van shield"><img src="../../images/bergsm.jpg" style="width:100%"></a>

				</div>
			</div>
		</div>
	</div>

  <!--Footer includen-->
  <?php include("footer.html"); ?>
</body>




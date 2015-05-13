<?
require 'stranica.php';
$kontakt = new Stranica();
$kontakt -> SetSadrzaj('
<div align="center">					   
<h3>Kontakt</h3><br>
<br>
 <p class="style33">MKD &bdquo;Bra&#263;a Miladinovci&ldquo;</p>
    <p class="style22">OSIJEK &ndash; HRVATSKA<br>
     Kneza Trpimira 1c</p>
    <p class="style22">&#381;R: 2500009 – 1102005464</p>
    <p class="style22">Tel./ Fax.:  + 385 31 208 903<br>
      Email: <a href="mailto:mkd.b.miladinovci@gmail.com ">mkd.b.miladinovci@gmail.com </a></p>
    <p class="style22"><br>Predsjednica : Jagoda Cveti&#269;anin<br>
	     Tel.: 098/1810338<br><br>
		Podpredsjednik : Krste Atanasovski<br>
		Tel.: 092/1242997<br><br>
      Tajnica : Andrijana Galovi&#263;<br>
	  Tel.: 095/9404932<br><br></p>
	  </div>
	  <br>
	  <br />
<br />

					   
					   ');
$kontakt -> Prikaz();
?>
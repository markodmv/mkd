<?
class stranica{
	var $sadrzaj;
	var $keywords = 'Makedonsko kulturno društvo, Braca Milainovci, Osijek, MKD Braca Miladinovci,MKD Osijek, Makedonci';
	var $dugmad = array (
						'Naslovnica' => 'index.php',
						'Povijest društva' => 'povijest.php',
						'Etno sekcija' => 'etno.php',
						'Vardarki' => 'vardarki.php',
						'Tanec' => 'tanec.php',
						'Biser&#269;inja' => 'bisercinja.php',
						'Pravni kutak' => 'pravo.php',
						'Kontakt' => 'kontakt.php'
						);
function SetSadrzaj($newsadrzaj){
	$this -> sadrzaj = $newsadrzaj;
	}
function SetKeywords($newkeywords){
	$this -> keywords = $newkeywords;
	}
function SetDugmad($newdugmad){
	$this -> dugmad = $newdugmad;
	}
function Prikaz(){
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
	echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n";
	echo "<title>MKD Braca Miladinovci Osijek</title>";
	$this -> PrikazKeywords();
	$this -> PrikazStyle();
	echo "</head>\n<body>\n";
	$this -> PrikazPoc();
	$this -> PrikazHeader();
	$this -> PrikazMenu($this->dugmad);
	$this -> PrikazSadrzaj($sadrzaj);
	$this -> PrikazFooter($this->dugmad);
	$this -> PrikazKra();
	echo "</body>\n</html><br><br><br><br>";
	}
function PrikazKeywords(){
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-10646\" />";
	echo "<meta name=\"keywords\" content=\"$this->keywords\">";
	echo "<meta name=\"author\" content=\"Webmaster: Marko Vašek\" />";
	}
function PrikazStyle(){
	?>
<style type="text/css">
<!--
body {
	background-color: #660000;
	background-image: url();
	}
.style1 {
	color:#000066;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
}
.style22 {
	color:#333;
	font-size: 18px;
}
.style33 {
	color:#333;
	font-size: 24px;
	font-weight: bold;
}
a:hover {
	color:#FC0;
	text-decoration: none;
}
.style3{
	font-family: Georgia, Times New Roman, Times, serif;
}
a {
	font-size: 12px;
	font-weight: bold;
	color:#CC0000;
	text-decoration:none;
}
.style4 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
}
.style5{
	font-size:12px;
}
.style8 {    font-size: 12px;
	color:#FFFFFF;
	font-family: "Courier New", Courier, monospace;
}
.style20 {    font-size: 12px;
	color:#999999;
	font-family: "Courier New", Courier, monospace;
}
.style21 {    font-size: 16px;
	color:#000;
	font-weight:bold;
	font-family: "Courier New", Courier, monospace;
}
.style40 {
	font-family: "Courier New", Courier, monospace;
	font-size: 28px;
	font-weight: bold;
}
-->
</style>

	<?
	}
function PrikazHeader(){
	?>
	<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#666666">
  <tr>
    <td><img src="Slike/Macedonia.png" width="340" height="240" /></td>
    <td valign="bottom">
	<img src="Slike/naslov.png" width="400" height="100" align="middle" /><br /><br /><br /><br />
	<p align="right" class="style8">
	<?
	echo date("d").".".date("m").".".date("Y").".";
	?>
	</p>	</td>
  </tr>
</table>
	<?
	}
function PrikazPoc(){
	?>
	<table width="1000" border="2" align="center" cellpadding="0" cellspacing="0" bgcolor="#666666" bordercolor="#FFFF00">
  <tr>
    <td valign="top"> 
	<?
	}
function PrikazKra(){
	?>
	</td>
  </tr>
</table>
<br />
<div align="center"><span class="style8">Web systems and design by </span><span class="style4"><a href="mailto:marko.vasek@gmail.com">Marko Va&scaron;ek.</a></span></div>
	<?
	}
function PrikazMenu($dugmad){
	?>
	<table width="820" border="0" cellpadding="0" cellspacing="0" bgcolor="#666666" align="center">
  <tr height="25">
    <td width="25" background="Slike/gl.png">&nbsp;</td>
    <td background="Slike/sg.png">&nbsp;</td>
    <td width="25" background="Slike/dg.png">&nbsp;</td>
  </tr>
  <tr>
    <td width="25" background="Slike/sl.png">&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center"><span class="style3">
	<?
	$width = 100/count($dugmad);
	while (list($name, $url) = each($dugmad)){
		$this->PrikazDugmad($width, $name, $url, !$this->IsURLCurrentPage($url));
		}
	?>
	</span>
	</td>
    <td width="25" background="Slike/sde.png">&nbsp;</td>
  </tr>
  <tr height="25">
    <td width="25" background="Slike/dl.png">&nbsp;</td>
    <td background="Slike/sd.png">&nbsp;</td>
    <td width="25" background="Slike/dd.png">&nbsp;</td>
  </tr>
</table>
	<?
	}
function IsURLCurrentPage($url){
	if(strpos($GLOBALS['SCRIPT_NAME'], $url) == false){
		return false;
		}else{
			return true;
			}
	}
function PrikazDugmad($width, $name, $url, $active = true){
	if($active){
		echo "<a href='$url'> $name </a>".'&nbsp;';
		}else{
			echo "<span class='style1'> $name </span>".'&nbsp;';
			}	
	}
function PrikazDugmadi($width, $name, $url){
		echo "<a href='$url'> $name </a>".'&nbsp;|&nbsp;';
	}
function PrikazSadrzaj($sadrzaj){
	?>
	<table width="900" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#666666">
  <tr>
    <td valign="top" width="220">
	
	<table width="220" border="0" cellspacing="0" cellpadding="0">
  <tr height="25">
    <td width="25" background="Slike/gornja_lijevo_m.png">&nbsp;</td>
    <td background="Slike/gornja_m.png">&nbsp;</td>
    <td width="25" background="Slike/gornja_desno_m.png">&nbsp;</td>
  </tr>
  <tr>
    <td background="Slike/lijeva_m.png">&nbsp;</td>
    <td bgcolor="#FFFFFF">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="150" height="120">
  <param name="movie" value="malagalerija.swf" />
  <param name="quality" value="high" />
  <param name="allowFullScreen" value="true" />
  <param name="allowScriptAccess" value="always" />
  <param name="wmode" value="transparent">
  <embed src="malagalerija.swf"
         quality="high"
         type="application/x-shockwave-flash"
         WMODE="transparent"
         width="150"
         height="120"
         allowFullScreen="true"
         pluginspage="http://www.macromedia.com/go/getflashplayer"
         allowScriptAccess="always" />
</object>
<br />
<br />
</td>
    <td background="Slike/desna_m.png">&nbsp;</td>
  </tr>
  <tr height="25">
    <td background="Slike/donja_lijevo_m.png">&nbsp;</td>
    <td background="Slike/donja_m.png">&nbsp;</td>
    <td background="Slike/donja_desno_m.png">&nbsp;</td>
  </tr>
  <tr height="25">
    <td background="Slike/gornja_lijevo_m.png">&nbsp;</td>
    <td background="Slike/gornja_m.png">&nbsp;</td>
    <td background="Slike/gornja_desno_m.png">&nbsp;</td>
  </tr>
  <tr>
    <td background="Slike/lijeva_m.png">&nbsp;</td>
    <td bgcolor="#FFFFFF">
	 <ul>
	 <span class="style3">
      <li><a href="priznanja.php">Priznanja</a></li>
	 <li><a href="galerija.php">Galerija slika </a></li>
	 <li><a href="http://www.mkdbracamiladinovci.blog.hr/">Doga&#273;ajnica</a></li>
	 <li><a href="administrator.php">Administrator</a></li>
	 </span>
	 </ul>
	</td>
    <td background="Slike/desna_m.png">&nbsp;</td>
  </tr>
  <tr height="25">
    <td background="Slike/donja_lijevo_m.png">&nbsp;</td>
    <td background="Slike/donja_m.png">&nbsp;</td>
    <td background="Slike/donja_desno_m.png">&nbsp;</td>
  </tr>
</table>

	</td>
    <td valign="top" width="680">
	
	<table width="680" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40" height="40" background="Slike/gornja_lijevo.png">&nbsp;</td>
    <td background="Slike/gornja.png">&nbsp;</td>
    <td width="40" background="Slike/gornja_desno.png">&nbsp;</td>
  </tr>
  <tr>
    <td background="Slike/lijeva.png">&nbsp;</td>
    <td bgcolor="#FFFFFF">
	<?
	echo $this->sadrzaj;
	?>
	</td>
    <td background="Slike/desna.png">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" background="Slike/donja_lijevo.png">&nbsp;</td>
    <td background="Slike/donja.png">&nbsp;</td>
    <td background="Slike/donja_desno.png">&nbsp;</td>
  </tr>
</table>

	</td>
  </tr>
</table>

	<?
	}
function PrikazFooter($dugmad){
	?>
	<div align="center">
	<br />
	<br />
	<?
	$width = 100/count($dugmad);
	echo '|&nbsp;';
	while (list($name, $url) = each($dugmad)){
		$this->PrikazDugmadi($width, $name, $url, !$this->IsURLCurrentPage($url));
		}
	?>
	<br />
	<br />
	<hr align="center" width="600" color="#FFFFFF" />
	<br />
	<span class="style4">
	MAKEDONSKO KULTURNO DRUŠTVO BRA&#262;A MILADINOVCI OSIJEK HRVATSKA<br /></span>
	-------------------------------------------------------------------------------------------<br />
	<span class="style5">Hrvatska, 31 000 Osijek, Kneza Trpimira 1c, tel/fax: + 385 31 208 903;  Mati&#269;ni broj: 00964930;<br />  
	Žiro racun: Hypo Alpe-Adria-Bank - 2500009 – 1102005464; OIB:  80243866274;  e-mail: </span>
	<span class="style4"><a href="mailto:mkd.b.miladinovci@gmail.com">mkd.b.miladinovci@gmail.com</a></span>
	<br />
	<br />
	</div>
	<?
	}
}


?>
	
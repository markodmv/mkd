<?
require 'stranica.php';
class PravoStranica extends Stranica{
var $sadrzaj = array (
						'Statut' => 'Statut MKD Osijek.doc',
						'Poslovnik' => 'Poslovnik o nacinu rada UO Drustva.doc',
						'Pravilnik o radu' => 'Pravilnik o radu sekcija i voditelja sekcija.doc',
						'Pristupnica' => 'Pristupnica.doc',
						'Izvješce o realizaciji programa i utrošku sredstava u 2009. godini' => 'Izvjesce 2009.doc'
						);
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
	$this -> PrikazSadrzaj($this->sadrzaj);
	$this -> PrikazFooter($this->dugmad);
	$this -> PrikazKra();
	echo "</body>\n</html><br><br><br><br>";
	}
function PrikazLink($name, $url){
	echo "<li><a href='$url' target='_blank'> $name </a></li><br><br>";
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
	while (list($name, $url) = each($sadrzaj)){
		$this->PrikazLink($name, $url, !$this->IsURLCurrentPage($url));
		}
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
}
$pravo = new PravoStranica();
$pravo -> Prikaz();
?>
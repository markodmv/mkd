<?
require 'stranica.php';
class PravoStranica extends Stranica{
var $dugmad1 = array (
						'Statut' => 'statut.php',
						'Poslovnik' => 'poslovnik.php',
						'Pravilnik o radu' => 'pravilnik.php',
						'Pristupnica' => 'pristupnica.php',
						);
function Prikaz(){
	echo "<html>\n<head>\n";
	echo "<title>MKD Braca Miladinovci Osijek</title>";
	$this -> PrikazKeywords();
	$this -> PrikazStyle();
	echo "</head>\n<body>\n";
	$this -> PrikazPoc();
	$this -> PrikazHeader();
	$this -> PrikazMenu($this->dugmad, $this->dugmad1);
	$this -> PrikazSadrzaj($sadrzaj);
	$this -> PrikazFooter($this->dugmad);
	$this -> PrikazKra();
	echo "</body>\n</html><br><br><br><br>";
	}
function PrikazMenu($dugmad, $dugmad1){
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
	while (list($name, $url) = each($dugmad1)){
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
}
$pravilnik = new PravoStranica();
$pravilnik -> Prikaz();
?>
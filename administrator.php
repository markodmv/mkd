<?php
ob_start();
include "spoj.php";
require 'stranica.php';
class AdministratorStranica extends Stranica{
function Prikaz(){
	echo "<html>\n<head>\n";
	echo "<title>MKD Braca Miladinovci Osijek</title>";
	$this -> PrikazKeywords();
	$this -> PrikazStyle();
	echo "</head>\n<body>\n";
	$this -> PrikazPoc();
	$this -> PrikazHeader();
	$this -> PrikazMenu($this->dugmad);
	$this -> PrikazSadrzaj();
	$this -> PrikazFooter($this->dugmad);
	$this -> PrikazKra();
	echo "</body>\n</html><br><br><br><br>";
	}
	
function PrikazSadrzaj(){
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
	if(isset($_COOKIE['ID_my_site']))


{ 
$username = $_COOKIE['ID_my_site']; 
$pass = $_COOKIE['Key_my_site'];
$check = mysql_query("SELECT * FROM admin WHERE korisnicko_ime = '$username'")or die(mysql_error());
while($info = mysql_fetch_array( $check )) 
{
if ($pass != $info['lozinka']) 
{
}
else
{
header("Location: admin.php");

}
}
}


if (isset($_POST['submit'])) { 


if(!$_POST['username'] | !$_POST['pass']) {
die('Nisu popunjena zatražena polja.<a href="administrator.php"> <br><br>Pokušajte ponovo. </a><br><br><br>
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
');
}


if (!get_magic_quotes_gpc()) {
$_POST['email'] = addslashes($_POST['email']);
}
$check = mysql_query("SELECT * FROM admin WHERE korisnicko_ime = '".$_POST['username']."'")or die(mysql_error());


$check2 = mysql_num_rows($check);
if ($check2 == 0) {
die('Ne postoji takav korisnik.<a href="administrator.php"> <br>Pokušajte ponovo. </a><br><br><br>
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

');
}
while($info = mysql_fetch_array( $check )) 
{
$_POST['pass'] = stripslashes($_POST['pass']);
$info['lozinka'] = stripslashes($info['lozinka']);
$_POST['pass'] = md5($_POST['pass']);


if ($_POST['pass'] != $info['lozinka']) {
die('Lozinka nije valjana, pokušajte
<a href="administrator.php"> ponovo. </a>
<br>
<br>
<br>
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

');
}
else 
{ 
 
$_POST['username'] = stripslashes($_POST['username']); 
$hour = time() + 3600; 
setcookie(ID_my_site, $_POST['username'], $hour); 
setcookie(Key_my_site, $_POST['pass'], $hour); 


header("Location: admin.php"); 
} 
} 
} 
else 
{ 
 
include "spoj.php";
?> 

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<br> 
<table width="385" height="192" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF"> 
<tr><td height="57"><span class="style40">Prijavi se</span></td>
</tr> 
<tr><td height="37"><span class="style4">Korisni&#269;ko ime:</span></td>
<td> 
<input name="username" type="text" maxlength="50"></td>
</tr> 
<tr><td height="37"><span class="style4">Lozinka:</span></td>
<td> 
<input name="pass" type="password" maxlength="50"></td>
</tr> 
<tr><td height="42" colspan="2" align="center"> 
    <div align="center">
      <input type="submit" name="submit" value="Prijavi se"> 
    </div></td>
</tr>
</table> 
</form> 


<?php 
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
$administrator = new AdministratorStranica();
$administrator -> Prikaz();

ob_flush();
?>
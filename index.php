<?
require "spoj.php";
require 'stranica.php';
class IndexStranica extends Stranica{
function Prikaz(){
	echo "<html>\n<head>\n";
	echo "<meta name=\"google-site-verification\" content=\"XsPjCh9vIK4IGQt1RYONu5COU9nNUFZe95SUy_BVkrI\" />";
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
    <td bgcolor="#FFFFFF" >

<?
	
	$ob="select * from obavijesti order by obavijest_id desc";
	if (!$o=mysql_query($ob))
	{
	echo "<br>Nastala je greška pri izvodenju upita!<br />" . mysql_query();
	die();
	}
	if (mysql_num_rows($o)==0)
		{
		echo "<br>Nema novih obavijesti!<br>";
		} else 
				{
				while ($redak=mysql_fetch_array($o))
					{
					$n= $redak["naslov"];
					$b= $redak["obavijest"];
					$d= $redak["datum"];
					$i= $redak["obavijest_id"];
				
				?>
                <div align="center">
                <span class="style21">
                <?
				    echo "<br> $n <br><br>";
					if($i == 8) {echo '<img src="a.png" width="268" height="260" />            <img src="b.png" width="177" height="260" /><br><br>';}	
					if($i == 11) {echo '<img src="vardarki.jpg" /> <br><br>';}
					if($i == 14) {echo '<img src="16dani.jpg" /> <br><br>';}
					if($i == 15) {echo '<img src="pozivnakoncert.jpg" /> <br><br>';}
					if($i == 18) {echo '<img src="8122010b.jpg" /> <br><br>';}
					if($i == 19) {echo '<img src="8122010c.jpg" /> <br><br>';}
					if($i == 20) {echo '<img src="mak.vece-2011.jpg" /> <br><br>';}
					if($i == 21) {echo '<img src="makvec2011.jpg" /> <br><br>';}
					if($i == 22) {echo '<img src="orasje1.jpg" /> <br><br>';}
					if($i == 23) {echo '<img src="danibm2011.jpg" /> <br><br>';}
					if($i == 24) {echo '<img src="flayer1.jpg" /> <br><br>';}
					if($i == 24) {echo '<img src="flayer2.jpg" /> <br><br>';}
					?>
                    </span>
                    </div>
                    <?
					
					echo "<br> $b <br><br>";
						?>
                     <div align="right">
					<span class="style20">
					<?
					echo "Objavljeno: $d <br>";
					?>
					</span>
                    </div>                 
                    <hr width="100%" />
					<br>
					<br>
					<?
					
					}
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
  <!-- GoStats JavaScript Based Code --><script type="text/javascript" src="http://gostats.com/js/counter.js"></script><script type="text/javascript">_gos='c5.gostats.com';_goa=1019360;_got=5;_goi=1;_gol='hit counter html code';_GoStatsRun();</script><noscript><a target="_blank" title="hit counter html code" href="http://gostats.com"><img alt="hit counter html code" src="http://c5.gostats.com/bin/count/a_1019360/t_5/i_1/counter.png" style="border-width:0" /></a></noscript><!-- End GoStats JavaScript Based Code -->
</table>
	<?
	}
}	
$index = new IndexStranica();
$index -> Prikaz();	
?>
<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MKD Braca Miladinovci</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
.style10 {	font-family: "Courier New", Courier, monospace;
	color:#FFFFFF;
	font-weight: bold;
}
.style8 {    font-size: 12px;
	color:#FFFFFF;
	font-family: "Courier New", Courier, monospace;
}
a:link {
	color: #990000;
}
a:hover {
	color: #990000;
}
a:visited {
	color: #990000;
}
a:active {
	color: #990000;
}
.style11 {color: #FFFFFF}
.style12 {	color: #000000;
	font-size: 12px;
}
.style13 {color: #0000FF}
body {
	background-color: #660000;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('Slike/odrustvu_over.png','Slike/kontakt_over.png','Slike/naslovnica_over.png','Slike/etno_over.png','Slike/vardarki_over.png','Slike/tanec_over.png','Slike/bisercinja_over.png')">
<div align="center">
<table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFF00">
  <tr>
    <td><table width="900" border="0" cellpadding="0" cellspacing="0" bgcolor="#666666">
      <tr>
        <td width="60">&nbsp;</td>
        <td width="780"><table width="780" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="780" height="250" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="340" height="240"><div align="center"><img src="Slike/Macedonia.png" alt="" width="340" height="240" /></div></td>
                <td><div align="center"><img src="Slike/naslov.png" alt="" width="440" height="100" /></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td align="left" valign="top">
              <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="220" align="left" valign="top"><table width="220" border="0" cellspacing="0" cellpadding="0">
                  
                    <tr>
                      <td height="25" width="25" background="Slike/gornja_lijevo_m.png">&nbsp;</td>
                      <td background="Slike/gornja_m.png">&nbsp;</td>
                      <td width="25" background="Slike/gornja_desno_m.png">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" background="Slike/lijeva_m.png">&nbsp;</td>
                      <td bgcolor="#FFFFFF"><ul>
                        <li><a href="logout.php" class="style13">Odjava</a></li>
                      </ul></td>
                      <td background="Slike/desna_m.png">&nbsp;</td>
                    </tr>
                   
                    <tr>
                      <td height="25" background="Slike/donja_lijevo_m.png">&nbsp;</td>
                      <td background="Slike/donja_m.png">&nbsp;</td>
                      <td background="Slike/donja_desno_m.png">&nbsp;</td>
                    </tr>
                  </table></td>
                  <td width="560" valign="top"><table width="560" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="40" height="40" background="Slike/gornja_lijevo.png">&nbsp;</td>
                      <td width="480" background="Slike/gornja.png">&nbsp;</td>
                      <td width="40" background="Slike/gornja_desno.png">&nbsp;</td>
                    </tr>
                    <tr>
                      <td background="Slike/lijeva.png">&nbsp;</td>
                      <td bgcolor="#FFFFFF"><p>&nbsp;
					  <?
					  include "spoj.php";
 
  

  if (!$_POST["SBunos"])
	{
		?>
         
    <form method="post" action="">
     <ul>
   <?  echo "Upišite naslov obavijesti:<br><br>"; ?>
  
   <input type="text" name="naslov" /> <br /><br />
  
    <? echo "Upišite novu obavijest:<br><br>"; ?>
     </ul>
    <div align="center">
    <ul>
      <textarea name="tekst" cols="50" rows="8"></textarea>
      </ul>
	  <br />
	  <br />
	  <input type="submit" name="SBunos" value="Pohrani">
	  </div>
    </form>
	<?
	}else
		{
		if ($_POST["tekst"] == null){header("Location: admin.php");}
		else
			{
		$dat= date("Y")."-".date("m")."-".date("d");
		$obav="insert into obavijesti(naslov, obavijest, datum) values ('$_POST[naslov]', '$_POST[tekst]', '$dat')";
		if(!mysql_query($obav))
				{
				echo "<br>Došlo je do greške pri unosu!<br>". mysql_error();
				?>
	<a href="admin.php"><br /><ul>Ponovi unos!</ul></a>
	<?
				}
				else
					{ 
					header("Location: logout.php");
								}
			}
		}
	?>

	
					  
			
					  </p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        </td>
                      <td background="Slike/desna.png">&nbsp;</td>
                    </tr>
                    <tr >
                      <td height="40" background="Slike/donja_lijevo.png">&nbsp;</td>
                      <td background="Slike/donja.png">&nbsp;</td>
                      <td background="Slike/donja_desno.png">&nbsp;</td>
                    </tr>
                  </table></td>
                  
                </tr>
              </table>
              </td>
          </tr>
          <tr>
            <td align="center" height="40"><span class="style11"></span> </td>
          </tr>
          <tr>
            <td align="center" height="40"><span class="style8">Web systems and design
        by </span> <span class="style10" ><a href="mailto:marko.vasek@gmail.com">Marko Va&scaron;ek.</a></span></td>
          </tr>
        </table></td>
        <td width="60">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  
</table>

</div>
</body>
</html>
<?php
ob_flush();
?>
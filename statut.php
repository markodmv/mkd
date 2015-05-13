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
$statut = new PravoStranica();
$statut -> SetSadrzaj('
<p>Na temelju clanka 15. Ustavnog zakona o pravima nacionalnih manjina (Narodne novine br. 155/2002.) i clanka 11. Zakona o udrugama (Narodne novine br. 88/2001, 11/2002), i cl. 21. Statuta Makedonskog kulturnog dru�tva "Braca Miladinovci" Osijek, Skup�tina Makedonskog kulturnog dru�tva "Braca Miladinovci" Osijek, na sjednici Skup�tine odr�anoj 22. o�ujka 2009. godine donijela je</p>
<br>
<p>STATUT MAKEDONSKOG KULTURNOG DRU�TVA "BRACA MILADINOVCI" OSIJEK</p>
<p align="center">I.   OPCE  ODREDBE</p>
<p align="center">Clanak 1.</p>
<p>Ovim Statutom reguliraju se: djelokrug rada Makedonskog kulturnog dru�tva "Braca Miladinovci" iz Osijeka (u daljnjem tekstu: Dru�tvo), naziv i sjedi�te Dru�tva, podrucje djelovanja, zastupanje, ciljevi,  clanstvo, tijela i njihov sastav, ovlasti i nacin odlucivanja,  nacin izbora i opoziva, trajanje mandata, clanarina i odgovornost clanova, imovina, nacin stjecanja i raspolaganje imovinom, prestanak rada Dru�tva i postupak s imovinom u slucaju prestanka rada.</p>
<p align="center">Clanak 2.</p>
<p>Naziv udruge je: Makedonsko kulturno dru�tvo "Braca Miladinovci" Osijek. Skraceni naziv Dru�tva je: MKD �Braca Miladinovci� Osijek</p>
<p align="center">Clanak 3.</p>
<p>Sjedi�te Dru�tva je u Osijeku.</p> 
<p align="center">Clanak 4.</p>
<p>Dru�tvo djeluje na podrucju Osjecko-baranjske �upanije i ima svojstvo pravne osobe.</p> 
<p align="center">Clanak 5.</p>
<p>Znak Dru�tva sastavljen je od slike otvorene knjige ciju sredinu razdjeljuje stranicnik crvene boje. Iznad knjige istaknuti su likovi brace Miladinov broncane boje.</p> 
<p align="center">Clanak 6.</p>
<p>Pecat Dru�tva je okruglog oblika promjera 35 mm po cijem je obodnom dijelu ispisan tekst na hrvatskom i makedonskom jeziku i pismu: "MAKEDONSKO KULTURNO DRU�TVO BRACA MILADINOVCI", a u sredini "OSIJEK" na hrvatskom i makedonskom jeziku i pismu.</p> 
<p align="center">Clanak 7.</p>
<p>Dru�tvo zastupaju predsjednik, dopredsjednik i tajnik Dru�tva.
Upravni odbor Dru�tva mo�e ovlastiti i druge osobe za zastupanje Dru�tva.</p> 
<p align="center">Clanak 8.</p>
<p>Dru�tvo cine njegovi clanovi koji su primljeni sukladno va�ecim aktima, upisani u registar clanova Dru�tva i redovito placaju clanarinu.</p>
<p align="center">Clanak 9.</p>
<p>Dru�tvo mo�e suradivati sa slicnim udrugama i asocijacijama u zemlji i inozemstvu.
Odluku o suradnji donosi Upravni odbor Dru�tva.</p>
<p align="center">Clanak 10.</p>
<p>Dru�tvo je izvanstranacka, nepoliticka i neprofitna udruga.</p>
<p align="center">Clanak 11.</p>
<p>Rad i djelovanje Dru�tva je javan.
Javnost rada ostvaruje se pravodobnim i istinitim obavje�civanjem clanova putem pisanih izvje�ca, na posebnim skupovima, putem glasila Zajednice Makedonaca u Republici Hrvatskoj "Makedonski glas" i putem drugih sredstava informiranja.</p>
<p align="center">II.   CILJEVI  I  DJELOKRUG  RADA  DRU�TVA</p>
<p align="center">Clanak 12.</p>
<p>Svrha osnivanja Dru�tva je da potice, poma�e i razvija okupljanje i poma�e u ostvarivanju prava i interesa gradana Republike Hrvatske makedonskog podrijetla, sukladno Ustavnom zakonu o pravima nacionalnih manjina.<br>
Cilj Dru�tva je ocuvanje kulturnog i duhovnog identiteta makedonske nacionalne manjine u Republici Hrvatskoj njegovanjem i razvijanjem jezika, knji�evnosti, povijesti, nauke, glazbe, umjetnosti, folklora te njegovanjem i razvijanjem hrvatsko � makedonskih kulturnih i duhovnih veza i odnosa.</p>
<p>
Ostvarivanje cilja iz stavka 2. ovog clanka, a polazeci od interesa svakog naroda pa tako i hrvatskog i makedonskog k produbljivanju svojih spoznaja i civilizacijskih dosega, uzajamno�cu i pro�imanjem razlicitih kultura i civilizacijskih dostignuca, a poradi vlastitog obogacivanja i medusobnog razumijevanja, Dru�tvo provodi sljedece djelatnosti:
<ul><li>promice, razvija i unapreduje kulturu i duhovne vrijednosti makedonske nacije,</li>
<li>organizira kulturne manifestacije samostalno ili u suradnji s postojecim udrugama, institucijama i osobama,</li>
<li>obilje�avanje svih znacajnih datuma iz povijesti makedonskog i hrvatskog naroda, njihovog kulturnog i dru�tvenog razvoja,</li>
<li>organiziranje razlicitih knji�evnih tribina, likovnih susreta, promocija knjiga, radijskih i televizijskih tribina, kontakt emisija i sl.,</li>
<li>organiziranje programa za pred�kolski i �kolski uzrast, kroz djecje igraonice i tecajeve makedonskog jezika i pisma, likovne radionice za djecu i sl.,</li>
<li>organiziranjem razlicitih informativno � edukativnih djelatnosti od obostranog interesa, poticuci suradnju za bolje informiranje kroz pisane i elektronske medije javnog informiranja,</li>
<li>organiziranje suradnje s istovjetnim udrugama te svim drugim organizacijama, institucijama i pojedincima  koji mogu doprinijeti radu Dru�tva,</li>
<li>obavljanje i drugih poslova koji doprinose ostvarivanju ciljeva utvrdenih ovim Statutom.</li></ul>
</p>
<p align="center">Clanak 13.</p>
<p>Djelokrug rada za ostvarivanje ciljeva Dru�tva obuhvaca cetiri najznacajnije cjeline: kulturni amaterizam, kulturne manifestacije, izdava�tvo i informiranje.<br>
Dru�tvo mo�e obavljati i druge djelatnosti sukladno zakonskim propisima Republike Hrvatske.<br>
Nabrojane djelatnosti iz stavka 1. i 2. ovog clanka, Dru�tvo mo�e ostvarivati samostalno i u suradnji s drugim slicnim udrugama, institucijama i osobama.
</p>
<p align="center">Clanak 14.</p>
<p>Kulturni amaterizam podrazumijeva aktivno ukljucivanje clanova Dru�tva u rad sekcija i drugih skupina radi njegovanja jezika, kulture, glazbe, folklora, umjetnosti, makedonske knji�evnosti, narodnih obicaja i stvarala�tva, likovnih i literarnih aktivnosti i slicno, a sve s ciljem ocuvanja identiteta makedonske nacionalne manjine u Republici Hrvatskoj. </p>
<p align="center">Clanak 15.</p>
<p>Dru�tvo organizira i ostvaruje razlicite kulturne manifestacije: makedonske kulturno zabavne veceri, izlo�be, predstavljanje knjiga, tribine, predavanja, obilje�avanje nacionalnih i povijesnih datuma iz makedonske povijesti i slicno.</p>
<p align="center">Clanak 16.</p>
<p>Izdava�tvo Dru�tva temelji se na odr�avanju i njegovanju tradicionalnih hrvatsko � makedonskih knji�evnih veza i odnosa kroz stoljeca.<br>
Dru�tvo izdaje knjige i druge publikacije iz podrucja svoje djelatnosti sukladno zakonu.
</p>
<p align="center">Clanak 17.</p>
<p>Dru�tvo informira o svojim aktivnostima kroz glasilo Zajednice Makedonaca "Makedonski glas", a kada se steknu uvjeti mo�e izdavati i vlastiti bilten.</p>
<p align="center">Clanak 18.</p>
<p>Za uspje�no ostvarivanje ciljeva Dru�tvo izraduje i donosi godi�nji Plan i program rada i Financijski plan.</p>
<p align="center">Clanak 19.</p>
<p>Dru�tvo je du�no voditi poslovne knjige i sastavljati financijska izvje�ca prema propisima vodenja racunovodstva neprofitnih organizacija u Republici Hrvatskoj.</p>
<p align="center">III.   CLANSTVO  U DRU�TVU</p>
<p align="center">Clanak 20.</p>
<p>Dru�tvo mo�e imati redovne i pocasne clanove.</p>
<p align="center">Clanak 21.</p>
<p>Redovan clan Dru�tva mo�e postati svaka fizicka i pravna osoba.</p>
<p align="center">Clanak 22.</p>
<p>Clanom Dru�tva se postaje prijemom i upisom u registar clanova.
Odluku o prijemu u clanstvo donosi Upravni odbor Dru�tva.</p>
<p align="center">Clanak 23.</p>
<p>Clanovi Dru�tva placaju clanarinu ciji godi�nji iznos odreduje Upravni odbor Dru�tva.</p>
<p align="center">Clanak 24.</p>
<p>Pocasni clan Dru�tva mo�e postati osoba dr�avljanin Republike Hrvatske ili stranac koja je svojim radom i djelovanjem iznimno doprinijela razvitku Dru�tva ili djeluje na dobrobit makedonskog naroda opcenito.<br>
Pocasne clanove predla�e Upravni odbor Skup�tini Dru�tva koja razmatra prijedlog i donosi odluku.</p>
<p align="center">Clanak 25.</p>
<p>Clan Dru�tva dobiva iskaznicu koja potvrduje clanstvo u Dru�tvu. </p>
<p align="center">Clanak 26.</p>
<p>Prava i obveze clanova Dru�tva su:

</p>
<p align="center"></p>
<p></p>
<p align="center"></p>
<p></p>
<p align="center"></p>
<p></p>
<p align="center"></p>
<p></p>
<p align="center"></p>
<p></p>
<p align="center"></p>
<p></p>
');
$statut -> Prikaz();
?>
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
<p>Na temelju clanka 15. Ustavnog zakona o pravima nacionalnih manjina (Narodne novine br. 155/2002.) i clanka 11. Zakona o udrugama (Narodne novine br. 88/2001, 11/2002), i cl. 21. Statuta Makedonskog kulturnog društva "Braca Miladinovci" Osijek, Skupština Makedonskog kulturnog društva "Braca Miladinovci" Osijek, na sjednici Skupštine održanoj 22. ožujka 2009. godine donijela je</p>
<br>
<p>STATUT MAKEDONSKOG KULTURNOG DRUŠTVA "BRACA MILADINOVCI" OSIJEK</p>
<p align="center">I.   OPCE  ODREDBE</p>
<p align="center">Clanak 1.</p>
<p>Ovim Statutom reguliraju se: djelokrug rada Makedonskog kulturnog društva "Braca Miladinovci" iz Osijeka (u daljnjem tekstu: Društvo), naziv i sjedište Društva, podrucje djelovanja, zastupanje, ciljevi,  clanstvo, tijela i njihov sastav, ovlasti i nacin odlucivanja,  nacin izbora i opoziva, trajanje mandata, clanarina i odgovornost clanova, imovina, nacin stjecanja i raspolaganje imovinom, prestanak rada Društva i postupak s imovinom u slucaju prestanka rada.</p>
<p align="center">Clanak 2.</p>
<p>Naziv udruge je: Makedonsko kulturno društvo "Braca Miladinovci" Osijek. Skraceni naziv Društva je: MKD „Braca Miladinovci“ Osijek</p>
<p align="center">Clanak 3.</p>
<p>Sjedište Društva je u Osijeku.</p> 
<p align="center">Clanak 4.</p>
<p>Društvo djeluje na podrucju Osjecko-baranjske županije i ima svojstvo pravne osobe.</p> 
<p align="center">Clanak 5.</p>
<p>Znak Društva sastavljen je od slike otvorene knjige ciju sredinu razdjeljuje stranicnik crvene boje. Iznad knjige istaknuti su likovi brace Miladinov broncane boje.</p> 
<p align="center">Clanak 6.</p>
<p>Pecat Društva je okruglog oblika promjera 35 mm po cijem je obodnom dijelu ispisan tekst na hrvatskom i makedonskom jeziku i pismu: "MAKEDONSKO KULTURNO DRUŠTVO BRACA MILADINOVCI", a u sredini "OSIJEK" na hrvatskom i makedonskom jeziku i pismu.</p> 
<p align="center">Clanak 7.</p>
<p>Društvo zastupaju predsjednik, dopredsjednik i tajnik Društva.
Upravni odbor Društva može ovlastiti i druge osobe za zastupanje Društva.</p> 
<p align="center">Clanak 8.</p>
<p>Društvo cine njegovi clanovi koji su primljeni sukladno važecim aktima, upisani u registar clanova Društva i redovito placaju clanarinu.</p>
<p align="center">Clanak 9.</p>
<p>Društvo može suradivati sa slicnim udrugama i asocijacijama u zemlji i inozemstvu.
Odluku o suradnji donosi Upravni odbor Društva.</p>
<p align="center">Clanak 10.</p>
<p>Društvo je izvanstranacka, nepoliticka i neprofitna udruga.</p>
<p align="center">Clanak 11.</p>
<p>Rad i djelovanje Društva je javan.
Javnost rada ostvaruje se pravodobnim i istinitim obavješcivanjem clanova putem pisanih izvješca, na posebnim skupovima, putem glasila Zajednice Makedonaca u Republici Hrvatskoj "Makedonski glas" i putem drugih sredstava informiranja.</p>
<p align="center">II.   CILJEVI  I  DJELOKRUG  RADA  DRUŠTVA</p>
<p align="center">Clanak 12.</p>
<p>Svrha osnivanja Društva je da potice, pomaže i razvija okupljanje i pomaže u ostvarivanju prava i interesa gradana Republike Hrvatske makedonskog podrijetla, sukladno Ustavnom zakonu o pravima nacionalnih manjina.<br>
Cilj Društva je ocuvanje kulturnog i duhovnog identiteta makedonske nacionalne manjine u Republici Hrvatskoj njegovanjem i razvijanjem jezika, književnosti, povijesti, nauke, glazbe, umjetnosti, folklora te njegovanjem i razvijanjem hrvatsko – makedonskih kulturnih i duhovnih veza i odnosa.</p>
<p>
Ostvarivanje cilja iz stavka 2. ovog clanka, a polazeci od interesa svakog naroda pa tako i hrvatskog i makedonskog k produbljivanju svojih spoznaja i civilizacijskih dosega, uzajamnošcu i prožimanjem razlicitih kultura i civilizacijskih dostignuca, a poradi vlastitog obogacivanja i medusobnog razumijevanja, Društvo provodi sljedece djelatnosti:
<ul><li>promice, razvija i unapreduje kulturu i duhovne vrijednosti makedonske nacije,</li>
<li>organizira kulturne manifestacije samostalno ili u suradnji s postojecim udrugama, institucijama i osobama,</li>
<li>obilježavanje svih znacajnih datuma iz povijesti makedonskog i hrvatskog naroda, njihovog kulturnog i društvenog razvoja,</li>
<li>organiziranje razlicitih književnih tribina, likovnih susreta, promocija knjiga, radijskih i televizijskih tribina, kontakt emisija i sl.,</li>
<li>organiziranje programa za predškolski i školski uzrast, kroz djecje igraonice i tecajeve makedonskog jezika i pisma, likovne radionice za djecu i sl.,</li>
<li>organiziranjem razlicitih informativno – edukativnih djelatnosti od obostranog interesa, poticuci suradnju za bolje informiranje kroz pisane i elektronske medije javnog informiranja,</li>
<li>organiziranje suradnje s istovjetnim udrugama te svim drugim organizacijama, institucijama i pojedincima  koji mogu doprinijeti radu Društva,</li>
<li>obavljanje i drugih poslova koji doprinose ostvarivanju ciljeva utvrdenih ovim Statutom.</li></ul>
</p>
<p align="center">Clanak 13.</p>
<p>Djelokrug rada za ostvarivanje ciljeva Društva obuhvaca cetiri najznacajnije cjeline: kulturni amaterizam, kulturne manifestacije, izdavaštvo i informiranje.<br>
Društvo može obavljati i druge djelatnosti sukladno zakonskim propisima Republike Hrvatske.<br>
Nabrojane djelatnosti iz stavka 1. i 2. ovog clanka, Društvo može ostvarivati samostalno i u suradnji s drugim slicnim udrugama, institucijama i osobama.
</p>
<p align="center">Clanak 14.</p>
<p>Kulturni amaterizam podrazumijeva aktivno ukljucivanje clanova Društva u rad sekcija i drugih skupina radi njegovanja jezika, kulture, glazbe, folklora, umjetnosti, makedonske književnosti, narodnih obicaja i stvaralaštva, likovnih i literarnih aktivnosti i slicno, a sve s ciljem ocuvanja identiteta makedonske nacionalne manjine u Republici Hrvatskoj. </p>
<p align="center">Clanak 15.</p>
<p>Društvo organizira i ostvaruje razlicite kulturne manifestacije: makedonske kulturno zabavne veceri, izložbe, predstavljanje knjiga, tribine, predavanja, obilježavanje nacionalnih i povijesnih datuma iz makedonske povijesti i slicno.</p>
<p align="center">Clanak 16.</p>
<p>Izdavaštvo Društva temelji se na održavanju i njegovanju tradicionalnih hrvatsko – makedonskih književnih veza i odnosa kroz stoljeca.<br>
Društvo izdaje knjige i druge publikacije iz podrucja svoje djelatnosti sukladno zakonu.
</p>
<p align="center">Clanak 17.</p>
<p>Društvo informira o svojim aktivnostima kroz glasilo Zajednice Makedonaca "Makedonski glas", a kada se steknu uvjeti može izdavati i vlastiti bilten.</p>
<p align="center">Clanak 18.</p>
<p>Za uspješno ostvarivanje ciljeva Društvo izraduje i donosi godišnji Plan i program rada i Financijski plan.</p>
<p align="center">Clanak 19.</p>
<p>Društvo je dužno voditi poslovne knjige i sastavljati financijska izvješca prema propisima vodenja racunovodstva neprofitnih organizacija u Republici Hrvatskoj.</p>
<p align="center">III.   CLANSTVO  U DRUŠTVU</p>
<p align="center">Clanak 20.</p>
<p>Društvo može imati redovne i pocasne clanove.</p>
<p align="center">Clanak 21.</p>
<p>Redovan clan Društva može postati svaka fizicka i pravna osoba.</p>
<p align="center">Clanak 22.</p>
<p>Clanom Društva se postaje prijemom i upisom u registar clanova.
Odluku o prijemu u clanstvo donosi Upravni odbor Društva.</p>
<p align="center">Clanak 23.</p>
<p>Clanovi Društva placaju clanarinu ciji godišnji iznos odreduje Upravni odbor Društva.</p>
<p align="center">Clanak 24.</p>
<p>Pocasni clan Društva može postati osoba državljanin Republike Hrvatske ili stranac koja je svojim radom i djelovanjem iznimno doprinijela razvitku Društva ili djeluje na dobrobit makedonskog naroda opcenito.<br>
Pocasne clanove predlaže Upravni odbor Skupštini Društva koja razmatra prijedlog i donosi odluku.</p>
<p align="center">Clanak 25.</p>
<p>Clan Društva dobiva iskaznicu koja potvrduje clanstvo u Društvu. </p>
<p align="center">Clanak 26.</p>
<p>Prava i obveze clanova Društva su:

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
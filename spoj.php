<?
if (!$db = @mysql_connect("localhost", "root", "aurora"))
{
die ("<b>Nismo se mogli spojiti na MySQL server!asdfdsfdsf<br><br>Molimo pokušajte kasnije.</b>");
}
if (!mysql_select_db("mkd", $db))
{
die ("<b>Greska pri odabiru baze</b>");
}
?> 

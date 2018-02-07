<?php
$do_bazy=mysql_connect('localhost', 'root', '');
if (!$do_bazy) 
{
exit("blad polaczenia");	
}
else 
{
echo "polaczono z serwerem bazy danych <br />";
if (!mysql_select_db('filmoteka', $do_bazy))
{
echo "Blad podczas wyboru bazy danych <br />";
}
else {
echo "Zostala wybrana baza danych filmoteka <br />";
$wynik=mysql_query('SELECT * FROM filmy');
while ($r=mysql_fetch_row($wynik))
{
echo "$r[0]". " "."$r[1]"." "."$r[2]"." "."$r[3]"."<br />"; 
}

}

mysql_close($do_bazy);

}







?>



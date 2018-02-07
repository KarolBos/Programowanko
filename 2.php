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
}

mysql_close($do_bazy);

}







?>



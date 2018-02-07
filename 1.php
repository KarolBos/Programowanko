<?php
$do_bazy=mysql_connect('localhost', 'root', '');
if (!$do_bazy) 
{
exit("blad polaczenia");	
}
else 
{
echo "polaczono z serwerem bazy danych";
}
?>
<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('consulate');

mysql_query("INSERT INTO booking (status) values ('1')");
printf("Last inserted record has Bookindid %d\n", mysql_insert_id());
?>
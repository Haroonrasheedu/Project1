<?php

$DBTYPE = 'mysql';
$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'consulate';

$link = mysql_connect($DBHOST, $DBUSER, $DBPASSWORD);
mysql_select_db($DBNAME); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$member_id= '5'; // get value of the member, assumed that you have post the data into id. change if it is different into your code

$result = mysql_query("SELECT status FROM booking where id=$cid");

while($row = mysql_fetch_assoc($result))
{
     if($row['status'] == '1')
     {
        echo "<img src='../images/VIP.png' />";
     }
     else
     {
        echo 'Non-VIP';
     }
}
?>
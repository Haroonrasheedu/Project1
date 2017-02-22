<?
$conn=mysql_connect('localhost', 'root', '');
mysql_select_db("consulate",$conn);
$q=mysql_query("select ptype from booking",$conn);
while($rs=mysql_fetch_assoc($q))
{
$array= unserialize($rs['ptype']);
print_r($array);
}
?>
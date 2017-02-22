<?
$array = array("foo", "bar", "hello", "world");
$conn=mysql_connect('localhost', 'root', '');
mysql_select_db("consulate",$conn);
$array_string=mysql_escape_string(serialize($array));
mysql_query("insert into booking(ptype) values($array_string)",$conn);
echo "success";
?>
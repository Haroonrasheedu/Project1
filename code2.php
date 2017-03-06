<?php 
$email=$_POST["email"];
$hostname = "localhost";
$db_user = "root";
$db_password = "";
$database = "consulate";  
$db_table = "count";  
$con = @mysql_connect($hostname, $db_user, $db_password); 
echo "the name is".$des;
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
@mysql_select_db($database, $con);
$sql="select * from count where email='$des'";
$res=mysql_query($sql,$con);
$num=mysql_numrows($res);
$i=0;

                
                   
?>
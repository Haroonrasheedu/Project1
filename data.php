<?php 
function db_connect() { 
  $database_name = 'localhost'; // Set this to your Database Name 
  $database_username = 'root'; // Set this to your MySQL username 
  $database_password = ''; // Set this to your MySQL password 
  $result = mysql_pconnect('localhost',$database_username, $database_password); 
  if (!$result) return false; 
  if (!mysql_select_db('consulate')) return false; 
  return $result; 
} 

$conn = db_connect(); // Connect to database 

$query = "select * from colletion where batchoutdate = '$batchoutdate'";

if ($conn) { 
  $result = mysql_query($query,$conn);
  $nf = mysql_num_fields($result);
  $nr = mysql_num_rows($result);
  for($i=0;$i<$nr;$i++){
    $row = mysql_fetch_array($result, MYSQL_NUM);
    for($j=0;$j<$nf;$j++){
      echo $row[$j] . "\t";
    }
    echo "\n";
  } 
}
?>
<!DOCTYPE html>
<html>
<body>
<form action="data.php" method="post">
 <label for="field3"><span>Email ID<span class="required">*</span></span>
		   <input type="text" class="input-field" id="batchoutdate" name="batchoutdate" /></label>

            
                
                           <input type="submit" value="Submit"  /></td>
  </body>   
</form>  
</html>


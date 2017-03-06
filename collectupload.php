<?php  
 error_reporting( error_reporting() & ~E_NOTICE );
//connect to the database 
$connect = @mysql_connect("localhost","root",""); 
mysql_select_db("consulate",$connect); //select the table 
// 

if ($_FILES[csv][size] > 0) { 

    //get the csv file 
    $file = $_FILES[csv][tmp_name]; 
    $handle = fopen($file,"r"); 
     
    //loop through the csv file and insert into database 
    do { 
        if ($data[0]) { 
            mysql_query("INSERT INTO count (coundate, passno, lname, fname, sname, faname, idate, edate, dob, flat, build, street, area, city, country, instatus, pcity, ptype, dtype, amt, descr, paytype, pissue, ptime, qty, nty, phone, email, stype, cid) VALUES 
                ( 
                    '".addslashes($data[0])."',
'".addslashes($data[1])."',
'".addslashes($data[2])."',	
'".addslashes($data[3])."',
'".addslashes($data[4])."',
'".addslashes($data[5])."',
'".addslashes($data[6])."',
'".addslashes($data[7])."',
'".addslashes($data[8])."',
'".addslashes($data[9])."',
'".addslashes($data[10])."',
'".addslashes($data[11])."',
'".addslashes($data[12])."',
'".addslashes($data[13])."',
'".addslashes($data[14])."',
'".addslashes($data[15])."',
'".addslashes($data[16])."',
'".addslashes($data[17])."',
'".addslashes($data[18])."',
'".addslashes($data[19])."',
'".addslashes($data[20])."',
'".addslashes($data[21])."',
'".addslashes($data[22])."',
'".addslashes($data[23])."',
'".addslashes($data[24])."',
'".addslashes($data[25])."',
'".addslashes($data[26])."',
'".addslashes($data[27])."',
'".addslashes($data[28])."',
'".addslashes($data[29])."'

				
					
                ) 
            "); 
        } 
    } while ($data = fgetcsv($handle,1000000,",","'")); 
    // 

    //redirect 
    header('Location: countupload.php?success=1'); die; 

} 

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Bulk Upload</title> 
</head> 

<body> 

<?php if (!empty($_GET[success])) { echo "<b>Your file has been imported.</b><br><br>"; } //generic success notice ?> 

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
  Choose your file: <br /> 
  <input name="csv" type="file" id="csv" /> 
  <input type="submit" name="Submit" value="Submit" /> 
</form> 

</body> 
</html> 
<HTML>
<HEAD>
<TITLE>MATERIAL SPECIFICATION</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content="MSHTML 6.00.2900.2180" name=GENERATOR><style type="text/css">
<!--
body {
	background-color: #33FFCC;
}
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000099;
	font-family: OptimusPrinceps, OptimusPrincepsSemiBold;
}
 
.style9 {
	font-size: x-small;
	font-weight: bold;
}
.style10 {
	font-family: Verdana;
	font-size: 12px;
	color: #000099;
}
.style34 {color: #000099; font-family: Georgia; font-weight: bold; }
 
-->
</style></HEAD>
<body>
<form action="vendor-modifn.php" method=post>
  <table width="652" height="60" align="center">
  <tr>
    <td width="644" height="60" align="center" valign="top"><h1>
</CENTER>        
<u>VENDOR MASTER DATA EDIT MENU</u>
        </h1>
         <h1>
            <h1>
              <h1>Please select the vendor from the drop box below for editing</h1>
              <h1>                <?php
$hostname = "localhost";
$db_user = "root";
$db_password = "";
$database = "consulate";  
$db_table = "count";  
$db = @mysql_connect($hostname, $db_user, $db_password); 
mysql_select_db($database,$db);
?>
                  <select name="name" id="name">
                    <option  value=" " ></option>
                    <?php
$query = "select email From count order by cid"; 
$results = mysql_query($query, $db) or die("Error performing query"); 
while($row = mysql_fetch_array($results))
{ ?>
                    <option value="<?php echo $row['email'];
?>"><?php echo $row['email'];
?></option>
                    <?php
}		
 						mysql_close($db);
					?>
                                      </select>
                                </h1>
            </h1>
          </h1>
      </center></td>
    <td width="190">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="352" height="45" class="style34">
      <div align="center"> </div></td>
    <td width="22" class="style34">&nbsp;</td>
    <td height="45" class="style34">&nbsp;</td>
    <td width="19">&nbsp;</td>
    <td width="76"><div align="center">
        <input type="submit" name="Submit" value="Submit">
	<INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);"> 
 
</div></td>
    <td width="78">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</form>
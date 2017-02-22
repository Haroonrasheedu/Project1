<html>
<title>Datewise Batch Report</title>
<head>
<style>
.form-style-3{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px -200px;
			margin-top: 50px;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	    margin: 0px 0px 10px 0px;
    border: 2px solid #FFD2D2;
    background: #e7e5e5;
    padding: 20px;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-3 fieldset legend{
	color: #130108;
	border-top: 1px solid #FFD2D2;
	border-left: 1px solid #FFD2D2;
	border-right: 1px solid #FFD2D2;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #bdb1b1;
	padding: 5px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:250px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #FFC2DC;
	outline: none;
	color: #130108;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #FFD5E7;
	-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
	-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
	background: #FFEFF6;
	width:50%;

}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
background: #130108;
    border: 1px solid #130108;
    padding: 5px 15px 5px 15px;
    color: #FFCBE2;
    /* box-shadow: inset -1px -1px 3px #FF62A7; */
    -moz-box-shadow: inset -1px -1px 3px #FF62A7;
    /* -webkit-box-shadow: inset -1px -1px 3px #FF62A7; */
    border-radius: 3px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    font-weight: bold;
}
.form-style-3 .required{
	color:red;
	font-weight:normal;
}
</style>
</head>
<body>
  <?php include 'scrollc.php';?> 
<form action="datagrid.php" method="post">
 <div class="form-style-3">
 <fieldset><legend> Please Batchdate </legend>
  
           <label for="field3"><span>Batchoutdate<span class="required">*</span></span>
		   <input type="text" class="input-field" id="batchoutdate" name="batchoutdate" /></label>
  
           <label for="field3"><span>Batchdate<span class="required">*</span></span>
		   <input type="text" class="input-field" id="batchdate" name="batchdate" /></label>
		   
           <label for="field3"><span>Passport No<span class="required">*</span></span>
		   <input type="text" class="input-field" id="passno" name="passno" /></label>
		   
           <label for="field3"><span>Customer ID<span class="required">*</span></span>
		   <input type="text" class="input-field" id="cid" name="cid" /></label>
		   
		       <label for="field3"><span>Receipt ID<span class="required">*</span></span>
		   <input type="text" class="input-field" id="rid" name="rid" /></label>
		   
		            <label for="field3"><span>Email<span class="required">*</span></span>
		   <input type="text" class="input-field" id="email" name="email" /></label> 
		   
           <label for="field3"><span>Booking ID<span class="required">*</span></span>
		   <input type="text" class="input-field" id="bid" name="bid" /></label>
		   		   		   		   
           <label for="field3"><span>Suitcase<span class="required">*</span></span>
		   <input type="text" class="input-field" id="scase" name="scase" /></label>
		   
           <label for="field3"><span>Consulate ID<span class="required">*</span></span>
		   <input type="text" class="input-field" id="cc" name="cc" /></label>
            
                
                           <input type="submit" value="Submit"  /></td>
          
    
		</fieldset>
		</div>
</form>
<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'consulate';
$table = 'flyer';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
$result = mysql_query("select arrid, stype, qty, rid, ptype, rdate, instatus, descr, batchin, amt, ddate, colid, outstatus, batchout, batchdate, batchoutdate`, `reason`, `email`, `passno`, `cc`, `bid`, `bdate`, `rackin`, `coldate`, `coundate`, `dtype`, `paytype`, `arrdate`, `fid`, `flydate`, `scase`, `pcity`, `vanno`, `dcode`, `cid` FROM `arrival`n FROM {$table} where batchoutdate = '$_POST[batchoutdate]' OR batchdate = '$_POST[batchdate]' OR rid = '$_POST[rid]' OR cc = '$_POST[cc]' OR cid = '$_POST[cid]' OR rid = '$_POST[rid]' OR scase = '$_POST[scase]' OR email = '$_POST[email]' Or fid = '$_POST[fid]'");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);

echo "<h1>Datewise Batch Report</h1>";
echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysql_free_result($result);
?>
</body></html>
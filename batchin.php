<?php
$con = @mysql_connect("localhost", "root", "");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("consulate", $con);
//$sql="select * from accountdtl";
$result = mysql_query("select * from booking where email='$_POST[email]'");
while($rowval = mysql_fetch_array($result))
 {
	 $bid= $rowval['bid'];
	 $bdate= $rowval['bdate'];
	 $passno= $rowval['passno'];
	 	 $email= $rowval['email'];
$rid= $rowval['rid'];
$rdate= $rowval['rdate'];
$coundate= $rowval['coundate'];
$cc= $rowval['cc'];
$ptype= $rowval['ptype'];
$paytype= $rowval['paytype'];
$stype= $rowval['stype'];
$cid= $rowval['cid'];
$instatus= $rowval['instatus'];
$dtype= $rowval['dtype'];

$qty= $rowval['qty'];
$amt= $rowval['amt'];
$descr= $rowval['descr'];


$amt = $rowval['amt'];

$dtype = $rowval['dtype'];



}

mysql_close($con);
 
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leopards AWBill</title>
<script type="text/javascript">

</script>
<style type="text/css">
.form-style-4{
	max-width: 350px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background: rgba() url() left top;
	    padding: 20px 0px 0px 400px;
    margin-right: 200px;
    margin-top: -220px;
}
.form-style-4 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-4 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-4 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: -300px 0px 10px 0px;
	border: 1px solid #FFD2D2;
	 background: #e7e5e5;
	padding: 20px;
	<!--background: #FFF4F4;-->
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-4 fieldset legend{
	color: #130108;
	border-top: 1px solid #FFD2D2;
	border-left: 1px solid #FFD2D2;
	border-right: 1px solid #FFD2D2;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #bdb1b1;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-4 textarea{
	width:250px;
	height:100px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=date],
.form-style-4 input[type=datetime],
.form-style-4 input[type=number],
.form-style-4 input[type=search],
.form-style-4 input[type=time],
.form-style-4 input[type=url],
.form-style-4 input[type=email],
.form-style-4 select, 
.form-style-4 textarea{
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
.form-style-4  input[type=submit],
.form-style-4  input[type=button]{
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
.form-style-4 .required{
	color:red;
	font-weight:normal;
}

.form-style-3{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px 20px;
			margin-top: 0px;
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
    border: 2px solid #FFFEB5;
    background: #e7e5e5;
    padding: 20px;
	box-shadow: inset 0px 0px 15px #FFFEB5;
	-moz-box-shadow: inset 0px 0px 15px #FFFEB5;
	-webkit-box-shadow: inset 0px 0px 15px #FFFEB5;
}
.form-style-3 fieldset legend{
	color: #130108;
	border-top: 1px solid #FFFEB5;
	border-left: 1px solid #FFFEB5;
	border-right: 1px solid #FFFEB5;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #FFFEB5;
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
	border: 1px solid #FFFEB5;
	outline: none;
	color: #130108;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #FFFEB5;
	-moz-box-shadow: inset 1px 1px 4px #FFFEB5;
	-webkit-box-shadow: inset 1px 1px 4px #FFFEB5;
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
body{background:#eee;}
.testbox {
  margin: 10px auto;
  width: 300px; 
  height: 464px; 
  -webkit-border-radius: 8px/7px; 
  -moz-border-radius: 8px/7px; 
  border-radius: 8px/7px; 
  background-color: #ebebeb; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  border: solid 1px #cbc9c9;
}
#page {
    width: 996px;
    background-color: #fff;
    margin: 5px auto;
    border: 1px solid #ccc;
}

</style>
</head>
<body>
<!--2017-02-01/01:02:55pm/Wednesday -->   
<div class="page">

<!--<img src="logo.jpg" alt="" height="100" width="100" align="middle">-->

  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
<style>
body {
	font: normal .8em/1.5em Arial, Helvetica, sans-serif;
	background: #ebebeb;
	width:910px;
	margin: 20px auto;
	color: #666;
}

a {
	color: #333;
}
#nav {
	margin: 0;
	padding: 5px 0px 0;
	background: #7d7d7d url(img/gradient.png) repeat-x 0 -110px;
	line-height: 100%;

	border-radius: 2em;
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;

	-webkit-box-shadow: 0 1px 3px rgba(0,0,0, .4);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0, .4);
}
#nav li {
	margin: 0 5px;
	padding: 0 0 8px;
	float: left;
	position: relative;
	list-style: none;
}


/* main level link */
#nav a {
	font-weight: bold;
	color: #e7e5e5;
	text-decoration: none;
	display: block;
	padding:  8px 20px;
	margin: 0;

	-webkit-border-radius: 1.6em;
	-moz-border-radius: 1.6em;
	
	text-shadow: 0 1px 1px rgba(0,0,0, .3);
}
#nav a:hover {
	background: #000;
	color: #fff;
}

/* main level link hover */
#nav .current a, #nav li:hover > a {
	background: #DCDCDC url(img/gradient.png) repeat-x 0 -40px;
	color: #696969;
	border-top: solid 1px #f8f8f8;

	-webkit-box-shadow: 0 1px 1px rgba(0,0,0, .2);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0, .2);
	box-shadow: 0 1px 1px rgba(0,0,0, .2);

	text-shadow: 0 1px 0 rgba(255,255,255, 1);
}

/* sub levels link hover */
#nav ul li:hover a, #nav li:hover li a {
	background: none;
	border: none;
	color: #666;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
}
#nav ul a:hover {
	background: #0078ff url(img/gradient.png) repeat-x 0 -100px !important;
	color: #fff !important;

	-webkit-border-radius: 0;
	-moz-border-radius: 0;

	text-shadow: 0 1px 1px rgba(0,0,0, .1);
}

/* dropdown */
#nav li:hover > ul {
	display: block;
}

/* level 2 list */
#nav ul {
	display: none;

	margin: 0;
	padding: 0;
	width: 185px;
	position: absolute;
	top: 35px;
	left: 0;
	background: #ddd url(img/gradient.png) repeat-x 0 0;
	border: solid 1px #b4b4b4;

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;

	-webkit-box-shadow: 0 1px 3px rgba(0,0,0, .3);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0, .3);
	box-shadow: 0 1px 3px rgba(0,0,0, .3);
}
#nav ul li {
	float: none;
	margin: 0;
	padding: 0;
}

#nav ul a {
	font-weight: normal;
	text-shadow: 0 1px 0 #fff;
}

/* level 3+ list */
#nav ul ul {
	left: 181px;
	top: -3px;
}

/* rounded corners of first and last link */
#nav ul li:first-child > a {
	-webkit-border-top-left-radius: 9px;
	-moz-border-radius-topleft: 9px;

	-webkit-border-top-right-radius: 9px;
	-moz-border-radius-topright: 9px;
}
#nav ul li:last-child > a {
	-webkit-border-bottom-left-radius: 9px;
	-moz-border-radius-bottomleft: 9px;

	-webkit-border-bottom-right-radius: 9px;
	-moz-border-radius-bottomright: 9px;
}

/* clearfix */
#nav:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
#nav {
	display: inline-block;
} 
html[xmlns] #nav {
	display: block;
}
 
* html #nav {
	height: 1%;
}
</style>
</head>

<body>
<html>
<body>

<form action="batchin.php" method="post">
 <div class = "form-style-3">
 
 <fieldset><legend> Enter your Email:</legend>
  
           <label for="field3"><span>Email ID<span class="required">*</span></span>
		   <input type="text" class="input-field" id="email" name="email" /></label>

            
                
                           <input type="submit" value="Submit"  /></td>
          
    
		</fieldset>
		</div>
</form>
</body>
</html>

<!--
<ul id="nav">
	<li class="current"><a href="index.php">Home</a></li>
		
	<li><a href="">Users</a>
		<ul>
			<li><a href="signup.php">SignUp</a>
				</li>
			<li><a href="index.php">SignIn</a>
							</li>		
		</ul>
	</li>
	
	<li><a href="">Process</a>
		<ul>
			<li><a href="booking.php">Booking</a>
				</li>
			<li><a href="collection.php">Collection</a>
							</li>	
<li><a href="delivery.php">Delivery</a>
							</li>							
		</ul>
	</li>

	<li><a href="booking.php">Booking</a>
		<ul>
			<li><a href="booking.php">Manage Customer</a>
			<li><a href="#">Manage Counter</a></li>
					<li><a href="cons.php">Manage Products</a>
					<li><a href="#">Manage Receipt</a></li>
					<li><a href="#">Manage Booking</a></li>
					<li><a href="#">Manage Sorting </a></li>
					<li><a href="#">Manage Consulate Sequence</a></li>
					<li><a href="#">Manage Batch</a></li>
					<li><a href="#">Manage Rack </a></li>
					<li><a href="#">Manage Datewise </a></li>
							</li>
		
		
				
			</li>
		</ul>
	</li>
		<li><a href="collection.php">Collection</a>
		<ul>
			<li><a href="senders.php">Manage Batch</a>
			<li><a href="#">Manage Rack</a></li>
					<li><a href="cons.php">Manage Date wise</a>
					<li><a href="#">Manage Receipts</a></li>
					<li><a href="#">Manage Desk</a></li>
					<li><a href="cons.php">Manage Products</a>
					<li><a href="#">Manage Flyer</a></li>
					<li><a href="#">Manage Lock</a></li>
					<li><a href="cons.php">Manage Van</a>
					<li><a href="#">Manage Arrival</a></li>
					
					
							</li>
			
		
			
			</li>
		</ul>
	</li>
	
	<li><a href="delivery.php">Delivery</a>
		<ul>
			<li><a href="senders.php">Manage Arrivals</a>
			<li><a href="#">Manage Operation&Scanning</a></li>
					<li><a href="cons.php">Manage Runsheets</a>
					<li><a href="#">Manage Route Runsheet</a></li>
					
							</li>
			
		</ul>
	</li>
	
<li><a href="receipt.php">Receipt</a>

<ul>
					
					<li><a href="#">Search Receits</a></li>
					
					<li><a href="#">Manage Receipts</a></li>
						<li><a href="edit.php">Edit-Delete Receipts</a></li>
					
				</ul>
	</li>
<!--	<li><a href="contactus.php">Contact Us</a></li>
	<li><a href="Logout.php">Logout</a></li>

	
</ul>
-->
<p><a href=""></a> <em></em> <a href=""></a></p>
</body>
</html>

  <?php include 'scrollc.php';?> 



<form action="batchdb.php" name="myform" method="post">
<div class="form-style-3">
<fieldset><legend>Batch-In Details</legend>

<label for="field2"><span>Customer ID<span class="required">*</span></span><input type="text" class="input-field" name="cid" value="<?php echo $cid; ?>" /></label>
<label for="field3"><span>Receipt ID<span class="required">*</span></span><input type="text" class="input-field" name="rid" value="<?php echo $rid; ?>" /></label>
<label for="field3"><span>Counter ID<span class="required">*</span></span><input type="text" class="input-field" name="cc" value="<?php echo $cc; ?>" /></label>
<label for="field3"><span>Counter Date<span class="required">*</span></span><input type="text" class="input-field" name="coundate" value="<?php echo $coundate; ?>" /></label>
<label for="field4"><span>Receipt Date<span class="required">*</span></span><input type="text" class="input-field" name="rdate" value="<?php echo $rdate; ?>" /></label>
<label for="field2"><span>Product Type<span class="required">*</span></span><input type="text" class="input-field" name="ptype" value="<?php echo $ptype; ?>" /></label>
<label for="field2"><span>deliveryType<span class="required">*</span></span><input type="text" class="input-field" name="dtype" value="<?php echo $dtype; ?>" /></label>
<label for="field3"><span>Sorting Type<span class="required">*</span></span><input type="text" class="input-field" name="stype" value="<?php echo $stype; ?>" /></label>
<label for="field2"><span>InStatus<span class="required">*</span></span><input type="text" class="input-field" name="instatus" value="<?php echo $instatus; ?>" /></label>
<label for="field2"><span>Email<span class="required">*</span></span><input type="text" class="input-field" name="email" value="<?php echo $email; ?>" /></label>
<label for="field2"><span>Booking ID<span class="required">*</span></span><input type="text" class="input-field" name="bid" value="<?php echo $bid; ?>" /></label>
<label for="field2"><span>Booking Date<span class="required">*</span></span><input type="text" class="input-field" name="bdate" value="<?php echo $bdate; ?>" /></label>
<label for="field2"><span>Passport No<span class="required">*</span></span><input type="text" class="input-field" name="passno" value="<?php echo $passno; ?>" /></label>

</div>

<div class="form-style-4">
<fieldset><legend>Batch Details</legend>
<label for="field2"><span>Batch Date<span class="required">*</span></span><input type="text" class="input-field" name="batchdate" value="" /></label>
<label for="field3"><span>Delivery Date<span class="required">*</span></span><input type="text" class="input-field" name="ddate" value="" /></label>
<label for="field3"><span>Rackid<span class="required">*</span></span><input type="text" class="input-field" name="rackid" value="" /></label>

</fieldset>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<fieldset><legend>Payment Details</legend>
<label for="field3"><span>Amount<span class="required">*</span></span><input type="text" class="input-field" name="amt" value="<?php echo $amt; ?>" /></label>
<label for="field9"><label for="field4"><span>Mode of Payment</span><select name="paytype" class="select-field">
<option value="Pick-up-Cash">Pick-up-Cash</option>
<option value="COD">COD</option>
<option value="Customer">Customer</option>
</select></label>
<label for="field2"><span>Quantity<span class="required">*</span></span><input type="text" class="input-field" name="qty" value="<?php echo $qty; ?>" /></label>
<label for="field2"><span>Description <span class="required">*</span></span><input type="text" class="input-field" name="descr" value="<?php echo $descr; ?>" /></label>
<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>

</fieldset>
</div> 
</form>


</div> 
&copy; 2010-2017 	
</body>
</html>

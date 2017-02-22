<html>
<body>

<form action="consulate.php" method="post">
 <div class = "form-style-3">
 
 <fieldset><legend> Enter your email ID:</legend>
  
           <label for="field3"><span>Email<span class="required">*</span></span>
		   <input type="text" class="input-field" id="email" name="email" /></label>

            
                
                           <input type="submit" value="Submit"  /></td>
          
    
		</fieldset>
		</div>
</form>
</body>
</html>










 
     

<?php
   //include('dbconnect.php');
   session_start();
   include_once 'dbconnect.php';
   $con = @mysql_connect("localhost", "root", "");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("consulate", $con);
//$sql="select * from accountdtl";
$result = mysql_query("select * from signup where email='$_POST[email]'");
while($rowval = mysql_fetch_array($result))
 {
$email= $rowval['email'];
$cid= $rowval['cid'];

}
mysql_close($con);

?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leopards AWBill</title>
<script type="text/javascript">
function enable_text(status)
{
status=status;	
	document.myform.scompname.disabled = status;
	document.myform.sconper.disabled = status;
	document.myform.sphone.disabled = status;
	document.myform.sflat.disabled = status;
	document.myform.sbuild.disabled = status;
	document.myform.sarea.disabled = status;
	document.myform.sstreet.disabled = status;
	document.myform.scity.disabled = status;
	document.myform.szip.disabled = status;
	document.myform.scountry.disabled = status;
	
	
	
}
function sender(){

	document.myform.scompname.value= "";
		document.myform.sconper.value= "";		
	document.myform.sphone.value= "";
		document.myform.sflat.value= "";		
	document.myform.sstreet.value= "";
		document.myform.sarea.value= "";		
	document.myform.scity.value= "";
		document.myform.szip.value= "";
			document.myform.scountry.value= "";

 
}
function consignee(){
	
	document.myform.ccompname.value= "";
		document.myform.ccontper.value= "";		
	document.myform.consphone.value= "";
		document.myform.cflat.value= "";		
	document.myform.cstreet.value= "";
		document.myform.carea.value= "";		
	document.myform.ccity.value= "";
		document.myform.czip.value= "";
			document.myform.ccountry.value= "";
}
</script>
<style type="text/css">
body{background:#eee;}
.testbox {
  margin: 20px auto;
  width: 343px; 
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
.form-style-6{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px 900px;
			margin-right: 800px;
		
			    
}
.form-style-6 label{
	display:block;
	margin-bottom: 10px;
}

.form-style-6 input:checked {
    height: 20px;
    width: 20px;
}

.form-style-6 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-6 img{
margin-top: -190px;
opacity: 0.2px;
}
.form-style-6 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	    margin: 0px 0px 10px 0px;
    border: 2px solid #FFD2D2;
    background: #b8b7af;
    padding: 20px;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-6 fieldset legend{
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
.form-style-6 textarea{
	width:250px;
	height:100px;
}
.form-style-6 input[type=text],
.form-style-6 input[type=date],
.form-style-6 input[type=datetime],
.form-style-6 input[type=number],
.form-style-6 input[type=search],
.form-style-6 input[type=time],
.form-style-6 input[type=url],
.form-style-6 input[type=email],
.form-style-6 select, 
.form-style-6 textarea{
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
.form-style-6  input[type=submit],
.form-style-6  input[type=button]{
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
.form-style-6 .required{
	color:red;
	font-weight:normal;
}



.form-style-1{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px 400px;
			margin-right: 100px;
			margin-top: -170px;
			    
}
.form-style-1 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-1 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-1 a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 10px 15px;
    text-align: right;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
.form-style-1 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	    margin: 0px 0px 10px 0px;
    border: 2px solid #FFD2D2;
    background: #ecce3b;
    padding: 20px;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-1 fieldset legend{
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
.form-style-1 textarea{
	width:250px;
	height:100px;
}
.form-style-1 input[type=text],
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
.form-style-1 select, 
.form-style-1 textarea{
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
.form-style-1  input[type=submit],
.form-style-1  input[type=button]{
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
.form-style-1 .required{
	color:red;
	font-weight:normal;
}




.form-style-2{
	max-width: 	350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px 400px;
			margin-top: -320px;
	}
.form-style-2 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-2 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-2 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	    margin: 50px 0px 10px -20px;
    border: 2px solid #FFD2D2;
    background: #e7e5e5;
    padding: 10px;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-2 fieldset legend{
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
.form-style-2 textarea{
	width:250px;
	height:100px;
}
.form-style-2 input[type=text],
.form-style-2 input[type=date],
.form-style-2 input[type=datetime],
.form-style-2 input[type=number],
.form-style-2 input[type=search],
.form-style-2 input[type=time],
.form-style-2 input[type=url],
.form-style-2 input[type=email],
.form-style-2 select, 
.form-style-2 textarea{
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
.form-style-2  input[type=submit],
.form-style-2  input[type=button]{
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
.form-style-2 .required{
	color:red;
	font-weight:normal;
}
.form-style-8{
	max-width: 	350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px 400px;
			margin-top: -1000px;
	}
.form-style-8 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-8 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-8 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	    margin: 200px 0px 10px -20px;
    border: 2px solid #FFD2D2;
    background: #e7e5e5;
    padding: 10px;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-8 fieldset legend{
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
.form-style-8 textarea{
	width:250px;
	height:100px;
}
.form-style-8 input[type=text],
.form-style-8 input[type=date],
.form-style-8 input[type=datetime],
.form-style-8 input[type=number],
.form-style-8 input[type=search],
.form-style-8 input[type=time],
.form-style-8 input[type=url],
.form-style-8 input[type=email],
.form-style-8 select, 
.form-style-8 textarea{
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
.form-style-8  input[type=submit],
.form-style-8  input[type=button]{
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
.form-style-8 .required{
	color:red;
	font-weight:normal;
}

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


.form-style-4{
	max-width: 350px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background: rgba() url() left top;
	    padding: 20px 0px 0px 400px;
    margin-right: 200px;
    margin-top: -350px;
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







.form-style-5{
	max-width: 400px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background: rgba() url() left top;
	    padding: 20px 0px 0px 730px;
    margin-right: 400px;
    margin-top: -290px;
}
.form-style-5 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-5 label > span{
	float: left;
	width: 150px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-5 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: -1000px 0px 10px 30px;
	border: 1px solid #FFD2D2;
	 background: #e7e5e5;
	padding: 10px;
	<!--background: #FFF4F4;-->
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
	margin-top: -100px;
}
.form-style-5 fieldset legend{
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
.form-style-5 textarea{
	width:250px;
	height:100px;
}
.form-style-5 input[type=text],
.form-style-5 input[type=date],
.form-style-5 input[type=datetime],
.form-style-5 input[type=number],
.form-style-5 input[type=search],
.form-style-5 input[type=time],
.form-style-5 input[type=url],
.form-style-5 input[type=email],
.form-style-5 select, 
.form-style-5 textarea{
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
	width:80%;

}
.form-style-5  input[type=submit],
.form-style-5  input[type=button]{
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
.form-style-5 .required{
	color:red;
	font-weight:normal;
}



.form-style-4{
	max-width: 350px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background: rgba() url() left top;
	    padding: 20px 0px 0px 370px;
    margin-right: 200px;
    margin-top: -400px;
}
.form-style- label{
	display:block;
	margin-bottom: 10px;
}
.form-style-7 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-7 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #FFD2D2;
	 background: #ecce3b;
	padding: 20px;
	<!--background: #FFF4F4;-->
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-7 fieldset legend{
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
.form-style-7 textarea{
	width:250px;
	height:100px;
}
.form-style-7 input[type=text],
.form-style-7 input[type=date],
.form-style-7 input[type=datetime],
.form-style-7 input[type=number],
.form-style-7 input[type=search],
.form-style-7 input[type=time],
.form-style-7 input[type=url],
.form-style-7 input[type=email],
.form-style-7 select, 
.form-style-7 textarea{
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
.form-style-7  input[type=submit],
.form-style-7  input[type=button]{
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
.form-style-7 .required{
	color:red;
	font-weight:normal;
}




#rig{float:right;}
* { margin: 0; padding: 0; }
body { font: 14px/1.4 Georgia, serif; }
#page-wrap { width: 800px; margin: 0 auto; background:white;margin-top:0px;}

textarea { border: 0;float: left; font: 20px arial, font-weight: bold; Serif; overflow: hidden;width:50%;
 }
table { border-collapse: collapse; float: right; }
table td, table th { border: 1px solid black; padding: 5px; }
#header1 { height: 35px; width: 40%; margin: 20px 0; background: black; text-align: center; color: #ecce3b; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 10px; padding: 8px 0px; }
#header { height: 10px; width: 100%; margin: 5px 0; background: #b8b7af; text-align: center; color: solid black; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 10px; padding: 8px 0px; }

#address { width: 100px; height: 150px; float: left; }
#customer { overflow: hidden; }

#logo { text-align: left; float: right; position: relative; margin-top: -20px; border: 1px solid #fff; max-width: 400px; max-height: 400px; border-background:#ecce3b;}
#logo:hover, #logo.edit { border: 1px solid #000; margin-top: 0px; max-height: 125px; }
#logoctr { display: none; }
#logo:hover #logoctr, #logo.edit #logoctr { display: block; text-align: right; line-height: 25px; background: #eee; padding: 0 5px; }
#logohelp { text-align: left; display: none; font-style: italic; padding: 10px 5px;}
#logohelp input { margin-bottom: 5px; }
.edit #logohelp { display: block; }
.edit #save-logo, .edit #cancel-logo { display: inline; }
.edit #image, #save-logo, #cancel-logo, .edit #change-logo, .edit #delete-logo { display: none; }
#customer-title { font-size: 20px; float: left; font-family:george; border:2px solid #b8b7af ;background white; }
#cp {margin-top: 20px; background:};
#meta { margin-top: -100px; width: 150px; float: right; font-weight: bold; }
#meta td { text-align: right;  }
#meta td.meta-head { text-align: left; background:#b8b7af;font-size: 15px;font-weight:bold; }
#meta td textarea { font-family:george;width: 100%; height: 20px; text-align: right;font-size: 15px;font-weight:bold; }




#items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
#items th { background:#b8b7af ; }
#items textarea { width: 80px; height: 50px; border-radius: 2px; border: 1px solid #ecce3b; }
#items tr.item-row td { border: 0; vertical-align: top; }
#items td.description { width: 300px; }
#items td.item-name { width: 175px; }
#items td.description textarea, #items td.item-name textarea { width: 80%; font-family: george; font-size:15px; font-weight:bold;}
#items td.total-line { border-right: 0; text-align: right; }
#items td.total-value { border-left: 0; padding: 10px;border: 1px solid black; }
#items td.total-value textarea { height: 20px; background: none; }
#items td.balance { background: #eee; }
#items td.blank { border: 0; }

#terms { text-align: center; margin: 20px 0 0 0; }
#terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0;font-weight;font-color:#ecce3b; }
#terms textarea { width: 100%; text-align: center;}

textarea:hover, textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#EEFF88; }

.delete-wpr { position: relative; }
.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }
</style>
<script type="text/javascript">
function myFunction() {
    window.print();
}
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
function print_today() {
  // ***********************************************
  // AUTHOR: WWW.CGISCRIPT.NET, LLC
  // URL: http://www.cgiscript.net
  // Use the script, just leave this message intact.
  // Download your FREE CGI/Perl Scripts today!
  // ( http://www.cgiscript.net/scripts.htm )
  // ***********************************************
  var now = new Date();
  var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
  var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
  function fourdigits(number) {
    return (number < 1000) ? number + 1900 : number;
  }
  var today =  months[now.getMonth()] + " " + date + ", " + (fourdigits(now.getYear()));
  return today;
}

// from http://www.mediacollege.com/internet/javascript/number/round.html
function roundNumber(number,decimals) {
  var newString;// The new rounded number
  decimals = Number(decimals);
  if (decimals < 1) {
    newString = (Math.round(number)).toString();
  } else {
    var numString = number.toString();
    if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
      numString += ".";// give it one at the end
    }
    var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
    var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
    var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
    if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
      if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
        while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
          if (d1 != ".") {
            cutoff -= 1;
            d1 = Number(numString.substring(cutoff,cutoff+1));
          } else {
            cutoff -= 1;
          }
        }
      }
      d1 += 1;
    } 
    if (d1 == 10) {
      numString = numString.substring(0, numString.lastIndexOf("."));
      var roundedNum = Number(numString) + 1;
      newString = roundedNum.toString() + '.';
    } else {
      newString = numString.substring(0,cutoff) + d1.toString();
    }
  }
  if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
    newString += ".";
  }
  var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
  for(var i=0;i<decimals-decs;i++) newString += "0";
  //var newNumber = Number(newString);// make it a number if you like
  return newString; // Output the result to the form field (change for your purposes)
}

function update_total() {
  var total = 0;
  $('.price').each(function(i){
    price = $(this).html().replace("$","");
    if (!isNaN(price)) total += Number(price);
  });

  total = roundNumber(total,2);

  $('#subtotal').html("$"+total);
  $('#total').html("$"+total);
  
  update_balance();
}

function update_balance() {
  var due = $("#total").html().replace("$","") - $("#paid").val().replace("$","");
  due = roundNumber(due,2);
  
  $('.due').html("$"+due);
}

function update_price() {
  var row = $(this).parents('.item-row');
  var price = row.find('.cost').val().replace("$","") * row.find('.qty').val();
  price = roundNumber(price,2);
  isNaN(price) ? row.find('.price').html("N/A") : row.find('.price').html("$"+price);
  
  update_total();
}

function bind() {
  $(".cost").blur(update_price);
  $(".qty").blur(update_price);
}

$(document).ready(function() {

  $('input').click(function(){
    $(this).select();
  });

  $("#paid").blur(update_balance);
   
  $("#addrow").click(function(){
    $(".item-row:last").after('<tr class="item-row"><td class="item-name"><div class="delete-wpr"><textarea>Item Name</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td><td class="description"><textarea>Description</textarea></td><td><textarea class="cost">$0</textarea></td><td><textarea class="qty">0</textarea></td><td><span class="price">$0</span></td></tr>');
    if ($(".delete").length > 0) $(".delete").show();
    bind();
  });
  
  bind();
  
  $(".delete").live('click',function(){
    $(this).parents('.item-row').remove();
    update_total();
    if ($(".delete").length < 2) $(".delete").hide();
  });
  
  $("#cancel-logo").click(function(){
    $("#logo").removeClass('edit');
  });
  $("#delete-logo").click(function(){
    $("#logo").remove();
  });
  $("#change-logo").click(function(){
    $("#logo").addClass('edit');
    $("#imageloc").val($("#image").attr('src'));
    $("#image").select();
  });
  $("#save-logo").click(function(){
    $("#image").attr('src',$("#imageloc").val());
    $("#logo").removeClass('edit');
  });
  
  $("#date").val(print_today());
  
});
</script>
</head>
<body>
 
        
<?php include 'dat.php';?>
    
<div class="page">
<!--
<img src="logo.jpg" alt="" height="100" width="100" align="middle">-->

  <?php include 'scrollc.php';?> 
<!--<input type="checkbox" name=others onclick="enable_text(this.checked)">Enable the shipper-->






<!--
<div class="form-style-1">
<form>
<fieldset><legend>Login Information</legend>

<label for="field3"><span>Username<span class="required">*</span></span><input type="text" class="input-field" name="scompname" value="" /></label>
<label for="field4"><span>Password<span class="required">*</span></span><input type="text" class="input-field" name="sconper" value="" /></label>

<a href="login.html" target="_blank">SignUp</a>
</fieldset>
</form>

</div>


<div class="form-style-6">
<form>
<fieldset><legend>Print Information</legend>

<label for="field3"><span>No. of Copies<span class="required">*</span></span><input type="text" class="input-field" name="scompname" value="" /></label>
  <input type="checkbox" name="vehicle" value="Bike"> Enabled<br>
  <input type="checkbox" name="vehicle" value="Car" checked> Disabled<br>
  <input type="submit" value="Submit">

</fieldset>
</form>
</div>
-->



<form action="dotmatrix.php" name="myform" method="post">


<div class="form-style-3">
<!--<input type="checkbox" name=others onclick="sender(this.checked)">Disable shipper-->
<fieldset><legend>Customer Details</legend>
<label for="field3"><span>Register Date<span class="required">*</span></span><input type="text" class="input-field" name="coundate" value="" /></label>

<label for="field3"><span>Email-ID<span class="required">*</span></span><input type="text" class="input-field" name="email" value="<?php echo $email; ?>" /></label>
<label for="field3"><span>Customer ID<span class="required">*</span></span><input type="text" class="input-field" name="cid" value="<?php echo $cid; ?>" /></label>
<label for="field2"><span>Passport No<span class="required">*</span></span><input type="text" class="input-field" name="passno" value="" /></label>
<label for="field4"><span>First Name<span class="required">*</span></span><input type="text" class="input-field" name="fname" value="" /></label>
<label for="field2"><span>Last Name<span class="required">*</span></span><input type="text" class="input-field" name="lname" value="" /></label>
<label for="field2"><span>Sur Name<span class="required">*</span></span><input type="text" class="input-field" name="sname" value="" /></label>
<label for="field2"><span>Issue Date<span class="required">*</span></span><input type="text" class="input-field" name="idate" value="" /></label>
<label for="field5"><span>Expiry Date<span class="required">*</span></span><input type="text" class="input-field" name="edate" value="" /></label>
<label for="field2"><span>Place Issue<span class="required">*</span></span><input type="text" class="input-field" name="pissue" value="" /></label>
<label for="field2"><span>Date of Birth<span class="required">*</span></span><input type="text" class="input-field" name="dob" value="" /></label>
<label for="field2"><span>nty<span class="required">*</span></span><input type="text" class="input-field" name="nty" value="" /></label>

<label for="field5"><span>Fathers Name<span class="required">*</span></span><input type="text" class="input-field" name="faname" value="" /></label>
<label for="field5"><span>Flat<span class="required">*</span></span><input type="text" class="input-field" name="flat" value="" /></label>
<label for="field6"><span>Building<span class="required">*</span></span><input type="text" class="input-field" name="build" value="" /></label>
<label for="field7"><span>Street <span class="required">*</span></span><input type="text" class="input-field" name="street" value="" /></label>
<label for="field8"><span>Area <span class="required">*</span></span><input type="text" class="input-field" name="area" value="" /></label>
<label for="field8"><span>Phone <span class="required">*</span></span><input type="text" class="input-field" name="phone" value="" /></label>

<label for="field9"><label for="field4"><span>City</span><select name="city" class="select-field">
<option value="Dubai">Dubai</option>
<option value="Abudhabi">Abudhabi</option>
<option value="Sharjah">Sharjah</option>
</select></label>

<!--</select></label>span>City <span class="required">*</span></span><input type="text" class="input-field" name="scity" value="" /></label>
<label for="field"><span>ZipCode <span class="required">*</span></span><input type="text" class="input-field" name="szip" value="" /></label>-->
<label for="field4"><span>Country</span><select name="country" class="select-field">
<option value="AF">Afghanistan</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AG">Antigua And Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia</option>
	<option value="BA">Bosnia &amp; Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="IO">Br Indian Ocean Terr</option>
	<option value="BR">Brazil</option>
	<option value="BN">Brunei</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="RY">Canary Is</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Is</option>
	<option value="CF">Central African Rep</option>
	<option value="TD">Chad</option>
	<option value="JE">Channel Islands</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Is</option>
	<option value="CC">Cocos Keeling Is</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CK">Cook Is</option>
	<option value="CR">Costa Rica</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="CD">Dem Rep Of The Congo</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="TP">East Timor</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Is</option>
	<option value="FO">Faroe Is</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard &amp; Mcdonald Islands</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle Of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="CI">Ivory Coast</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea North</option>
	<option value="KR">Korea South</option>
	<option value="XZ">Kosovo</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Laos</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macau</option>
	<option value="MK">Macedonia</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Is</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia</option>
	<option value="MD">Moldova</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="AN">Netherland Antilles</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Is</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestine</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn Is</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Reunion Is</option>
	<option value="RO">Romania</option>
	<option value="RU">Russia</option>
	<option value="RW">Rwanda</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome &amp; Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Is</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="HL">St Helena</option>
	<option value="KN">St Kitts &amp; Nevis</option>
	<option value="LC">St Lucia</option>
	<option value="PM">St Pierre &amp; Miquelon</option>
	<option value="VC">St Vincent&amp;Grenadine</option>
	<option value="SD">Sudan</option>
	<option value="SR">Surinam</option>
	<option value="SJ">Svalbard &amp; Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syria</option>
	<option value="TW">Taiwan</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Lestev</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad &amp; Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks &amp; Caicos Is</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UY">Uruguay</option>
	<option value="UM">Us Minor Outlying Is</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VA">Vatican City</option>
	<option value="VE">Venezuela</option>
	<option value="VN">Vietnam</option>
	<option value="VG">Virgin Is - British</option>
	<option value="VI">Virgin Islands - Us</option>
	<option value="WL">Wales</option>
	<option value="WF">Wallis &amp; Futuna Is</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>



</select></label>


</div>
  <div class="form-style-2">

<fieldset>
<legend>Payment Details</legend>
<!--<label for="field9"><label for="field4"><span>awbno</span><select name="awbno" class="select-field"></select></label>-->
<!--<label for="field3"><span>awbno<span class="required">*</span></span><input type="text" class="input-field" name="awbno" value="" /></label>-->
<label for="field2"><span>Quantity<span class="required">*</span></span><input type="text" class="input-field" name="qty" value="" /></label>
<label for="field2"><span>Cash Amount<span class="required">*</span></span><input type="text" class="input-field" name="amt" value="" /></label>
<label for="field2"><span>Description <span class="required">*</span></span><input type="text" class="input-field" name="descr" value="" /></label>
<label for="field9"><label for="field4"><span>Mode of Payment</span><select name="paytype" class="select-field">
<option value="Pick-up-Cash">Pick-up-Cash</option>
<option value="COD">COD</option>
<option value="Customer">Customer</option>
</select></label>
<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
</fieldset>
</div>
<div class="form-style-8">
<fieldset>
<legend>Booking Details</legend>
<label for="field9"><label for="field4"><span>Category Type</span><select name="stype" class="select-field">
<option value="">Passport</option>
<option value="">NIC</option>
<option value="">Other</option>
</select></label>
<label for="field9"><label for="field4"><span>Product Type</span><select name="ptype" class="select-field">
<option value="New Passport">New Passport</option>
<option value="Passport Renewal">Passport Renewal</option>
<option value="New NIC">New NIC</option>
<option value="NIC Renewal">NIC Renewal</option>
<option value="NIC Cancel">NIC Cancel</option>
<option value="Other">Other</option>
</select></label>
<label for="field9"><label for="field4"><span>Delivery Type</span><select name="dtype" class="select-field">
<option value="Top Urgent">Top Urgent</option>
<option value="Urgent">Urgent</option>
<option value="Normal">Normal</option>
</select></label>
<label for="field9"><label for="field4"><span>Processing City</span><select name="pcity" class="select-field">
<option value="Dubai">Dubai/sharjah</option>
<option value="Abudhabi">Abudhabi</option>
<option value="Other">Other</option>
</select></label>
<label for="field2"><span>ProcessTime<span class="required">*</span></span><input type="text" class="input-field" name="ptime" value="" /></label>
<label for="field2"><span>InStatus<span class="required">*</span></span><input type="text" class="input-field" name="instatus" value="" /></label>

</fieldset>

</div>

</form>





	
	

</body>
</html>

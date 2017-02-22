

<!DOCTYPE html >
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      
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
    background: #ecce3b;
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
			margin-top: -200px;
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
    border: 2px solid #D8DE87;
    background: #e7e5e5;
    padding: 10px;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-2 fieldset legend{
	color: #130108;
	border-top: 1px solid #D8DE87;
	border-left: 1px solid #D8DE87;
	border-right: 1px solid #D8DE87;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #D8DE87;
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
	border: 1px solid #D8DE87;
	outline: none;
	color: #130108;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #D8DE87;
	-moz-box-shadow: inset 1px 1px 4px #D8DE87;
	-webkit-box-shadow: inset 1px 1px 4px #D8DE87;
	background: #FFEFF6;
	width:50%;

}
.form-style-2  input[type=submit],
.form-style-2  input[type=button]{
background: #130108;
    border: 1px solid #D8DE87;
    padding: 5px 15px 5px 15px;
    color: #FFCBE2;
    /* box-shadow: inset -1px -1px 3px #D8DE87; */
    -moz-box-shadow: inset -1px -1px 3px #D8DE87;
    /* -webkit-box-shadow: inset -1px -1px 3px #D8DE87; */
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


.form-style-13{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px 400px;
			margin-top: -900px;
}
.form-style-13 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-13 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-13 fieldset{
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
.form-style-13 fieldset legend{
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
.form-style-13 textarea{
	width:250px;
	height:100px;
}
.form-style-13 input[type=text],
.form-style-13 input[type=date],
.form-style-13 input[type=datetime],
.form-style-13 input[type=number],
.form-style-13 input[type=search],
.form-style-13 input[type=time],
.form-style-13 input[type=url],
.form-style-13 input[type=email],
.form-style-13 select, 
.form-style-13 textarea{
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
.form-style-13  input[type=submit],
.form-style-13  input[type=button]{
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
.form-style-13 .required{
	color:red;
	font-weight:normal;
}

.form-style-13{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px -200px;
			margin-top: -20px;
}
.form-style-13 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-13 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-13 fieldset{
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
.form-style-13 fieldset legend{
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
.form-style-13 textarea{
	width:250px;
	height:100px;
}
.form-style-13 input[type=text],
.form-style-13 input[type=date],
.form-style-13 input[type=datetime],
.form-style-13 input[type=number],
.form-style-13 input[type=search],
.form-style-13 input[type=time],
.form-style-13 input[type=url],
.form-style-13 input[type=email],
.form-style-13 select, 
.form-style-13 textarea{
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
.form-style-13  input[type=submit],
.form-style-13  input[type=button]{
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
.form-style-13 .required{
	color:red;
	font-weight:normal;
}











.form-style-5{
	max-width: 400px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background: rgba() url() left top;
	    padding: 20px 0px 0px 730px;
    margin-right: 400px;
    margin-top: -630px;
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
	border: 1px solid #FFC58D;
	 background: #e7e5e5;
	padding: 10px;
	<!--background: #FFF4F4;-->
	box-shadow: inset 0px 0px 15px #FFC58D;
	-moz-box-shadow: inset 0px 0px 15px #FFC58D;
	-webkit-box-shadow: inset 0px 0px 15px #FFC58D;
	margin-top: -100px;
}
.form-style-5 fieldset legend{
	color: #130108;
	border-top: 1px solid #FFC58D;
	border-left: 1px solid #FFC58D;
	border-right: 1px solid #FFC58D;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #FFC58D;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #FFC58D;
	-moz-box-shadow:-0px -1px 2px #FFC58D;
	-webkit-box-shadow:-0px -1px 2px #FFC58D;
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
	border: 1px solid #FFC58D;
	outline: none;
	color: #130108;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #FFC58D;
	-moz-box-shadow: inset 1px 1px 4px #FFC58D;
	-webkit-box-shadow: inset 1px 1px 4px #FFC58D;
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



.form-style-7{
	max-width: 350px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background: rgba() url() left top;
	    padding: -400px 0px 0px -370px;
    margin-right: 200px;

}
.form-style-7 label{
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

.form-style-3{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px -200px;
			margin-top: 20px;
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


.form-style-4{
	max-width: 350px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background: rgba() url() left top;
	    padding: 0px 0px 0px 400px;
    margin-right: 300px;
    margin-top: -420px;
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
	border: 1px solid  #B5FFE5;
	 background: #e7e5e5;
	padding: 20px;
	<!--background: #FFF4F4;-->
	box-shadow: inset 0px 0px 15px  #B5FFE5;
	-moz-box-shadow: inset 0px 0px 15px #B5FFE5;
	-webkit-box-shadow: inset 0px 0px 15px  #B5FFE5;
}
.form-style-4 fieldset legend{
	color: #130108;
	border-top: 1px solid  #B5FFE5;
	border-left: 1px solid  #B5FFE5;
	border-right: 1px solid  #B5FFE5;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background:  #B5FFE5;
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
	border: 1px solid  #B5FFE5;
	outline: none;
	color: #130108;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #B5FFE5;
	-moz-box-shadow: inset 1px 1px 4px #B5FFE5;
	-webkit-box-shadow: inset 1px 1px 4px #B5FFE5;
	background: #FFEFF6;
	width:50%;

}
.form-style-4  input[type=submit],
.form-style-4  input[type=button]{
background: #D3E167;
    border: 1px solid #D3E167;
    padding: 5px 15px 5px 15px;
    color: #D8DE87;
    /* box-shadow: inset -1px -1px 3px #D8DE87; */
    -moz-box-shadow: inset -1px -1px 3px #D8DE87;
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

.form-style-8{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		   padding: -2500px 0px 0px 800px;
			
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
	    margin: 0px 0px 10px 0px;
    border: 2px solid #FFFEB5;
    background: #e7e5e5;
    padding: 20px;
	box-shadow: inset 0px 0px 15px #FFFEB5;
	-moz-box-shadow: inset 0px 0px 15px #FFFEB5;
	-webkit-box-shadow: inset 0px 0px 15px #FFFEB5;
}
.form-style-8 fieldset legend{
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


</style>
</head>
<body>
   
<div class="page">
<!--
<img src="logo.jpg" alt="" height="100" width="100" align="middle">-->
  <!--
  <div class="form-style-2">

<fieldset>
<legend>Booking Details</legend>
<!--<label for="field9"><label for="field4"><span>awbno</span><select name="awbno" class="select-field"></select></label>-->
<!--<label for="field3"><span>awbno<span class="required">*</span></span><input type="text" class="input-field" name="awbno" value="" /></label>
<label for="field3"><span>Counter ID<span class="required">*</span></span><input type="text" class="input-field" name="date" value="" /></label>
<label for="field3"><span>Counter Register Date<span class="required">*</span></span><input type="text" class="input-field" name="date" value="" /></label>


</div>-->
  
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

<p><a href=""></a> <em></em> <a href=""></a></p>
</body>
</html>

<form action="dot.php" name="myform" method="post">
 <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
<div class="form-style-3">
<input type="checkbox" name=others onclick="sender(this.checked)">Disable shipper
<fieldset><legend>Counter</legend>

<label for="field3"><span>Customer ID<span class="required">*</span></span>
<input type="text" class="input-field" ng-model="cid" class="form-control" name="cid" value="" /></label>
<label for="field3"><span>passno<span class="required">*</span></span>
<input type="text" class="input-field" name="passno" value="" /></label>
<label for="field3"><span>First Name<span class="required">*</span></span>
<input type="text" class="input-field" name="fname" value="" /></label>
<label for="field3"><span>Last Name<span class="required">*</span></span>
<input type="text" class="input-field" name="lname" value="" /></label>
<label for="field3"><span>Sur Name<span class="required">*</span></span>
<input type="text" class="input-field" name="sname" value="" /></label>

<label for="field3"><span>Fathers name<span class="required">*</span></span>
<input type="text" class="input-field" name="faname" value="" /></label>
<label for="field3"><span>Issue date<span class="required">*</span></span>
<input type="text" class="input-field" name="idate" value="" /></label>
<label for="field3"><span>Expiry Date<span class="required">*</span></span>
<input type="text" class="input-field" name="edate" value="" /></label>
<label for="field3"><span>Date of Birth<span class="required">*</span></span>
<input type="text" class="input-field" name="dob" value="" /></label>

<label for="field3"><span>Flat<span class="required">*</span></span>
<input type="text" class="input-field" name="flat" value="" /></label>
<label for="field3"><span>Building<span class="required">*</span></span>
<input type="text" class="input-field" name="build" value="" /></label>
<label for="field3"><span>Street<span class="required">*</span></span>
<input type="text" class="input-field" name="street" value="" /></label>
<label for="field3"><span>Area<span class="required">*</span></span>
<input type="text" class="input-field" name="area" value="" /></label>
<label for="field3"><span>city<span class="required">*</span></span>
<input type="text" class="input-field" name="city" value="" /></label>
<label for="field3"><span>country<span class="required">*</span></span>
<input type="text" class="input-field" name="country" value="" /></label>

</div>


<div class="form-style-4">
<fieldset>
<label for="field3"><span>Counter Date<span class="required">*</span></span>
<input type="text" class="input-field" name="coundate" value="" /></label>
<label for="field3"><span>Counter center<span class="required">*</span></span>
<input type="text" class="input-field" name="cc" value="" /></label>


<label for="field3"><span>Processing time<span class="required">*</span></span>
<input type="text" class="input-field" name="ptime" value="" /></label>
<label for="field3"><span>Product type<span class="required">*</span></span>
<input type="text" class="input-field" name="ptype" value="" /></label>
<label for="field3"><span>Delivery type<span class="required">*</span></span>
<input type="text" class="input-field" name="dtype" value="" /></label>
<label for="field3"><span>Processing City<span class="required">*</span></span>
<input type="text" class="input-field" name="pcity" value="" /></label>
<label for="field3"><span>ModeofPayment<span class="required">*</span></span>
<input type="text" class="input-field" name="paytype" value="" /></label>
<label for="field3"><span>Quantity<span class="required">*</span></span>
<input type="text" class="input-field" name="qty" value="" /></label>
<label for="field3"><span>Amount<span class="required">*</span></span>
<input type="text" class="input-field" name="amt" value="" /></label>
<label for="field3"><span>Description<span class="required">*</span></span>
<input type="text" class="input-field" name="descr" value="" /></label>
<label><input type="submit" value="Submit" /></label>
<input type="text" id="status" name="status" value="0" /></label>
<label for="field9"><label for="field4"><span>Status</span><select id="Status" name="status" class="select-field">
<option value="success">1</option>
<option value="pending">0</option>

</select></label>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>


</div>

</fieldset>


</div>

</div> 
	</form>
	
 <script>
function myFunction() {
    var status, voteable;
    status = Number(document.getElementById("status").value);
    if (isNaN(status)) {
        voteable = "Error in input";
    } else {
        voteable = (status < 1) ? "Pending" :  "success";
			
    }
    document.getElementById("demo").innerHTML = voteable;

}

function redirect()
{
    window.location.href="login.php";
}


</script>
</body>
</html>

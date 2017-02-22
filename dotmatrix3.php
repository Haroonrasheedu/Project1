<!DOCTYPE html>
<html>
<body>

<p>Input your age and click the button:</p>

<input type="text" id="status" name="status" value="0"  onclick="redirect();"/></label>


<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var status, voteable;
    status = Number(document.getElementById("status").value);
    if (isNaN(status)) {
        voteable = "Error in input";
    } else {
        voteable = (status < 1) ? "Cannot Make Booking, Your Passport is processing, please wait" :  window.location.href="booktest.php";
			
    }
    document.getElementById("demo").innerHTML = voteable;

}
function redirect()
{
    
}
</script>
</body>
</html>
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "consulate");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Escape user inputs for security
$arrdate = mysqli_real_escape_string($link, $_POST['arrdate']);

$fid = mysqli_real_escape_string($link, $_POST['fid']);
$vanid = mysqli_real_escape_string($link, $_POST['vanid']);

$batchid = mysqli_real_escape_string($link, $_POST['batchid']);

	$seqid = mysqli_real_escape_string($link, $_POST['csid']);
		
$cid = mysqli_real_escape_string($link, $_POST['cid']);
$ddate =  mysqli_real_escape_string($link, $_POST['ddate']);
$lockid = mysqli_real_escape_string($link, $_POST['lockid']);
$ptype = mysqli_real_escape_string($link, $_POST['ptype']);
$stype = mysqli_real_escape_string($link, $_POST['stype']);
$ddate = mysqli_real_escape_string($link, $_POST['ddate']);
$status = mysqli_real_escape_string($link, $_POST['status']);
$amt = mysqli_real_escape_string($link, $_POST['amt']);
$descr = mysqli_real_escape_string($link, $_POST['descr']);
$seqtype = mysqli_real_escape_string($link, $_POST['sseqtype']);
$qty = mysqli_real_escape_string($link, $_POST['qty']);
$rid = mysqli_real_escape_string($link, $_POST['rid']);
$rdate = mysqli_real_escape_string($link, $_POST['rdate']);










// attempt insert query execution
$sql = "INSERT INTO arrival (batchid, rdate, ptype, stype, status, amt, descr, qty, rid, seqtype, fid, cid, arrdate, vanid, lockid, ddate, colid) VALUES ('$batchid', '$rdate', '$ptype', '$stype', '$status', '$amt', '$descr', '$qty', '$rid', '$seqtype', '$fid', '$cid', '$arrdate', '$vanid', '$lockid', '$ddate', '$colid')";


if(mysqli_query($link, $sql)){
echo "1";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>


<html>
<head>
<title></title>

<style>
body{background:#eee;}
@font-face { font-family: kitfont; src: url('1979 Dot Matrix Regular.TTF'); } 

.customFont { /*  <div class="customFont" /> */
font-style: kitfont;
font-size:10;
}
#mainDiv {
height: 324px; /* height of receipt 4.5 inches*/
width: 700px;  /* weight of receipt 8.6 inches*/
position:relative; /* positioned relative to its normal position */
}
<!--#cqm { /*  <img id="cqm" /> */
top: 10px; /* top is distance from top (x axis)*/
left: 105px; /* left is distance from left (y axis)*/
position:absolute; /* position absolute based on "top" and "left"    parameters x and y  */
}-->

#or_mto { 
position: absolute;
left: 0px;
top: 0px;
z-index: -1; /*image */
}
    #date {
top: 20px;
left: -10px;
position:absolute;
font-size:12px;
}

 #accno {
top: 20px;
left: 250px;
position:absolute;
font-size:12px;
}
    #awbno {
top: 80px;
left: -10px;

} 
 #sconper{
top: 50px;
left: 30px;
position:absolute;
font-size:12px;
 }
 #scompname{
	top: 70px;
left: 30px;
position:absolute;
font-size:12px;
}
<!--#sflat{
top: 95px;
left: -10px;
position:absolute;
font-size:15px;
 }

 #sstreet{
	top: 110px;
left: -10px;
position:absolute;
font-size:15px;
 }
 #sarea{
	top: 75px;
left: -10px;
position:absolute;
font-size:15px;
 }
  #scity{
	top: 130px;
left: -10px;
position:absolute;
font-size:15px;
 }-->
  #sbuild{
top: 70px;
left: 30px;
position:absolute;
font-size:12px;
 }

 <!--#szip{
	top: 155px;
left: -10px;
position:absolute;
font-size:15px;
 }-->
#scountry{
	top:110px;
left: 30px;
position:absolute;
font-size:12px;
 } 

#sphone {
top: 130px;
left: 30px;
position:absolute;
font-size:12px;
}


#ccontper{
top: 50px;
left: 400px; /*   distance from right */
 text-align: left;
position:absolute;
font-size:12px;
}
#cconsphone{
top: 130px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
#ccompname{
top: 70px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
<!--#cflat{
top: 95px;
left: 370px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}-->
#cbuilding{
top: 70px;
left: 400px;/*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
<!--#cstreet{
	top: 135px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}
#carea{
	top: 115px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}-->
<!--#ccity{
	top: 135px;
right: 210px; /*   distance from right */
left:400px;
position:absolute;
font-size:15px;
}
#czip{
	top: 160px;
right: 200px; /*   distance from right */
left: 370px;
position:absolute;
font-size:15px;
}-->
#ccountry{
	top: 110px;
right: 140px; /*   distance from right */
left: 400px;
position:absolute;
font-size:12px;
}

#mode{
top: 170px;
right: -20px; /*   distance from right */
position:absolute;
font-size:12px;
}
#sinst{
top: 170px;
right: -10px; /*   distance from right */
position:absolute;
font-size:15px;
}
#pieces {
top: 240px;
right: 40px; /*   distance from right */
position:absolute;
font-size:15px;
}
#weight{
top: 240px;
right: -50px; /*   distance from right */
position:absolute;
font-size: 30px;
font-size:15px;
}
#amt{
top: 255px;
left: 300; /*   distance from right */
position:absolute;
font-size:15px;
}
#pickup{
top: 255px;
left: -10px; /*   distance from right */
position:absolute;
font-size:15px;
}

#descr{
top: 200px;
left: -10px; /*   distance from right */
position:absolute;
font-size:15px;
}

#query{
top: 200px;
left: -10px; /*   distance from right */
position:absolute;
font-size:15px;11111
1}


 </style>

</head>
<body>


</body>
</html>
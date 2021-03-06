<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "consulate");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Escape user inputs for security
$rid = mysqli_real_escape_string($link, $_POST['rid']);
$rdate = mysqli_real_escape_string($link, $_POST['rdate']);
$coundate = mysqli_real_escape_string($link, $_POST['coundate']);	
$cc = mysqli_real_escape_string($link, $_POST['cc']);
$cid = mysqli_real_escape_string($link, $_POST['cid']);

$batchid = mysqli_real_escape_string($link, $_POST['batchid']);
$batchdate = mysqli_real_escape_string($link, $_POST['batchdate']);
$sortype = mysqli_real_escape_string($link, $_POST['sortype']);
$bdate = mysqli_real_escape_string($link, $_POST['bdate']);
$status = mysqli_real_escape_string($link, $_POST['status']);
$stype = mysqli_real_escape_string($link, $_POST['stype']);
$pcity = mysqli_real_escape_string($link, $_POST['pcity']);
$dtype = mysqli_real_escape_string($link, $_POST['dtype']);
$ptype = mysqli_real_escape_string($link, $_POST['ptype']);
$paytype = mysqli_real_escape_string($link, $_POST['paytype']);
$qty = mysqli_real_escape_string($link, $_POST['qty']);
$amt = mysqli_real_escape_string($link, $_POST['amt']);
$descr = mysqli_real_escape_string($link, $_POST['descr']);
$pieces = mysqli_real_escape_string($link, $_POST['pieces']);



// attempt insert query execution
$sql = "INSERT INTO booking (rid, rdate, batchid, batchdate, bdate, coundate, sortype, cc, cid, status, stype, ptype, dtype, pcity, paytype, qty, pieces, amt, descr) VALUES ('$rid', '$rdate', '$batchid', '$batchdate', '$bdate', '$coundate', '$sortype', '$cc', '$cid', '$status', '$stype', '$ptype', '$dtype', '$pcity', '$paytype', '$pieces', '$qty', '$amt', '$descr')";


if(mysqli_query($link, $sql)){
echo $cid;
echo $rid;

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
font-size:15px;
}


 </style>

</head>
<body>

z
</body>
</html>
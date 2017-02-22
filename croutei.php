<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "leopards");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Escape user inputs for security

	//$awbno = mysqli_real_escape_string($link, $_POST['awbno']);
	$cid = mysqli_real_escape_string($link, $_POST['cid']);
$cname = mysqli_real_escape_string($link, $_POST['cname']);
$rid = mysqli_real_escape_string($link, $_POST['rid']);
$rname = mysqli_real_escape_string($link, $_POST['rname']);


// attempt insert query execution
$sql = "INSERT INTO croute (cid, cname, rid, rname) VALUES ('$cid', '$cname', '$rid', '$rname')";
$i=0;
if ( $i > $rid) {
  echo "rid is smaller than i";
  $i = $rid;
}
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
.invoice-box{
        max-width:300px;
        margin:0;
        padding:0px;
        border:0px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:10px;
        line-height:15px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:11px;
        line-height:10px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:10px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:5px;
     border-bottom:1px solid #ddd;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
		     border-bottom:1px solid #ddd;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:1px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
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
font-size:15px;
}
    #awbno {
top: 80px;
left: -10px;

} 
 #sconper{
top: 50px;
left: 30px;
position:absolute;
font-size:20px;
 }
 #scompname{
	top: 70px;
left: 30px;
position:absolute;
font-size:20px;
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
font-size:20px;
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
font-size:20px;
 } 

#sphone {
top: 130px;
left: 30px;
position:absolute;
font-size:30px;
}


#ccontper{
top: 50px;
left: 400px; /*   distance from right */
 text-align: left;
position:absolute;
font-size:20px;
}
#cconsphone{
top: 130px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:30px;
}
#ccompname{
top: 70px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:20px;
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
font-size:20px;
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
font-size:20px;
}

#mode{
top: 170px;
right: -20px; /*   distance from right */
position:absolute;
font-size:15px;
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

 <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="logo.jpg" style="width:70px; max-width:70px; border-radius: 3px;">
                            </td>
                            
                            <td>
                               </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
						
<tr class="heading">
                <td>
                  Consignee
                </td>
				<td>
				Shipper</td>
                </tr>
                            <td>
                                 </td>
                                 <td>
						
                                  </td>
                       
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                   Category
                </td>
                
                <td>
                    Type
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    </td>
                
                <td>
                       </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Pieces
                </td>
                
                <td>
                    Weight
                </td>
            </tr>
            
            <tr class="details">
                <td>
                         </td>
                
                <td>
                    </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Pickup 
                </td>
                
                <td>
                Description
                </td>
            </tr>
            
            <tr class="details">
                <td>
               </td>
                
                <td>
                </td>
            </tr>
                    <tr class="heading">
                <td>
                  Amount 
                </td>
                </tr>
				 <tr class="details">
                <td>
                </td>
            </tr>
    
            <tr class="total">
                <td></td>
                
                <td>
                NEW!!!
                </td>
            </tr>
        </table>
    </div>
<div id="mainDiv"> <!--  invisible space -->
<!--<div id="cqm" class="customFont"></div>
<!--<img id="or_mto" src="logo.jpg" /> <!---- sample for logo  ---->
</div>

</body>
</html>
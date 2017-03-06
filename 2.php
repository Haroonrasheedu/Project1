<?php
include("dbconnect.php");
session_start();
$_SESSION['date'] = 'doj';
$uid = $_SESSION['id']; 
if(isset($_SESSION['id']))
{
?>
<form  method="POST">
<td width="48" height="32" class="simpletext"> FROM: </td>
<td width="107"><div align="justify">
<select class="html-text-box"; font-style:oblique;      width:100px; font-    family:verdana; font-weight:bold" name="from">
<option value="" selected>:: Departure ::</option>
<option value="ABBOTTABAD">ABBOTTABAD</option>
<option value="BAHAWALPUR" >BAHAWALPUR</option>
<option value="CHINIOT" >CHINIOT</option>
<td width="24" align="right"  class="simpletext"><div align="center">TO:     </div></td>
</select>
<td width="107"  align="left"><select class="html-text-box"     font-  style:oblique; width:100px; font-family:verdana; font-weight:bold"  name="to">                    <option value="" selected>:: Arrival ::</option>
<option value="ABBOTTABAD">ABBOTTABAD</option>
<option value="BAHAWALPUR" >BAHAWALPUR</option>
</select>
<tr>
<td height="32" class="simpletext">DEPERATURE</td>
<td>            
<div data-date-format="yyyy-mm-dd" data-    date="document.write(date())"     class="input-append date myDatepicker"> <input type="text" value="" name="doj"   size="16" class="span2" required><span class="add-on"><i class="icon-calendar">     </i></span>                     
</div></td></div>
<td align="right"  class="simpletext">RETURN:</td>
<td><div data-date-format="yyyy-mm-dd" data-date="document.write(date())"   class="input-append date myDatepicker">
<input type="text" value="" name="doj" size="12" class="span2" required>
<span class="add-on"><i class="icon-calendar"></i></span> </div></td> 
</tr>
<tr>
<td height="34" colspan="4" align="center" valign="middle"><p>
<input type="submit" name="search" value="Search" onClick="return  callfrm(document.getElementById('currentdate').value);"  class="html-button">
<input type="submit" name="resert" value="Reset"  class="html- button">
</p>
<p>&nbsp;</p></td>
</tr>
</form>
<?php
require('dbconnect.php');
mysql_select_db("bus_reservation1 (1)");
if(isset($_POST['search']))
{
 
 $from = $_POST['from'];
 $to = $_POST['to'];
 
 $query = mysql_query("select * from schedule where Destinatio='$from' AND Arriva ='$to'");
$c = mysql_num_rows($query);
 
if (!$query) {
die('Invalid query: ' . mysql_error());
}
 
if($c>0)
 
{
?>
<table width="898" height="62" align="center" cellpadding="2"      cellspacing="2" class="table" bordercolor="#000000" b>
 
<tr align="center"><td width="120">Destination</td>
<td width="57">Arrival</td>
<td width="121">Departure time</td>
<td width="98">Arrival Time</td>
<td width="44">Fare</td>
<td width="85">Bus_type</td>
<td width="84">Total_Seats</td>
<td width="81">Available</td><td width="52">&nbsp;</td>
</tr>
</section>
<?php
while($r1 = mysql_fetch_array($query))
{
$schedule= $r1['id'];
$Destinatio = $r1['Destinatio'];
$Arriva= $r1['Arriva'];
$Departure_time = $r1['Departure_time'];
$Arrival_time = $r1['Arrival_time'];
$Fare = $r1['Fare'];
$Bus_type = $r1['Bus_type'];
$Total_Seats = $r1['Total_Seats'];
$bust = $schedule.'schedule';
$query1 = mysql_query("SELECT * from $bust where status='Available'");
echo $query1;
if (!$query1) {
die('Invalid query: ' . mysql_error());
}
 
$c = mysql_num_rows($query1);
?>
 
<tr align="center"><td><?php echo $Destinatio;?></td><td><?php echo     $Arriva;?></td><td><?php echo $Departure_time;?></td><td><?php echo  $Arrival_time;?></td><td><?php echo $Fare;?></td><td nowrap="nowrap"><?php echo $Bus_type;?></td><td><?php echo $c;?></td><td><a href="seat.php?id=<?php echo  $uid;?>&bus=<?php echo $schedule;?>">Book</a>
</td></tr></table>
<script>Cufon.now();</script>
<?php
}
else
{
header("Location:seat.php");
}
}
else
{
header("Location:index.php?id=$uid");
}
?>
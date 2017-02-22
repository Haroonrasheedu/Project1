<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Get Details of Specified Employee</title>

<script src="http://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript">
function getdetails() 
{
var cid=$('#cid').val();

$.ajax( {
type: "POST",
url: "server.php",
data: { cid:cid}

} ).done(function( result ) { 
//document.getElementById('txtname').innerHTML = result['empname'];
//.done(function( result ) { 
$("#lblid").html( result['status'] );

} );

}
</script>

</head>

<body>
<table width="577" border="1">
<tr>
<td width="142">Employee ID</td>
<td width="229"><label for="cid"></label>
<input type="text" name="cid" id="cid" /></td>
<td width="184"> </td>
</tr>
<tr>
<td> </td>
<td><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" önclick="getdetails()" /></td>
<td> </td>
</tr>
<tr>
<td>Employee Name</td>
<td><label for="txtname"></label>
<input type="text" name="status" id="status" /></td>
<td> </td>
</tr>
<tr>
<td>Employee Salary</td>
<td><label for="dtype"></label>
<input type="text" name="dtype" id="dtype" /></td>
<td> </td>
<td><label id="lblid">
</label>
</td>
</tr>

<tr>
<td><label id="lblid">
</label>
</td>
<td>
</td>
<td>
</td>
</tr>




</table>
</body>
</html>

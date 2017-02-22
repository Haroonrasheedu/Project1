<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "consulate");

$result = $conn->query("SELECT cc, city, status FROM count");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"cc":"'  . $rs["cc"] . '",';
    $outp .= '"city":"'   . $rs["city"]        . '",';
    $outp .= '"status":"'. $rs["status"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
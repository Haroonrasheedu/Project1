<?php
//database settings
$connect = mysqli_connect("localhost", "root", "", "consulate");

$result = mysqli_query($connect, "select * from colletion");

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);
?>
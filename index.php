<?php
header("Access-Control-Allow-origin:http://10.30.29.93:63341");
header("Access-Control-Allow-Credentials:true");
$username=array("userName"=>1);
echo json_encode($username);
?>


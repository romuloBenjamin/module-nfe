<?php session_start();
$data = json_decode($_SESSION["usuarios"]);
echo json_encode($data[2]->scanners);

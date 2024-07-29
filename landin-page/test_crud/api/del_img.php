<?php include_once "base.php";
$row = $_GET;
$Images->del($row);
to("../index.php");

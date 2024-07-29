<?php include_once "base.php";
$row = $_GET;
$Tests->del($row);
to("../index.php");

<?php include_once "base.php";
$row = $_GET;
$Tests->save($row);
to("../index.php");

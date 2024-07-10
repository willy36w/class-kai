<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=teacher";
$pdo = new PDO($dsn, 'root', '');

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$data = $_POST;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$sql = "INSERT INTO `teachers`(`id`, `acc`, `pw`) VALUES (NULL,'{$data["acc"]}','{$data["pw"]}')";
$conn->exec($sql);
// header("Location:./index.php");
?>
<div>
    <h2>登入成功</h2>
    <button>
        <a href="./index.php">返回新增頁面</a>
    </button>
</div>
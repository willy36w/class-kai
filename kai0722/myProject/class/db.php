<?php


class DB
{
    public $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db0722";

        $this->conn = new mysqli($servername, $username, $password, $dbname);
    }
}





function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

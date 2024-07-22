<?php


class DB
{
    public $name;
    protected $table;
    protected $conn;

    public function __construct($table)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db0722";

        $this->conn = new mysqli($servername, $username, $password, $dbname);
        $this->table = $table;
        echo "Hello new $table";
    }

    protected function getAll()
    {
        $sql = "SELECT * FROM students";
        $data =  $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        // dd($data);
        return $data;
    }

    public function getAllSetRank()
    {
        $sql = "SELECT * FROM students";
        $data =  $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        // $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            if ($value['id'] >= 5) {
                $tmp[$key]['rank'] = 2;
            } else {
                $tmp[$key]['rank'] = 1;
            }
        }
        // dd($tmp);

        return $tmp;
    }


    public function setRank()
    {
        $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            if ($value['id'] >= 5) {
                $tmp[$key]['rank'] = 2;
            } else {
                $tmp[$key]['rank'] = 1;
            }
        }
        // dd($tmp);
        return $tmp;
    }

    // add
    public function store($data)
    {
        $data['name'] = $data['name'] . '_Hello';

        $sql = "
        INSERT INTO
            `students` (`id`, `name`, `mobile`)
        VALUES
            (NULL, '{$data['name']}', '{$data['mobile']}');
        ";
        // dd($sql);

        // Array
        // (
        //     [name] => aaa
        //     [mobile] => 123
        // )


        $this->conn->query($sql);
        header('Location: http://localhost/all-teacher/my/class-kai/kai0722/myProject/view/student/index.php');
        exit();
    }
    public function del($arg)
    {
        $sql = "delete from `$this->table`";
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id`= '$arg'";
        }
        return $this->pdo->exec($sql);
        header('Location: http://localhost/all-teacher/my/class-kai/kai0722/myProject/view/student/index.php');
    }
}





function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

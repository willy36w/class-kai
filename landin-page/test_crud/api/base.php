<?php

// class DB
// {
//     protected $table;
//     protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
//     protected $pdo;

//     public function __construct($table)
//     {
//         $this->table = $table;
//         $this->pdo = new PDO($this->dsn, 'root', '');
//     }

//     protected function a2s($array)
//     {
//         $tmp = [];
//         foreach ($array as $key => $value) {
//             $tmp[] = "`$key` = '$value'";
//         }
//         return $tmp;
//     }

//     public function all(...$arg)
//     {
//         $sql = " select * from `$this->table`";
//         if (isset($arg[0])) {
//             if (is_array($arg[0])) {
//                 $tmp = $this->a2s($arg[0]);
//                 $sql .= " where " . join(" && ", $tmp);
//             } else {
//                 $sql .= $arg[0];
//             }
//         }
//         if (isset($arg[1])) {
//             $sql .= $arg[1];
//         }
//         return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//     }

//     public function count(...$arg)
//     {
//         $sql = " select count(*) from `$this->table`";
//         if (isset($arg[0])) {
//             if (is_array($arg[0])) {
//                 $tmp = $this->a2s($arg[0]);
//                 $sql .= " where " . join(" && ", $tmp);
//             } else {
//                 $sql .= $arg[0];
//             }
//         }
//         if (isset($arg[1])) {
//             $sql .= $arg[1];
//         }
//         return $this->pdo->query($sql)->fetchColumn();
//     }

//     public function find($arg)
//     {
//         $sql = " select * form `$this->table`";
//         if (is_array($arg)) {
//             $tmp = $this->a2s($arg);
//             $sql .= " where " . join(" && ", $tmp);
//         } else {
//             $sql .= " where `id` = '$arg'";
//         }
//         return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
//     }

//     public function del($arg)
//     {
//         $sql = " select * from `$this->table`";
//         if (is_array($arg)) {
//             $tmp = $this->a2s($arg);
//             $sql .= " where " . join(" && ", $tmp);
//         } else {
//             $sql .= " where `id` = '$arg'";
//         }
//         return $this->pdo->exec($sql);
//     }

//     public function save($arg)
//     {
//         if (isset($arg['id'])) {
//             $tmp = $this->a2s($arg);
//             $sql = " update `$this->table` set " . join(",", $tmp);
//             $sql .= " where `id` = '{$arg['id']}'";
//         } else {
//             $keys = array_keys($arg);
//             $sql = " insert into `$this->table` (`" . join("`,`", $keys) . "`) values('" . join("','", $arg) . "')";
//         }
//         return $this->pdo->exec($sql);
//     }
// }
// function dd($array)
// {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";
// }
// function q($sql)
// {
//     $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
//     $pdo = new PDO($dsn, 'root', '');
//     $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// }
// function to($url)
// {
//     header("location:" . $url);
// }

// $Tests = new DB("tests");
// dd($Tests->all());


class DB
{
    protected $table;
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
    // protected $dsn = "mysql:host=localhost;charset=utf8;dbname=s1130103";
    protected $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
        // $this->pdo = new PDO($this->dsn, 's1130103', 's1130103');
    }

    protected function a2s($array)
    {
        $tmp = [];
        foreach ($array as $key => $value) {
            $tmp[] = "`$key` = '$value'";
        }
        return $tmp;
    }

    public function all(...$arg)
    {
        $sql = " select * from `$this->table`";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function count(...$arg)
    {
        $sql = " select count(*) from `$this->table`";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchColumn();
    }

    public function find($arg)
    {
        $sql = " select * from `$this->table`";
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id` = '$arg'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function del($arg)
    {
        $sql = " delete from `$this->table`";
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id` = '$arg'";
        }
        return $this->pdo->exec($sql);
    }

    public function save($arg)
    {
        if (isset($arg['id'])) {
            $tmp = $this->a2s($arg);
            $sql = " update `$this->table` set " . join(",", $tmp);
            $sql .= " where `id` = {$arg['id']}";
        } else {
            $keys = array_keys($arg);
            $sql = " insert into `$this->table` (`" . join("`,`", $keys) . "`)  value('" . join("','", $arg) . "')";
        }
        return $this->pdo->exec($sql);
    }
}

function q($sql)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
    $pdo = new PDO($dsn, 'root', '');
    $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function to($url)
{
    header("location:" . $url);
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$Tests = new DB("tests");
$Images = new DB("images");
// dd($Tests->all());
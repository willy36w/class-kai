<?php
// date_default_timezone_set('Asia/Taipei');
// session_start();

class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
    protected $user = 'root';
    protected $pw = '';
    public $table;
    protected $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, $this->user, $this->pw);
        // dd($this->table);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $data = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // public function store(){
    //     $sql = "INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'dat', '0944-444-444');";
    //     $this->pdo->exec($sql);
    // }

    public function store($data)
    {
        // dd($data);
        //         Array
        // (
        //     [name] => tmpA
        //     [mobile] => tmpA-Tel
        // )
        $sql = "INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, '{$data['name']}' , '{$data['mobile']}');";
        // dd($sql);
        // $sql = "INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, 'dat', '444');";
        $this->pdo->exec($sql); 
    }

    // public function update(){
    //     $sql = "UPDATE `students` SET `name` = 'tmpAAA-55', `mobile` = 'tmpAAA-55688' WHERE `students`.`id` = 9;";
    //     $this->pdo->exec($sql);
    // }


    public function update($data){
        dd($data);
        $id = $data['id'];
        // dd($id);
        $sql = "UPDATE `students` SET `name` = '{$data['name']}', `mobile` = '{$data['mobile']}' WHERE `students`.`id` = $id;";
        $this->pdo->exec($sql);
    }

    public function del($id){
        $sql = "DELETE FROM students WHERE `students`.`id` = $id";
        $this->pdo->exec($sql); 
    }
  
}



function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

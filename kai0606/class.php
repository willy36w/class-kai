<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

class Animal{
    public $name='animal';
    protected $age=12;
    private $weight=20;
//  建構子__construct()，初始化屬性
public function __construct($name = 'animal')
    {
        // =是指定運算子不是等於
        $this->name = $name;
    }

public function intro()
   {

    $name = $this->name;
    $run = "running faster";

    echo "This is a $name, it is $run.";
    
   }

}

class Taiger extends Animal
{
    public $name='taiger';

    public function run()
   {
    echo "the taiger is running ";
    echo $this->speed();
    echo " Age: " .$this->age;
   }

   public function speed()
   {
    return 'low speed';
   }
}

// 上述為規劃書，下面才是物件導向的內容
// 設定一個物件

$cat = new Animal('cat');
$cat->intro();
echo "<br>";
$taiger = new taiger('taiger');
$taiger->run();
// $cat->$name;
// $dog = new Animal('Tom');
// $dog->run();
// $cat = new Cat();

// echo $cat->name;
// echo $cat->run();
// echo $cat->speed();
// echo $cat->weight;


?>
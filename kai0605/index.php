<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


class Car 
{
    // Properties公開
    public $name;
    public $type;

    // methods連結
    public function intro(){
        // name的變數 = class是name
        $nowName = $this->name;
        // type的變數 = class是type
        $nowType = $this->type;
        // 文字的變數 = 字串+變數
        $introText = "This car is $nowName , type is $nowType";
        // 宣告這個變數
        echo "$introText <br>";
        // return $introText;
    }
    public function sell($data){
        $nowName = $this->name;
        $nowType = $this->type;
        $result = "This car is $nowName , type is $nowType , sell for $data 佰萬";
        echo "$result <br>";
        // return $introText;
    }
  }

// 繼承

// 在封裝建立一個新車new，並給它一個變數
$Benz = new Car();
// 指定變數的名字
$Benz->name = 'Benz';
// 指定變數的種類
$Benz->type = 'Bus';
// dd這個變數顯示在畫面上
dd($Benz);
// 指定變數套用在intro()的封裝
$Benz->intro();
// 指定變數套用在sell(只能放數字(值))的封裝
$Benz->sell(250);

$toyota = new Car();
$toyota->name = 'Camry';
$toyota->type = 'Hybrid car';
dd($toyota);
$toyota->intro();
$toyota->sell(100);

$chariot = new Car();
$chariot->name = 'CM11';
$chariot->type = 'Armored fighting vehicle';
dd($chariot);
$chariot->intro();
$chariot->sell(-1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQ串PHP</title>
    <style>
        body {
            width: 100%;
            height: 97vh;
            /* background-color: aqua; */
            font-size:40px;
            font-family:'標楷體';
        }

        table {
            width: 98%;
            height: 600px;
            border: 10px solid black;
            border-collapse: collapse;
            margin: auto;
        }

        tr,
        td,
        th {
            width: 100px;
            height: 100px;
            border: 8px solid black;
            /* background-color: lightgreen; */
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>PIC</td>
            <td>PRICE</td>
        </tr>
        <tr>
            <td>壹</td>
            <td>meekee小嵐 立式吹風機Pro</td>
            <td><img src="./image/pic1jpg.jpg" alt="" width="25%"></td>
            <td>NTD 8990</td>
        </tr>
        <tr>
            <td>貳</td>
            <td>Dyson Supersonic™ 吹風機 HD15 桃紅色</td>
            <td><img src="./image/pic2.jpg" alt="" width="30%"></td>
            <td>NTD 11,900</td>
        </tr>
        <tr>
            <td>參</td>
            <td>meekee小嵐 立式吹風機</td>
            <td><img src="./image/pic3.jpg" alt="" width="25%"></td>
            <td>NTD 3990</td>
        </tr>
        <tr>
            <td>肆</td>
            <td>SE 高速負離子吹風機+標準滑順吹嘴</td>
            <td><img src="./image/pic4.jpg" alt="" width="30%"></td>
            <td>NTD 3490</td>
        </tr>
    </table> -->

    <table>
        <!-- 威儒教 -->
<?php
$item=['0'=>['ID','NAME','PIC','PRICE'],
       '1'=>['壹','meekee小嵐 立式吹風機Pro','<img src="./image/pic1jpg.jpg" alt="" width="25%">','NTD 8990'],
       '2'=>['貳','Dyson Supersonic™ 吹風機 HD15 桃紅色','<img src="./image/pic2.jpg" alt="" width="30%">','NTD 11,900'],
       '3'=>['參','meekee小嵐 立式吹風機','<img src="./image/pic3.jpg" alt="" width="25%">','NTD 3990'],
       '4'=>['肆','SE 高速負離子吹風機+標準滑順吹嘴','<img src="./image/pic4.jpg" alt="" width="30%">','NTD 3490']];

for($i=0; $i<=4; $i++){
    echo "<tr>";
    echo "<td>";
    echo $item[$i][0];
    echo "</td>";
    echo "<td>";
    echo $item[$i][1];
    echo "</td>";
    echo "<td>";
    echo $item[$i][2];
    echo "</td>";
    echo "<td>";
    echo $item[$i][3];
    echo "</td>";
    echo "</tr>";
}

?>
    </table>

    <!-- 老師教 -->

<?php

function dd($data)
{
echo "<pre>";
print_r($data);
echo "</pre>";
};

$data = [
    ['id' => 1,'name' => 'meekee小嵐 立式吹風機Pro','pic' => 'pic1jpg.jpg','price' =>'NTD 8990'],
    ['id' => 2,'name' => 'Dyson Supersonic™ 吹風機 HD15 桃紅色','pic' => 'pic2.jpg','price' =>'NTD 11,900'],
    ['id' => 3,'name' => 'meekee小嵐 立式吹風機','pic' => 'pic3.jpg','price' =>'NTD 3990'],
    ['id' => 4,'name' => 'SE 高速負離子吹風機+標準滑順吹嘴','pic' => 'pic4.jpg','price' =>'NTD 3490']
];

?>


    <table>
        <tr>
            <th width="8%">ID</th>
            <th width="15%">NAME</th>
            <th width="100%">PHOTO</th>
            <th>PRICE</th>
        </tr>
        <?php foreach ($data as $key => $value) : ?>
        <tr>
            <td>
                <?=$value['id']; ?>
            </td>
            <td>
                <?=$value['name']; ?>
            </td>
            <td>
                <?php
                 $tmpurl = "./image/{$value['pic']}";
                ?>
                <img src="<?= $tmpurl;?>" alt="" srcset="">
            </td>
            <td>
                <?= $value['price']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        
    </table>
</body>

</html>
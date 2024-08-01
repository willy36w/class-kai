<?php include_once "base.php";
$dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
$pdo = new PDO($dsn, 'root', '');
// $dsn = "mysql:host=localhost;charset=utf8;dbname=s1130103";
// $pdo = new PDO($dsn, 's1130103', 's1130103');
$file = $_POST;
dd($file);
dd($_FILES);
if (!empty($file['text'])) {
    $sql = " update `images` set " . "`text`='{$file['text']}'" . " WHERE `id` = '{$file['id']}'";
    // $pdo->exec($sql);
    // to("../index.php");
}
if (!empty($_FILES['file']['tmp_name'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], "../images/" . $_FILES['file']['name']);
    // $sql = "insert into `images`(`img`,`text`) value('{$_FILES['img']['name']}','{$_POST['text']}')";
    $sql = " update `images` set " . "`text`='{$file['text']}',`img` = '{$_FILES['file']['name']}'" . " WHERE `id` = '{$file['id']}'";
    // echo $sql;
    // $pdo->exec($sql);
    // to("../index.php");
}

// Array
// (
//     [file] => Array
//         (
//             [name] => image-11.jpg
//             [full_path] => image-11.jpg
//             [type] => image/jpeg
//             [tmp_name] => C:\xampp\tmp\php4BF7.tmp
//             [error] => 0
//             [size] => 164175
//         )

// )
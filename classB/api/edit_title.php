<?php
include_once "base.php";

foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $Title->del($id);
        // $sql = "delete from `title` where id='$id'";
        // $pdo->exec($sql);
    } else {
        $row = $Title->find($id);
        $row['text'] = $_POST['text'][$key];
        $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
        $Title->save($row);
        // if (isset($_POST['sh']) && $_POST['sh'] == $id) {
        //     $sql = "update `title` set `text`='{$_POST['text'][$key]}',`sh`='1' where id='$id'";
        // } else {
        //     $sql = "update `title` set `text`='{$_POST['text'][$key]}',`sh`='0' where id='$id'";
        // }
        // $pdo->exec($sql);
    }
}

to("../admin.php?do=title");

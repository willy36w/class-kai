<?php
include_once "../api/base.php";
$row = $_GET;
$data = $Tests->find($row['id']);
// dd($data);
?>
<form action="../api/save.php" method="get">
    <div>
        <label for="">姓名 : </label>
        <input type="text" class="form-control" name="name" value="<?= $data['name'] ?>">
    </div>
    <div>
        <label for="">電話 : </label>
        <input type="text" class="form-control" name="number" value="<?= $data['number'] ?>">
    </div>
    <div>
        <label for="">地址 : </label>
        <input type="text" class="form-control" name="adr" value="<?= $data['adr'] ?>">
    </div>
    <div>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
    </div>
    <div>
        <input type="submit" value="確認">
        <input type="reset" value="重置">
    </div>
</form>
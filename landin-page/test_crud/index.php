<?php include "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>測試</title>
    <style>
        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">簡易圖片、文字CRUD操作</h1>
    <table class="table table-bordered mt-3 text-center">
        <tr>
            <th width="20%">Name</th>
            <th width="20%">Number</th>
            <th width="30%">Adr</th>
            <th width="10%">Option</th>
        </tr>
        <?php
        $rows = $Tests->all();
        foreach ($rows as $row => $value) {
        ?>
            <tr>
                <td><?= $value['name'] ?></td>
                <td><?= $value['number'] ?></td>
                <td><?= $value['adr'] ?></td>
                <td style="display: flex;">
                    <button onclick="location.href='./backend/edit.php?id=<?= $value['id'] ?>'">編輯</button>
                    <button onclick="location.href='./api/del.php?id=<?= $value['id'] ?>'">刪除</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="./backend/add.php"><button>新增</button></a>
    <hr>

    <div class="container mt-3">
        <table class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th style="width: 10%;">ID</th>
                    <th>圖片</th>
                    <th>文字</th>
                    <th style="width: 5%;">顯示</th>
                    <th style="width: 10%;">option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $imgs = $Images->all();
                foreach ($imgs as $img => $value) {
                ?>
                    <tr>
                        <td><?= $value['id']; ?></td>
                        <td>
                            <img src="./images/<?= $value['img']; ?>" alt="" style="width: 30%;">
                        </td>
                        <td>
                            <input type="text" name="text" id="text" value="<?= $value['text'] ?>">
                        </td>
                        <td><input type="checkbox" name="sh" id="" value="<?= $value['id'] ?>"></td>
                        <td style="display: flex;">
                            <a href="./api/del_img.php?id=<?= $value['id'] ?>"><button>刪除</button></a>
                            <a href="./backend/edit_img.php?id=<?= $value['id'] ?>"><button>編輯</button></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div>
            <a href="./backend/add_img.php"><button>新增</button></a>
        </div>
        <br>
    </div>
</body>

</html>
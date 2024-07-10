<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=teacher";
$pdo = new PDO($dsn, 'root', '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>

<body>
    <form action="login.php" method="post">
        <div>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="pw">密碼:</label>
            <input type="number" name="pw" id="pw">
        </div>
        <div>
            <input type="submit" value="確認">
            <input type="reset" value="重置">
        </div>
    </form>
    <?php
    $sql = "SELECT * FROM `teachers`";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo "資料庫連接測試成功，以下是資料表中的數據：<br>";
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    } else {
        echo "資料表中沒有數據。";
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- js or jqery -->
    <script>

    </script>
</body>

</html>
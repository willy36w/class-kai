<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    [
        'id' => 1,
        'name' => 'Dean',
        'chinese' => 80,
        'english' => 86,
        'math' => 84,
    ],
    [
        'id' => 2,
        'name' => 'Ray',
        'chinese' => 98,
        'english' => 95,
        'math' => 96,
    ],
    [
        'id' => 3,
        'name' => 'Steven',
        'chinese' => 87,
        'english' => 86,
        'math' => 89,
    ],
];

// dd($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>

    </style>
</head>

<body>
    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>國文</th>
                    <th>英文</th>
                    <th>數學</th>
                    <th>sum</th>
                    <th>svg</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <?php
                        $tmpsum = 0;
                        $tmpsum = $value['chinese'] + $value['english'] + $value['math'];
                        $tmpsvg = 0;
                        $tmpsvg = round(($tmpsum / 3), 1);
                        ?>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['chinese'] ?></td>
                        <td><?= $value['english'] ?></td>
                        <td><?= $value['math'] ?></td>
                        <td><?= $tmpsum ?></td>
                        <td><?= $tmpsvg ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>

    </script>

</body>

</html>
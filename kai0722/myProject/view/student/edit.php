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

    <div class="container mt-3">
        <h3>
            Student Edit
        </h3>
    </div>
    <div class="container mt-3">
        
        <div class="row">
            <div class="col-12 mt-3">
                <label for="">ID ==> </label>
                <!-- <input type="text" class="form-control" name="" value="1" > -->
                 <span>1</span>
            </div>
            <div class="col-12 mt-3">
                <label for="">name</label>
                <input type="text" class="form-control" name="" id="" value="amy">
            </div>
            <div class="col-12 mt-3">
                <label for="">mobile</label>
                <input type="text" class="form-control" name="" id="" value="0911-111-111">
            </div>
            <div class="col-12 mt-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Button</button>
                </div>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "get",
                url: "url",
                data: "data",
                dataType: "json",
                success: function (response) {
                }
            });

        });
        // jquery end

    </script>
</body>

</html>
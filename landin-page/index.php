<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理員登入</title>
    <style>
        * {
            box-sizing: border-box;
            overflow: hidden;
        }

        body {
            background-image: url("./images/img13.jpg");
            background-size: cover;
            padding-top: 200px;
            height: 100vh;
        }

        .container {
            color: white;
            width: 400px;
            padding: 20px;
            margin: auto;
            border: 3px solid black;
            border-style: outset;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container:hover {
            box-shadow: 0 0 45px rgba(0, 0, 0, 0.5);
        }

        .form-container {
            display: flex;
            flex-direction: column;
        }

        .form-container div {
            margin: 10px 0;
        }

        .form-container label {
            margin-right: 10px;
        }

        .tooltip {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid black;
            padding: 10px;
            border-radius: 10px;
            z-index: 1000;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            color: black;
        }

        @media only screen and (max-width: 40em) {
            body {
                background-repeat: no-repeat;
                background-image: url("./images/img16.jpg");
                background-size: cover;

            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="pointer">
            <img src="./images/img15.jpg" id="pointer-img" style="width: 100px;border-radius: 25px;cursor: pointer;">
        </div>
        <div class="form-container">
            <div style="font-size: 35px;">管理員登入</div>
            <div>
                <label for="acc">帳號 :</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div>
                <label for="password">密碼 :</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <button type="button" onclick="checkLogin()">確認</button>
                <button type="reset" onclick="resetTooltip()">重置</button>
            </div>
        </div>
    </div>
    <div class="tooltip" id="tooltip">請登入管理者頁面</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pointer-img').hover(
                function(event) {
                    var tooltip = $('#tooltip');
                    tooltip.css({
                        top: event.pageY + 10 + 'px',
                        left: event.pageX + 10 + 'px'
                    }).fadeIn();
                },
                function() {
                    $('#tooltip').fadeOut();
                }
            );

            $('#pointer-img').mousemove(function(event) {
                $('#tooltip').css({
                    top: event.pageY + 10 + 'px',
                    left: event.pageX + 10 + 'px'
                });
            });
        });

        function checkLogin() {
            var acc = document.getElementById('acc').value;
            var password = document.getElementById('password').value;
            var tooltip = document.getElementById('tooltip');
            var pointerImg = document.getElementById('pointer-img');

            if (acc === 'willy' && password === '1234') {
                // 登入成功
                pointerImg.src = './images/img06.jpg';
                tooltip.innerHTML = '登入成功';

                setTimeout(function() {
                    window.location.href = 'https://wda.mackliu.com/s1130103/landin-page/test_crud/index.php';
                }, 2000); // 等待2秒後跳轉
            } else {
                // 登入失敗
                pointerImg.src = './images/img05.jpg';
                tooltip.innerHTML = '請重新登入';

                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 2000); // 等待2秒後跳轉
            }
        }

        function resetTooltip() {
            var tooltip = document.getElementById('tooltip');
            var pointerImg = document.getElementById('pointer-img');

            tooltip.innerHTML = '請登入管理者頁面';
            pointerImg.src = './images/img04.jpg';
        }
    </script>
</body>

</html>
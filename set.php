
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .as{
            width: 100%;
            height: 400px;
            background: #333;
        }
        .xs{
            float: right;
            color: red;
        }
    </style>
</head>
<body>
    <!-- 方法1 -->
    <?php if( empty($_COOKIE['val']) || $_COOKIE['val'] !== 'value' ): ?>
        <div class="as">
            <a class="xs" href="delete.php">点击消失</a>
        </div>
    <?php endif ?>


</body>
</html>
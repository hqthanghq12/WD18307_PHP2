<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
        </tr>
        <?php  foreach ($listProuct as $value){ ?>
        <tr>
            <td><?php echo $value["id"];?></td>
            <td></td>
            <td></td>
        </tr>
        <?php } ?>
    </table>
    <h1>Chào mừng đến với bình nguyên vô tận</h1>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        form {
            width: 310px;
            background-color: #e0e0e0;
        }

        input {
            margin: 5px;
            padding: 5px;
        }

        .get-result {
            width: 29px;
            height: 29px;
            margin-right: 0;
        }

        input[name="result"] {
            width: 262px;
            background-color: #fff;
        }

        select {
            padding: 5px;
        }
    </style>
</head>
<body>
<form action="calc.php" method="post">
    <input type="text" name="unit_1" size="11" placeholder="первое число"
           value="<?=$_GET["unit_1"]?>">
    <select name="math">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="unit_2" size="11" placeholder="второе число"
           value="<?=$_GET["unit_2"]?>">
    <input type="submit" value="=" class="get-result">
    <input type="text" name="result" size="22" disabled
           value="<?=$_GET["result"]?>">
</form>

<a href="../calc-w-buttons/index.php">Калькулятор с кнопками</a>
</body>
</html>

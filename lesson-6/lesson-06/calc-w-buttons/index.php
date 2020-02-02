<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор с кнопками</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        form {
            width: 264px;
            background-color: #e0e0e0;
        }

        .btns-wrapper {
            width: fit-content;
            margin: 0 auto;
        }

        input {
            margin: 5px;
            padding: 5px;
        }

        input[type="submit"] {
            width: 29px;
            height: 29px;
        }

        input[name="result"] {
            width: 254px;
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
    <input type="text" name="unit_2" size="11" placeholder="второе число"
           value="<?=$_GET["unit_2"]?>"><br>

    <div class="btns-wrapper">
        <input type=submit name='math' value='+'/>
        <input type=submit name='math' value='-'/>
        <input type=submit name='math' value='*'/>
        <input type=submit name='math' value='/'/>
    </div>

    <input type="text" name="result" size="22" disabled
           value="<?=$_GET["result"]?>">
</form>

<a href="../calc-w-select/index.php">Калькулятор с селектором</a>
<!--
<a href="server.php?id=1&action=delete">Удалить</a>
-->

<!--
<form action="calc.php" method="post">
    <input type="text" name="unit_1" size="11" value="<? // /*=$_GET["unit_1"]*/ ?>">
    <select name="math">
        <option value="+" name="sign">+</option>
        <option value="-" name="sign">-</option>
        <option value="*" name="sign">*</option>
        <option value="/" name="sign">/</option>
    </select>
    <input type="text" name="unit_2" size="11" value="<? // /*=$_GET["unit_2"]*/ ?>">
    <input type="submit" value="=">
    <input type="text" name="result" size="22" disabled value="<? // /*=$_GET["result"]*/ ?>">
</form>
-->
</body>
</html>

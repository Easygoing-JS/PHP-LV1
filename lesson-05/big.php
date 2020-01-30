<?php

    require_once "config.php";

    $idImg = (int)$_GET["img"];
    $select = "SELECT * FROM `images` WHERE id = $idImg";
    $res = mysqli_query($connect, $select) or die(mysqli_error($connect));
    $image = mysqli_fetch_assoc($res);
    $count = ++$image['views_count'];
    $update = "UPDATE `images` SET `views_count` = $count WHERE id = $idImg";
    mysqli_query($connect, $update) or die(mysqli_error($connect));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотр фотографии <?=$image["title"]?></title>
    <style>
        img {display: block;}
    </style>
</head>
<body>
<a href="index.php"><< Вернуться в галерею</a><br><br>
<img src="<?=$image["path_big"] . $image["title"]?>" alt="<?=$image["title"]?>">
<h4>Просмотров <?=$image['views_count']?></h4>
</body>
</html>

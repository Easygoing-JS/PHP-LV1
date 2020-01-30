<?php

    require_once "config.php";

    $sql = 'SELECT * FROM `images` ORDER BY `views_count` DESC';
    $res = mysqli_query($connect, $sql) or die(mysqli_error($connect));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея фотографий</title>
</head>
<body>
<? while ($data = mysqli_fetch_assoc($res)): ?>
    <a rel="stylesheet" href="big.php?img=<?=$data["id"]?>">
        <img src="<?=$data["path_thumb"] . $data["title"]?>" alt="<?=$data["title"]?>">
    </a>
<? endwhile ?>
</body>
</html>

<?php
    session_start();
    $_SESSION ['permit_s'] = 'yes';
    $mySess = session_id();
    if (!isset($_COOKIE['ses']) || $mySess == '' || $_COOKIE['ses'] != $mySess) {
        session_destroy();
        header("Location: /login/");
        exit;
    }

    isset($_COOKIE["id_author"]) ? $id = $_COOKIE["id_author"] : false;

    $title = 'Админка';

    include('../config/common.php');
    include('../templates/header.php');

?>

<main>

    <?php
        $menu_block = "<h3>Админка</h3>";

        $menu_block .= "";

        $menu_block .= "
                        <span class=\"admin-word\">Действия с товарами:</span><br>
                        <a href='products/mod_products_show.php' title='Добавить' class=\"admin-link\">Добавить</a><br>
                        <a href='products/mod_products_pick.php' title='Редактировать' class=\"admin-link\">Редактировать</a><br>
                        <a href='products/del_products_pick.php' title='Удалить' class=\"admin-link\">Удалить</a> 
                        ";

        echo $menu_block;
    ?>

</main>



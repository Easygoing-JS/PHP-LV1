<?
    $h1 = 'Каталог товаров';
    $title = 'Главная. ' . $h1;

    include('config/common.php');
    include('templates/header.php');
?>

    <main <?php if (isset($_GET['id']) && $_GET['id'] > 0)
        echo 'class="full"'; ?>>

        <?php
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                include('engine/_products_ful.php');
            } else {
                include('engine/_products.php');
            }
        ?>

    </main>

<?php
    include('templates/footer.php');
?>
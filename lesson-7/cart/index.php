<?php
    include('../engine/cart.php');

    $h1 = 'Моя корзина';
    $title = $h1;

    include('../templates/header.php');
?>

    <main>

        <?php
            if (isset($goods)) {
                echo $cartForm;
            } else
                echo '<h4>В корзине нет товаров.</h4>';
        ?>
    </main>

<?php
    include('../templates/footer.php');
?>
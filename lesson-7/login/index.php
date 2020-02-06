<?php
    session_start();
    $_SESSION["secret_number"] = mt_rand(1000, 9999); //

    $h1 = 'Авторизация';
    $title = $h1;

    include('../templates/header.php');
?>

    <main>
        <?php
            include('../templates/log_form.php');
        ?>
    </main>

<?php
    include('../templates/footer.php');
?>
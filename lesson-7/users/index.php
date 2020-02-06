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


    $h1 = 'Личный кабинет';
    $title = $h1;

    include('../templates/header.php');

?>

    <main>


        <?php
            if ($id > 0) {
                include('../config/common.php');
                include('../engine/functions_db.php');
                $author = authors_get_id_arr($connection, $id);

                $name = $author['author_name'];
                $nickname = $author['author_login'];

                echo "<h3>Приветсвую тебя, $name [$nickname] </h3>";

            } else {
                echo '<h3>Ошибка. Не приветсвую.</h3>';
            }
        ?>
        <form action="../login/logout.php" method="post">
            <input type="submit" name="logout" value="Выйти из кабинета">
        </form>
    </main>

<?php
    include('../templates/footer.php');
?>
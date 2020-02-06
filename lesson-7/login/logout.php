<?php

    if (isset($_POST['logout'])) {
        setcookie("ses", '', 0, '/');
        setcookie("id_author", $id, 0, '/');
        header("Location: /users/");
        // session_destroy();
        // session_abort();
        // header("Location: /");
        // exit;
    }
?>
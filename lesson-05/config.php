<?php

    const SERVER = "localhost";
    const LOGIN = "root";
    const PASS = "";
    const DB = "les5_gallery";

    $connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die(mysqli_error($connect));
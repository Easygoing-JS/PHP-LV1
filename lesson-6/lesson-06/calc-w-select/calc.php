<?php
    $arg1 = $_POST['unit_1']; // первое число
    $arg2 = $_POST['unit_2']; // второе число
    $math = $_POST['math'];   // выбранный арифметический знак

    if (// операция — не деление, второе число — не ноль
        $_POST['math'] == ('/')
        && $_POST['unit_2'] == 0) {
        header("Location: index.php?unit_1=$arg1&unit_2=$arg2&math=$math&result=[деление%20на%20ноль!]");
    } elseif (
        (isset($_POST['unit_1']) && is_numeric($_POST['unit_1'])) // ввод есть и является числом
        && (isset($_POST['unit_2']) && is_numeric($_POST['unit_2'])) // ввод есть и является числом
    ) {
        include "functions.php"; // файл с мат. функциями
        $result = mathOperation($_POST['unit_1'], $_POST['unit_2'], $_POST['math']);
        header("Location: index.php?unit_1=$arg1&unit_2=$arg2&math=$math&result=$result");
    } else {
        header("Location: index.php?unit_1=$arg1&unit_2=$arg2&math=$math&result=[введены%20недопустимые%20символы]");
    }


    /*
     if (
        (isset($_POST['unit_1']) && is_numeric($_POST['unit_1'])) // ввод есть и является числом
        && (isset($_POST['unit_2']) && is_numeric($_POST['unit_2'])) // ввод есть и является числом
    ) {
        include "functions.php"; // файл с мат. функциями
        $result = mathOperation($_POST['unit_1'], $_POST['unit_2'], $_POST['math']);
        header("Location: index.php?unit_1=$arg1&unit_2=$arg2&math=$math&result=$result");
    } elseif (// операция — не деление, второе число — не ноль
        isset($_POST['math'])
        && $_POST['math'] == ('/')
        && $_POST['unit_2'] === 0) {
        header("Location: index.php?result=[деление на ноль!]");
    } else {
        header("Location: index.php?unit_1=$arg1&unit_2=$arg2&math=$math&result=[ошибка_ввода]");
    }
     * */


    /*if (
        (isset($_POST['unit_1']) && is_numeric($_POST['unit_1'])) // ввод есть и является числом
        &&
        (isset($_POST['unit_2']) && is_numeric($_POST['unit_2'])) // ввод есть и является числом
        &&
        (($_POST['math'] != '/') && ($_POST['unit_2'] != 0)) // операция — не деление, второе число — не ноль
    ) {
        include "functions.php"; // файл с мат. функциями
        $result = mathOperation($arg1, $arg2, $math);
        header("Location: index.php?unit_1=$arg1&unit_2=$arg2&math=$math&result=$result");
    } else {
        header("Location: index.php?unit_1=$arg1&unit_2=$arg2&math=$math&result=[ошибка_ввода]");
    }*/

?>
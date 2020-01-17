<?php
// #####################
// задание 1. ##########
// #####################
echo '<h3>Задание №1</h3>';
echo '<p>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.<br>
Затем написать скрипт, который работает по следующему принципу:<br>
если $a и $b положительные, вывести их разность;<br>
если $а и $b отрицательные, вывести их произведение;<br>
если $а и $b разных знаков, вывести их сумму;</p>';

$a = rand(-10, 10);
$b = rand(-10, 10);
echo '>> Значения переменных: $a = ' . $a . ', $b = ' . $b . '<br>';

function result($a, $b) {
    if ($a >= 0 && $b >= 0) {
        return 'разность: ' . ($a - $b);
    } else if ($a < 0 && $b < 0) {
        return 'произведение: ' . ($a * $b);
    } else {
        return 'сумма: ' . ($a + $b);
    }
}

echo '>> Результат операции с $a и $b — их ' . result($a, $b). '<hr>';

// #####################
// Задание 2. ##########
// #####################
echo '<h3>Задание №2</h3>';
echo '<p>Присвоить переменной $а значение в промежутке [0..15].<br>
С помощью оператора switch организовать вывод чисел от $a до 15.</p>';

$a = rand(0, 15);

echo '>> Значение переменной $a = ' . $a . '<br>';

switch ($a) {
    case 0:
        echo $a . ' ';
        $a++;
    case 1:
        echo $a . ' ';
        $a++;
    case 2:
        echo $a . ' ';
        $a++;
    case 3:
        echo $a . ' ';
        $a++;
    case 4:
        echo $a . ' ';
        $a++;
    case 5:
        echo $a . ' ';
        $a++;
    case 6:
        echo $a . ' ';
        $a++;
    case 7:
        echo $a . ' ';
        $a++;
    case 8:
        echo $a . ' ';
        $a++;
    case 9:
        echo $a . ' ';
        $a++;
    case 10:
        echo $a . ' ';
        $a++;
    case 11:
        echo $a . ' ';
        $a++;
    case 12:
        echo $a . ' ';
        $a++;
    case 13:
        echo $a . ' ';
        $a++;
    case 14:
        echo $a . ' ';
        $a++;
    case 15:
        echo $a . '<hr>';
        $a++;
        break;
    default:
        echo '>> Ошибка!';
}

// #####################
// Задание 3. ##########
// #####################
echo '<h3>Задание №3</h3>';
echo '<p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.<br>
Обязательно использовать оператор return.</p>';

$arg1 = rand(-10, 10);
$arg2 = rand(-10, 10);

echo '>> Значения переменных: $arg1 = ' . $arg1 . ', $arg2 = ' . $arg2 . '<br>';

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

function diff($arg1, $arg2) {
    return $arg1 - $arg2;
}

function prod($arg1, $arg2) {
    return $arg1 * $arg2;
}

function div($arg1, $arg2) {
    if ($arg2 === 0) {
        return 'Делить на ноль нельзя!';
    } else { 
        return $arg1 / $arg2;
    };
}

echo '>> Сумма: ' . sum($arg1, $arg2) . '<br>';
echo '>> Разность: ' . diff($arg1, $arg2) . '<br>';
echo '>> Произведение: ' . prod($arg1, $arg2) . '<br>';
echo '>> Частное: ' . div($arg1, $arg2) . '<hr>';

// #####################
// Задание 4. ##########
// #####################
echo '<h3>Задание №4</h3>';
echo '<p>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),<br> 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости<br> 
от переданного значения операции выполнить одну из арифметических операций (использовать<br> 
функции из пункта 3) и вернуть полученное значение (использовать switch).</p>';

//  Значения аргументов $arg1 и $arg2 были определены в задании №3
echo '>> Значения переменных: $arg1 = ' . $arg1 . ', $arg2 = ' . $arg2 . '<br>';

function mathOperation($arg1, $arg2, $operation) {
    // выбор операции будет происходить случайным образом
    $mathSign = ['+', '-', '*', '/'];
    $operation = $mathSign[rand(0,3)];

    switch ($operation) {
        case '+':
            return '>> Результат операции "'. $operation . '" равен ' . sum($arg1, $arg2);

        case '-':
            return '>> Результат операции "'. $operation . '" равен ' . diff($arg1, $arg2);

        case '*':
            return '>> Результат операции "'. $operation . '" равен ' . prod($arg1, $arg2);

        case '/':
            return '>> Результат операции "'. $operation . '" равен ' . div($arg1, $arg2);
        
        default:
            echo 'Ошибка!';
    }
}

echo mathOperation($arg1, $arg2, $operation) . '<hr>';

// #####################
// Задание 6. ##########
// #####################
echo '<h3>Задание №6</h3>';
echo '<p>*С помощью рекурсии организовать функцию возведения числа в степень.<br>
Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>';

$val = rand(-10, 10);
$pow = rand(-10, 10);

echo '>> Значения переменных: основание $val = ' . $val . ', показатель $pow = ' . $pow . '<br>';

function power($val, $pow){
    if ($pow == 0) { // проверка показателя степени на 0
        return 1;
    }
    if ($pow < 0) { // проверка показателя степени на отрицательное значение
        return power(1/$val, -$pow);
    }
    return $val * power($val, $pow-1);
}

echo '>> Результат возведения в степень равен: ' . power($val, $pow) . '<hr>';

// #####################
// Задание 7. ##########
// #####################
echo '<h3>Задание №7</h3>';
echo '<p>*Написать функцию, которая вычисляет текущее время и возвращает его<br> 
в формате с правильными склонениями, например:<br>
22 часа 15 минут
21 час 43 минуты</p>';

function showTime () {
    $hours = date('H');
    $mins = date('i');
    
    // получаем последнюю цифру часа и минут
    $lastHoursDigit = $hours % 10;
    $lastMinsDigit = $mins % 10; 

    switch ($lastHoursDigit) {
        case ($lastHoursDigit == 0 || $lastHoursDigit >=5 && $lastHoursDigit <= 9):
            $hoursWord = 'часов';
            break;

        case ($lastHoursDigit == 1):
            $hoursWord = 'час';
            break;

        case ($lastHoursDigit >= 2 && $lastHoursDigit <= 4):
            $hoursWord = 'часа';
            break;
        
        default:
            echo 'Ошибка!';
            break;
    }

    switch ($lastMinsDigit) {
        case ($lastMinsDigit == 0 || $lastMinsDigit >=5 && $lastMinsDigit <= 9):
            $minsWord = 'минут';
            break;

        case ($lastMinsDigit == 1):
            $minsWord = 'минута';
            break;

        case ($lastMinsDigit >= 2 && $lastMinsDigit <= 4):
            $minsWord = 'минуты';
            break;
        
        default:
            echo 'Ошибка!';
            break;
    }

    echo '>> Время: ' . "$hours $hoursWord $mins $minsWord" . '<hr>';
}

showTime ();
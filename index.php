<?php
//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//
//если $a и $b положительные, вывести их разность;
//если $а и $b отрицательные, вывести их произведение;
//если $а и $b разных знаков, вывести их сумму;
//ноль можно считать положительным числом.

$a = rand(-10,10);
$b = rand(-10,10);
echo "<br>\$a = $a<br>\$b=$b<br>";

if ($a >= 0 && $b >= 0){
	echo $a - $b;
}
elseif ($a < 0 && $b < 0){
    echo $a * $b;
}
elseif ($a >= 0 && $b < 0 || $a < 0 && $b >= 0){
    echo $a + $b;
}

//2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

$a = rand(0,15);
switch($a){
    case 0:
        echo "0 ";
    case 1:
        echo "1 ";
    case 2:
        echo "2 ";
    case 3:
        echo "3 ";
    case 4:
        echo "4 ";
    case 5:
        echo "5 ";
    case 6:
        echo "6 ";
    case 7:
        echo "7 ";
    case 8:
        echo "8 ";
    case 9:
        echo "9 ";
    case 10:
        echo "10 ";
    case 11:
        echo "11 ";
    case 12:
        echo "12 ";
    case 13:
        echo "13 ";
    case 14:
        echo "14 ";
    case 15:
        echo "15 ";
};

function printCell ($a) {
    if ($a == 15){
        return $a;
    }
    else {
        return $a.' '. printCell($a+1);
    }
}

echo printCell($a);

//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
    
function sum ($a, $b){
    return $a + $b;
}

function sub ($a, $b){
    return $a - $b;
}
    
function div ($a, $b){
    if ($b != 0){
        return $a / $b;
    }
    else {
        echo "Делить на нуль нельзя!";
    }
}
    
function multi ($a, $b){
    return $a * $b;
}

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
    
function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case '+':
            return sum($arg1, $arg2);
            break;
        case '-':
            return sub($arg1, $arg2);
            break;
        case '/':
            return div($arg1, $arg2);
            break;
        case '*':
            return multi($arg1, $arg2);
            break;
}}
echo mathOperation(3, 1, '+'); 
echo mathOperation(3, 1, '-'); 
echo mathOperation(3, 1, '*'); 
echo mathOperation(3, 0, '/'); 
echo mathOperation(3, 1, '/');

//5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
    
//Выполнено в 1 ДЗ.

//6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
//


function power ($val, $pow){
    if ($pow == 0){
        return 1;
    }
    elseif ($pow == 1){
        return $val;
    }
    elseif ($pow < 0){
        return power(1/$val, -$pow);
    }
    else {
        return $val * power($val, $pow - 1);
    }
}

echo power(3,3);
echo power(3,1);
echo power(3,-3);
echo power(3,0);

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты




function hourNowStr (){
    $hourNow = date('H');
    if ($hourNow == 1 || $hourNow == 21){
        return $hourNow.' час ';
    }
    elseif (($hourNow > 1 && $hourNow < 5) || ($hourNow > 21 && $hourNow < 24)){
        return $hourNow.' часа ';
    }
    else {
        return $hourNow.' часов ';
    }
}

function minuteNowStr (){
    $minuteNow = date('i');
    if ($minuteNow > 10 && $minuteNow < 20){
        return $minuteNow.' минут';
    }
    elseif ($minuteNow % 10 == 1){
        return $minuteNow.' минута';
    }
    elseif ($minuteNow % 10 > 1 && $minuteNow % 10 < 5){
        return $minuteNow.' минуты';
    }
    else {
        return $minuteNow.' минут';
    }
}


echo hourNowStr().minuteNowStr();
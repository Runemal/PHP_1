

<?php
//3. Объяснить, как работает данный код:
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? Из-за преобразования типов. Вторая переменная преобразуется в число, так как первым символом стоит нуль и нет запятой, то он отбрасывается и получается число пять. 5 равно 5 - истина.
    var_dump((int)'012345');     // Почему 12345? Аналогичное преобразование типа строки в целое число.
    var_dump((float)123.0 === (int)123.0); // Почему false? Первое число с плавующей точкой, второе - целое. Они никогда не будут строго равны, однако при нестрогом сравнении они равны.
    var_dump((int)0 === (int)'hello, world'); // Почему true? Преобразование строки из букв в число возвращает 0; первый символ не число и не знаки + или -, нет чисел.

//5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя.
    
    $q = 1;
    $w = 2;
    echo "<br>\$q = $q<br>\$w=$w<br>";
    $q += $w;
    $w = $q - $w;
    $q -= $w; 
    echo "<br>\$q = $q<br>\$w=$w<br>";
?>



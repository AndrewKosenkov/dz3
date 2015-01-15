<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors','1');
date_default_timezone_set('Europe/Moscow');
echo 'Мой часовой пояс : ' .date('l d.m.Y H:i:s');

//Создайте массив $date с пятью элементами
//C помощью генератора случайных чисел забейте массив $date юниксовыми метками
$date = array(rand(time(),1),
              rand(time(),1),
              rand(time(),1),
              rand(time(),1),
              rand(time(),1));

var_dump($date);
//Сделайте вывод сообщения на экран о том, какой день в сгенерированном 
//массиве получился наименьшим, а какой месяц наибольшим

echo 'Минимальный день: ';
echo min(date('d', $date[0]),
date('d', $date[1]),
date('d', $date[2]),
date('d', $date[3]),
date('d', $date[4])
);
echo '<br/>';
echo '<br/>';
// для наглядности правильности сравнения, вывожу массив в форматированном виде.
function print_date($value){
    echo date('l d.m.Y H:i:s',$value). "</br>";
    
    
}

array_map('print_date',$date);

echo "</br>".'Максимальный месяц: ';
echo max(date('m', $date[0]),
date('m', $date[1]),
date('m', $date[2]),
date('m', $date[3]),
date('m', $date[4])
);
echo '</br>';
//Отсортируйте массив по возрастанию дат
echo 'Сортировка массива от меньшего к большему';
sort($date);
var_dump($date);
//С помощью функция для работы с массивами извлеките 
//последний элемент массива в новую переменную $selected
$selected = array_pop($date);

//C помощью функции date() выведите $selected на экран в формате "дд.мм.ГГ ЧЧ:ММ:СС"
echo 'Вывод $selected в формате: ' .date('d.m.Y G:i:s',$selected)."</br>";

date_default_timezone_set('America/New_York');
echo 'Время в Нью-Йорке : ' .date('l d.m.Y H:i:s');



?>
<?php 
// mt_srand(time());
$a = array(
	'0' =>mt_rand(-100, time()),  
	'1' =>mt_rand(-100, time()),  
	'2' =>mt_rand(-100, time()),  
	'3' =>mt_rand(-100, time()),  
	'4' =>mt_rand(-100, time()),  
);

print_r($a);

$_0 = date('N l', $a[0]);
$_1 = date('N l', $a[1]);
$_2 = date('N l', $a[2]);
$_3 = date('N l', $a[3]);
$_4 = date('N l', $a[4]);

echo "\n  в сгенерированном массиве наименьшим днем получился  : ";
echo min($_0, $_1, $_2, $_3, $_4);

$_0 = date('m F', $a[0]);
$_1 = date('m F', $a[1]);
$_2 = date('m F', $a[2]);
$_3 = date('m F', $a[3]);
$_4 = date('m F', $a[4]);

echo "\n  в сгенерированном массиве наибольшим месяцем получился  : ";
echo min($_0, $_1, $_2, $_3, $_4);

sort($a);
echo "\n Отсортированный массив по возрастанию :\n";
print_r($a);

echo "\n С помощью функция для работы с массивами извлеките последний элемент массива в новую переменную \$selected C помощью функции date() выведите \$selected на экран в формате дд.мм.ГГ ЧЧ:ММ:СС: ";
$selected = array_pop($a);
echo date('d.m.Y H:i:s', $selected);

echo "\n Моя часовая зона до изменения: ";
echo date_default_timezone_get();

echo "\n Проверка скрипта для себя))";
$script_tz = date_default_timezone_get();
if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Временная зона скрипта отличается от заданной в INI-файле.';
} else {
    echo 'Временные зоны скрипта и настройки INI-файла совпадают.';
}

echo "\n";
date_default_timezone_set('America/New_York');
echo "\n Моя часовая зона после изменения: ";
echo date_default_timezone_get();
echo "\n";
$script_tz = date_default_timezone_get();
if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Временная зона скрипта отличается от заданной в INI-файле.';
} else {
    echo 'Временные зоны скрипта и настройки INI-файла совпадают.';
}

 ?>
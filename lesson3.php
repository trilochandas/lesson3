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
// This is the bad practice =)
// $_0 = date('N l', $a[0]);
// $_1 = date('N l', $a[1]);
// $_2 = date('N l', $a[2]);
// $_3 = date('N l', $a[3]);
// $_4 = date('N l', $a[4]);
?>
<br>
<?

$dataDay = array(date('N l', $a[0]), date('N l', $a[1]), date('N l', $a[2]), date('N l', $a[3]), date('N l', $a[4]));

echo "\n  в сгенерированном массиве наименьшим днем получился  : ";
// This is the bad practice =)
// echo min($_0, $_1, $_2, $_3, $_4);
echo min($dataDay[0], $dataDay[1], $dataDay[2], $dataDay[3], $dataDay[4]);
// This is the bad practice =)
// $_0 = date('m F', $a[0]);
// $_1 = date('m F', $a[1]);
// $_2 = date('m F', $a[2]);
// $_3 = date('m F', $a[3]);
// $_4 = date('m F', $a[4]);
?>
<br>
<?
$dataMonth = array(date('m F', $a[0]), date('m F', $a[1]), date('m F', $a[2]), date('m F', $a[3]), date('m F', $a[4]));

echo "\n  в сгенерированном массиве наибольшим месяцем получился  : ";
// This is the bad practice =)
// echo min($_0, $_1, $_2, $_3, $_4);
echo min($dataMonth[0], $dataMonth[1], $dataMonth[2], $dataMonth[3], $dataMonth[4]);

?>
<br>
<?

sort($a);
echo "\n Отсортированный массив по возрастанию :\n";
?>
<br>
<?
print_r($a);
?>
<br>
<?

echo "\n С помощью функция для работы с массивами извлеките последний элемент массива в новую переменную \$selected C помощью функции date() выведите \$selected на экран в формате дд.мм.ГГ ЧЧ:ММ:СС: ";
$selected = array_pop($a);
echo date('d.m.Y H:i:s', $selected);
?>
<br>
<?
echo "\n Моя часовая зона до изменения: ";
echo date_default_timezone_get();

?>
<br>
<?

echo "\n Проверка скрипта для себя))";
$script_tz = date_default_timezone_get();
if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Временная зона скрипта отличается от заданной в INI-файле.';
} else {
    echo 'Временные зоны скрипта и настройки INI-файла совпадают.';
}

?>
<br>
<?

echo "\n";
date_default_timezone_set('America/New_York');
echo "\n Моя часовая зона после изменения: ";
echo date_default_timezone_get();
echo "\n";
?>
<br>
<?
$script_tz = date_default_timezone_get();
if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Временная зона скрипта отличается от заданной в INI-файле.';
} else {
    echo 'Временные зоны скрипта и настройки INI-файла совпадают.';
}

 ?>
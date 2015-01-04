<p>Задание 2</p>
<?
//zadanie 2
define('CITY', 'Evpatoria');
var_dump(CITY);
if (CITY) {
    echo 'Мой город - '.CITY.'!';
} 
//CITY = Mayapur; zdes ya pitaus pomenyat konstantu
?>
<br>
<p>Задание 3</p>
<?
//zadanie 3
$book=array('title'=>'za predeli vaikunthi', 'autor'=>'Sanatana Goswami',
    'page'=>'100');
echo 'Недавно я прочитал книгу '.$book['title'].', написанную автором '.$book['autor'].', я осилил
все '.$book['page'].' страниц, мне она очень понравилась.';
?>
<br>
<p>Задание 4</p>
<?
//zadanie 4
$book1=array('title'=>'za predeli vaikunthi', 'autor'=>'Sanatana Goswami',
    'page'=>'100');
$book2=array('title'=>'sharanagati', 'autor'=>'Thakur Bhaktivinod',
    'page'=>'40');

$books=array($book1,$book2);

var_dump($books);

echo 'я прочитал книгу'.$books[0];
?>
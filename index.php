<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Обучение</title>
</head>
<body>

<!--Ваш IP-адрес: --><?//= $_SERVER['REMOTE_ADDR'] ?><!-- <br />-->
<!--Ваш браузер: --><?//= $_SERVER['HTTP_USER_AGENT'] ?>



<?php

//$count = 0;
//if (isset($_COOKIE['count'])) $count = $_COOKIE['count'];
//setcookie("count", $count, 0x7fffffff, "/");
//echo $count;

/*
   $names = array('Саша', 'Маша', 'Петя');

   echo  "$names[0]<br/>";

   $names1["Иванов"] = "Иван";
   $names1["Сидоров"] = "Николай";
   $names1["Петров"] = "Петр";

   echo $names1 ["Иванов <br/>"];
   $ca;
    echo $ca;


    $one = (int) '234';
    $two = (string) qwerty;
    echo "$one <br/>";
    echo "$two<br/>";


    $a = "5";
    $a1 = 2*$a;
    $a2 = $a*1.3;
    $a3 = 5*"10 яблок";
    echo "$a1 <br/>";
    echo "$a2 <br/>";
    echo "$a3 <br/>";


    $a = 7;
    $b = 4;



    if ($a>$b) echo "проверка1";
    else echo "проверка2";

    if ($a>$b) echo "test1";
        elseif ($a == $b) echo "test2";

        $i = 4;

        switch ($i) {
            case 0:
                echo "1";
                break;
            case 1:
                echo "2";
                break;
            case 2:
                echo "3";
                break;
                    }
    */
    /*
    $x = 5;
    while ($x++<10) echo $x;

    $a = 0;

    $a = 1;
    do {
        echo $a;
    } while ($a++<10);

    for ($a=0; $a<10;$a++) {
        echo $a;
    }
    $names["Ivanov"] = "Andrei";
    $names["Petrov"]="Boris";
    $names["Volkov"]="Sergey";
    $names["Makarov"]="Fedor";
    foreach ($names as $key=> $value) {
        echo "<b>$value $key</b><br>";
    }

    */

//    $body_temp = 36.6;
//        echo "$body_temp";
//   echo    "<p>Температура тела составляет $body_temp градусов Цельсия</p>";
//   $body_temp = 97.88;
//   echo "($body_temp градусов Фаренгейта)</p>";
//
//   $song_title = "\"Летний блюз\" - ария Джорджа Гершвина";
//echo "<p>Классическая мелодия $song_title очень популярна</p>";
//   $song_title = '"Летний блюз" - ария Джорджа Гершвина';
//echo "Классическая мелодия $song_title очень популярна";
//
//    $hi = 'Privet';
//    $bye = 'Poka';
//    $song_title = $hi . $bye;
//    echo "<p>$song_title</p>";
//
//    $phrase = 'Правда редко бывает чистой';
//    $author = 'Оскар Уайльд';
//    echo $phrase;
//    echo "<p>Часто гооврят, что <q>$phrase</q></p>";
//    $phrase = $phrase. 'и никогда не бывает простой';
//echo "<p><q>$phrase</q><cite>$author</cite></p>";
//
//    $days = array('Понедельник','Вторник','Среда');
//    foreach ($days as $value) {
//        echo "$bull; $value";}
//    $months = array('янв'=>'январь', 'фев'=>'Февраль','мар'=>'Март');
//echo '<dl>';
//foreach ($months as $key=>$value){
//    echo "<dt>$key<dd>$value</dd>";
//                                }
//echo '</dl>';
//
//    $six = range(1,6);
//    $a_z = range('a','z');
//echo "<p>$six</p>";
//echo "<p>$a_z</p>";
//
//    $cars = array('УАЗ'=>'Хуяз','ГАЗ'=>'Сайбер','ВАЗ'=>'Нива');
//    echo '<dl><dt>Исходный порядок элементов:<dd>';
//    foreach ($cars as $key=>$value){
//        echo '&bull;',$key.''. $value;
//    }
//    asort($cars);
//    echo '<dt>Сортировка по значению:<dd>';
//    foreach ($cars as $key=>$value){
//        echo '&bull;',$key.''.$value;
//    }
//    ksort($cars);
//    echo '<dt>Сортировка по ключу:<dd>';
//    foreach ($cars as $key=>$value)
//    {
//        echo '&bull;',$key.''.$value;
//    }
//    echo '</dl>';

    function Counter(int $from, int $to)
    {
        $i = 0;
        while ($from++ < $to){
            if ($from % 2 != 0){
                echo '<br>' . $from . '</br>';
                $i++;
            }
        }
       echo $i;
    }
//    echo Counter(50, 100);

    const DAYS = [1 => "Monday", 2 => "Thusday", 3 => "Wd", 4 => "Thh", 5 => "Fr", 6 => "Sat", 7 => "Sun"];

    function calendar(string $day, int $c, int $t)
{
    $days = [];

    $k = 1;

    foreach (DAYS as $key => $value) {
        if ($value == $day) {
            $k = $key;
        }
    }
    $a = $c - $t;
    for ($i = 0; $i < $a; $i++) {
        if ($k > 7) {
            $k = 1;
        }

        $days[] = DAYS[$k++];
    }

    var_dump($days);
}

//calendar("Monday", 31, 18);

    function number(){
        $one = ["a","b", "c", "d"];
//        foreach ($one as $key => $value){
//
//
//            }
    for ($i = count($one) - 1; $i >= 0; $i--) {
             echo $one[$i];
            }
        }

//    number();


//    $url = 'https://bank.gov.ua/ua/markets/exchangerates';
//
//
//    $curl = curl_init();
//    curl_setopt($curl, CURLOPT_URL, $url);
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//    $res = curl_exec($curl);
//    print_r($res);

//    $ar1 =  array('Тут как тут', 'Коту тащат уток', '15.01.2002 10:51', 'Я разуму уму заря', 'Искать такси', 'Дивен мне вид');
//        function isPalindrome($ar1){
//            for ($i = 0, $l = strlen($ar1)-1, $il = ceil($l/2); $i < $il; ++$i)
//                if ($ar1[$i] != $w[$l-$i])
//                    return false;
//            return true;
////    isPalindrome();
//        }

//    echo "<table>";
//        for ($i = 0; $i < 8; $i++){
//            if ($i % 2 == 0){
//                echo "<tr style='background-color: black;'>";
//            } else{
//                echo "<tr style='background-color: pink;'>";
//            }
//            for ($y = 0; $y < 8; $y++){
//                if ($y % 2 == 0){
//                    echo "<td style= 'background-color: black;'>";
//                } else{
//                    echo "<td style= 'background-color: pink;'>";
//                }
//                echo "8";
//                echo "</td>";
//            }
//            echo "</tr>";
//        }
//    echo "</table>";



//    $start = microtime(true);
//    $url = 'https://www.youtube.com/';
//    $res = file_get_contents($url);
////    print_r($res);
//    preg_match('#<title>(.*?)</title>#su', $res, $matches );
//    $title = $matches[1];
//    print_r($matches);
//    $time = microtime(true) - $start;
//    echo $time;
//    $file = fopen('file.txt', 'a');
//    fclose($file);


//    $mysql = mysqli_connect('127.0.0.1', 'root', 'root', 'kursphp');
//    if (!$mysql){die('Connection error:'.mysql_error());}
//    mysqli_query($mysql, "SET NAMES 'utf8'");
//    mysqli_query($mysql, "SET CHARACTER SET 'utf8'");
//    $sql = 'SELECT * FROM `myTable` WHERE id=1';
//    $result = mysqli_query($mysql, $sql);
//    <?php


//
//    class CUser {
//        public $name;
//        public $email;
//        public $work;
//
//        const SITE_NAME = 'mysite.ua';
//
//       public function _construct (string $work) {
//           $this->work = $work;
//        }
//       public function SayMe() {
//           return 'Privet! Ya ' .$this->name .', ' .$this->work .''.self::SITE_NAME;
//       }
//    }
//    $user1 = new CUser ('Programist');
//    $user1 -> name = 'Ivan';
//    $user2 = new CUser ('Driver');
//    $user2 -> name = 'Sema';
//    $user3 = new CUser ('Mongol');
//    $user3 -> name = 'Andrei';

//    print_r($user1);
//    print_r($user1->SayMe());
//    print_r($user2);
//    print_r($user2->SayMe());
//    print_r($user3);
//    print_r($user3->SayMe());

//    $dat = date ("d.m.y");
//    $tm = date("h:i:s");
//    echo "Текущая дата: $dat года <br />";
//    echo "Текущее время: $tm<br />";
//    echo "А вот квадраты и кубы первых 5 натуральных чисел: <br />";
//    echo "<ul>";
//    for ($i = 1; $i <=5; $i++){
//        echo "<li>$i в квадрате = " . ($i * $i);
//        echo ", $i в кубе = " . ($i * $i * $i) . "</li>";
//    }
//
//    class AgentSmith {};
//    $first = new AgentSmith();
//    $first -> mind = 0.123;
//    $second = $first;
//    $second -> mind = 100;
//    echo "First mind: {$first -> mind}, second: {$second -> mind}";
//
//$a =array( 'a'=>'apple', 'b'=>'banana', 'c'=>array( 'x', 'y', 'z'));
//echo "<pre>"; print_r ($a); echo "</pre>";
//
//    function cmp ($a, $b){
//        if ($a == $b) return 0;
//        if ($a < $b) return -1;
//        if ($a > $b) return 1;
//    }
//    $arr = array(3, 1, 7, 6, 9, 4);
//    usort($arr, 'cmp');
//    print_r($arr);


//if (isset($_REQUEST['doGo'])) {
//    foreach ($_REQUEST['known'] as $k => $v) {
//        if ($v) echo "Вы знаете язык $k!<br>";
//        else echo "Вы не знаете язык $k. <br>";
//    }
//}
//?>
<!--<form action="--><?//=$_SERVER['SCRIPT_NAME']?><!--"method="post">-->
<!--    Какие языки программирования вы знаете?<br>-->
<!--    <input type="hidden" name="knomn[PHP]" value="0">-->
<!--    <input type="checkbox" name="known[PHP]" value="1"> PHP <br />-->
<!--    <input type="hidden" name="known[Perl]" value="0">-->
<!--    <input type="checkbox" name="known[Perl]" value="1">Perl<br />-->
<!--    <input type="submit" name="doGo" value="Go!">-->
<!--</form>-->
<!---->
<?php
//if (isset($_REQUEST['go'])): ?>
<!--Привет, --><?//=$_REQUEST['name']?><!--!-->
<?php //else:?>
<!--<form action="--><?//=$_SERVER['REQUEST_URI']?><!--" method="POST">-->
<!--    Ваше имя: <input type="text" name="name"><br/>-->
<!--    <input type="submit" name="go" value="Отослать!">-->
<!--</form>-->
<?php //endif?>
<!---->
<?php
//
//$WasError = 0;
//if (isset($_REQUEST['doSubmit'])) do {
//    if ($_REQUEST['reloads'] != 1 + 1 + 7) {
//        $WasError = 1;
//        break;
//    }
//    if ($_REQUEST['loader'] != "source") {
//        $WasError = 1;
//        break;
//    }
//    echo "Вы внимательный человек, проздравляем!<br />";
//    exit();
//} while (0);
//if ($WasError) {
//    echo "Вы ответили неверно, попробуйте ещё раз.";
//}
//?>
<!--<form action="--><?//=$_REQUEST['REQUEST_URI']?><!--" method="POST">-->
<!--    Число перезагрузок: <input type="text" name="reloads"><br />-->
<!--    Загрузочная программа: <input type="text" name="loader"><br />-->
<!--    <input type="submit" name="doSubmit" value="Ответить на вопросы">-->
<!--</form>-->

<?
// echo "Some text";
// echo date(DATE_RSS);
// echo $_SERVER['HTTP_USER_AGENT'];




//echo date("D-m-Y", mktime(0,0,0,07,10,2018 ));
//
//echo mt_rand(0, 1000);

//$str1 = 3.84;
//$str2 = 8.123;
//$str3 = 6.124;
//$str4 = 5.43254;
//$str5 = 4.4324;
//
//echo round($str1) . "\n";
//echo round($str2) . "\n";
//echo round($str3) . "\n";
//echo round($str4) . "\n";
//echo round($str5) . "\n";
//
//echo round(42.43752, 2, PHP_ROUND_HALF_EVEN) . "\n";
//
//$a = 20;
//$b = 2;
//$c;
//echo "\"Мне $a лет и я уже $b года учу программирование\"";

class People
{
    public $firstname;
    public $lastname;
    public $age;
    public $city;
    public $country;
}
$str1 = new People();
$str1->firstname = "Gat";
$str1->lastname = "Borg";
$str1->age = 30;
$str1->city = "Kyiv";
$str1->country = "Ukraine";
echo "Привет, меня зовут " . $str1->firstname . $str1->lastnam . ", мне "  . $str1->age . " Я из" . $str1->city . ", это столица" . $str1->country;

class Animal
{
    public $class;
    public static $vid = "Ползуны";
    public $color;
    public $speed;
    public $age;
}

define('PI', 3.14, false);
if (defined('PI')){
//    echo "Константа есть";
}else{
//    echo "Net";
}
//echo defined('PI');

$number1 = 123;
$number2 = 321;
$str1 = "some text";
$str2 = "some text";

//$mob = 0;
//if ($mob == 1){
//    echo "Kypit esche odin telefon";
//}elseif ($mob == 2){
//    echo "Y menya dostato4no telefonow";
//}elseif ($mob ==3 || $mob > 1){
//    echo "Y menya mnogo telefonov, prodam 1";
//}else{
//    echo "Y menya net telefona";
//}

date_default_timezone_set('Europe/Kiev');
$t = date('H');
$timels = 0;
if ($t == 23 || $t >= 06){
    echo $timels = 1;
}elseif ($t == 07 || $t >= 18){
    echo $timels = 2;
}elseif ($t == 18 || $t >= 22){
    echo $timels = 3;
}else{
    echo "Ti eblan";
}
if ($timels = 1): ?>
<h1>Сейчас ночь</h1>
<? elseif ($timels = 2): ?>
<h1>Сейчас день</h1>
<? elseif ($times = 3): ?>
<h1>Сейчас вечер</h1>
<? endif; ?>

<?

//$content = file_put_contents('some/hello.txt', "Hello World!");
//$content = file_get_contents('some/hello.txt');
//echo $content;

$time = date('c');
$times = file_put_contents('some/hello.txt', $time);
$times = file_get_contents('some/hello.txt');
echo $times;
//$name='_'.date('m-d-Y_hia').'.txt';
//$myfile = fopen($name, 'w');

$someText = 'okey';
switch ($someText){
    case 'aga':
        echo 'Virashenie ravno okey-2';
        break;
    case 'ne okey':
        echo 'Virashenie ravno okey';
        break;
    default:
        echo 'Virashenie ne ravno okey';
        break;
}

$nums = 1;

begin:
$nums++;
echo "$nums<br>";
if ($nums >= 22){
    goto finish;
}goto begin;
finish:

$flag1 = 1;
$flag2 = 1;
switch (true){
    case ($flag1 == $flag2):
        echo "<p>Возращаем True</p>";
        break;
    default:
        echo "<p>Возращаем False</p>";
        break;
}

$people = [
        'Ivan' => ['age' => 21, 'weight' => 63],
        'Oleg' => ['age' => 25, 'weight' => 70],
        'Nika' => ['age' => 19, 'weight' => 53]
];



$years = [2000, 2001, 2002, 2003, 2004, 2005, 2006,2007,2008,2009,2010,2011,2012,2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];
$mon = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
$day = ['mon', 'tues', 'wed', 'thur', 'friday', 'saturday', 'sunday'];
//
//echo $years[1] . "<br>" . $mon[5] . "<br>" . $day[5] . "<br>";
//echo $years[4] . "<br>" . $mon[4] . "<br>" . $day[4] . "<br>";
//
//echo $years[count($years) - 2];
//
//echo $years[count($years) - 1] . "<br>" . $mon[count($mon) - 1] . "<br>" . $day[count($day) - 1];



$arr3['time'] = 11;
//echo "Сейчас у нас $arr3[time] утра";
//
//echo "Олег имеет вес в {$people['Oleg']['weight']} кг.";


$arr2 = [
        'mounths' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        'day' => ['mon', 'tues', 'wed', 'thur', 'friday', 'saturday', 'sunday']
];

//echo "<pre>";
//print_r($arr2);
//echo "</pre>";

//$arr = [1, 2, 3];
//
//list($one, $two, $three) = $arr;
//echo $two;
//for ($i = 0; $i < count($arr); $i++){
//    echo $arr[$i] . "<br>";
//}
//
//$Andrei = [
//        'name' => 'Andrei',
//        'age' => 31,
//        'weight' => 73
//];
//
//
//foreach ($arr2 as $key => $value){
//    echo $key . "<br>";
//}
//foreach ($value as $key2 => $val){
//    echo $key2 . '' . $val . "<br>";
//}

$arr1 = ['my', 'text'];
$arr2 = [2 => 'our', 3 => 'some'];
$sum = $arr1 + $arr2;
//echo "<pre>";
//print_r($sum);
//echo "</pre>";
//
//$a1 = [1, 3, 5, 7, 9];
//$a2 = [1, 3, 5, '7', 9];
//$a3 = [1, 3, 5, 7];
//$a4 = [1, 3, 4, 7, 9];
//if ($a1 == $a2){
//    echo "Массивы равны<br>";
//}else{
//    echo "Массивы не равны<br>";
//}
//$arr11 = [0=>1, 1=>2];
//$arr22 = [0=>1, 1=>'2'];
//if ($arr11 === $arr22){
//    echo "Массивы равны<br>";
//}else{
//    echo "Массивы не равны<br>";
//}
//// isset()
//for ($i = 0; $i <= 6; $i++){
//    if (isset($a1[$i])){
//        echo "Элемент массива \$a1[$i] существует<br>";
//    }else{
//        echo "Элемент массива \$a1[$i] не существует<br>";
//    }
//}
// // is_array()
//if (is_array($arr22)){
//    echo "Переменная \$arr22 является массивом<br>";
//}else{
//    echo "Переменная \$arr22 не является массивом<br>";
//}
////in_array()
//if (in_array(7, $a2, true)){
//    echo "Цифра 7 существует внутри массива";
//}else{
//    echo "Цифра 7 не существует внутри массива";
//}
//array_key_exists(key, array)
//
//$mac = [3, 6, 9, 12, 15, 18];
//echo '<pre>';
//print_r($mac[rand(0, 6)]);
//echo '</pre>';
//
//$num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
//
//$rand = [rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100)];
//echo '<pre>';
//print_r($rand);
//echo '</pre>';




function getSum($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}
//echo getSum(11, 22) . "<br>";
//echo getSum(2314.11, 2233.43);

function getPlus($num3){
    $sum1 = (($num3 + $num3) * 2) / 4;
    return $sum1;
}
//echo getPlus(6) . "<br>";

function getName(string $name){
    $time = date('h');
    if ($time >= 22 || $time <= 6)
        echo "Доброй ночи";
    if ($time >= 7 && $time <= 16)
        echo "Добрый день";
    if ($time >= 17 && $time <= 21)
        echo "Добрый вечер";
    $res = $name;
    return $res;
}
//echo getName('Aleksandr');





$friends = ['Dryg1', 'Dryg2', 'Dryg3'];
function myFriends(...$item){
    foreach ($item as $value) {
        echo 'Privet' . $value . "<br>";
    }
}
//myFriends(...$friends);

function math($num1, $num2, $val){
    if ($val == "+"){
        echo $num = $num1 + $num2;
    }
    if ($val == "-"){
        echo $num = $num1 - $num2;
    }
    if ($val == "/"){
        echo $num = $num1 / $num2;
    }
    if ($val == "*"){
        echo $num = $num1 * $num2;
    }
}
//echo math(10, 5, "*");

function info($name, $agedate){
    $month = $agedate * 12;
    $day = $agedate * 365;
    return ["Name"=>$name, "Age'"=>$agedate, "В месяцях"=>$month, "В днях"=>$day];
}
//echo "<pre>";
//print_r(info('Aleksandr', 23));
//echo "</pre>";

function recur($n){
    if ($n > 100){
        echo ($n) . '<br>';
        recur($n - 10);
    }else return;
}
recur(200);

$mess = 'Some text';
$test = function (array $some) use ($mess){
    if (isset($some) && count($some) > 0){
        echo $mess;
        foreach ($some as $li) {
            echo $li . "<br>";
        }
    }
};

$test([]);
$some[] = 'text';
$test ($some);
$mess = 'change text';


$some = [12, 32, 43, 53];
$test($some);

$str = 'html css';
echo strpos($str, 'h');

$text = "PHP - dovolno prostoi yazik programirovaniya";
echo substr($text, strpos($text, 'dovol'));

$str = "<p>строка, которая содержит <strong>HTML</strong> теги</p>";
echo $str;

echo $_POST['msg'];

$str = 'Name, Lastname, email, mobile';
$newArr = explode(',', $str);
//echo '<pre>';
//print_r($newArr);
//echo '</pre>';

$arr = [
        'fio'=>'Олександр',
        'age'=>'23',
        'url'=>'http://youtube.com',
        'learn'=>['HTML', 'CSS', 'PHP']
];

//echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

//echo $_GET['name'] . '<br>';
//echo $_GET['age'];

echo "<a href='sql.php?text=" . urldecode('Privet php!') . " '>ссылка</a>";

$url = "htttps://user:admin@site.com/page/index.php?id=12&value=val#author";


$url = parse_url($url);
echo '<pre>';
print_r($url);
echo '<pre>';

echo $_GET['login'];
echo $_GET['password'];



echo "<a href='sql.php?time=" . urldecode( date('c')) . urldecode($_GET['login']) . " '>link</a>";

?>



<!--<form action="hello.php" method="post">-->
<!--    <input type="email" name="email" placeholder="Enter Email" class="form-control"><br>-->
<!--    <textarea name="message" class="form-control" placeholder="Enter message"></textarea>-->
<!--    <button type="submit" name="send" class="bth bth-success">Send</button>-->
<!--</form>-->

</body>
</html>






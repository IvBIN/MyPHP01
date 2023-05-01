<?php
//$text = 'Пивет мир.';
//
//echo $text;
//echo 'Это код на PHP';
//?>
<!---->
<!--<div>-->
<!--    <b>HTML продолжает</b> свою работу-->
<!--</div>-->
<!---->
<?php
//$text = 'мир!';
//
//echo '<strong>Привет</strong>';
//?>
<!---->
<!--<i>-->
<!--    --><?php //echo $text; ?>
<!--</i>-->
<!---->
<?php
//$text = 'мир!';
//
//echo '<strong>Привет</strong>' ;
//?>
<!---->
<!--<i>-->
<!--    --><?php //= $text ?>
<!--</i>-->

<?php
//echo "Привет мир!";
//$one = "Первая строчка";
//$two = "Вторая строчка";
//$three = "Третья строчка";
//?>
<!---->
<!--<ul>-->
<!--    <li>--><?php //echo $one; ?><!--</li>-->
<!--    <li>--><?php //= $two; ?><!--</li>-->
<!--    <li>--><?php //echo $three; ?><!--</li>-->
<!--</ul>-->

<?php
//$str_1 = "Привет";
//$str_2 = "этот";
//$str_3 = "мир!";
//
//echo "<ul>
//    <li>$str_1</li>
//    <li>$str_2</li>
//    <li>$str_3</li>
//</ul>"
//?>
<!---->
<?php
////$num_1 =6;
////$num_2 =2;
////$num_3 =7;
////$num_4 =15;
////$num_5 =-5;
////echo $num_1 + $num_2 + $num_3 + $num_4 + $num_5;
////echo  1012 * 0.3;
//echo 2 ** 15;
//?>

<?php
//$a = 1;
//$b = 2;
//echo ($a<=1 and $b>=3) ? $a + $b : $a - $b;
//?><!-- //#5-->

<?php
//$a = 10;
//$b = 7;
//echo (($a>2 and $a<11) and ($b>=6 and $b<14)) ? "Верно" : "Неверно";
//?><!-- //#6-->

<?php
//$a = $_POST['a'];
//$b = $_POST['b'];
//$operation = "divide";
//$isAvailableCalculation = true;
//$result = $a / $b;
//
//?>
<!--<form action="index.php" method="post">-->
<!--    --><?php //if($isAvailableCalculation == false){
//        echo "Вычисления не доступны";
//    }
//    else{
//        echo "Вычисления доступны";
//    }?>
<!--    <p><input type="text" name="a" placeholder="Введите первое число"></p>-->
<!--    <p><input type="text" name="b" placeholder="Введите второе число"></p>-->
<!--    <p><select>-->
<!--        <option>+</option>-->
<!--        <option>-</option>-->
<!--        <option selected value="$operation">/</option>-->
<!--        <option>*</option>-->
<!--    </select></p>-->
<!--    <p><input type="submit" value="Выполнить"></p>-->
<!--</form>-->
<!--<h1>--><?php //= $result; ?><!--</h1> //#8 sam-->

<?php
//$x = 1;
//$y = 2;
//if ($x > 0 and $y >0){
//    echo "Значение в 1-ой четверти";
//}
//elseif ($x > 0 and $y <0){
//    echo "Значение в 2-ой четверти";
//}
//elseif ($x < 0 and $y <0){
//    echo "Значение в 3-ой четверти";
//}
//elseif ($x < 0 and $y >0){
//    echo "Значение в 4-ой четверти";
//}
//else{
//    echo "Значение равно 0";
//}
//?><!-- //#Задание 1 W4-->

<?php
//$year = 1700;
//if ($year % 4 ==0){
//    if ($year % 400 ==0 or $year % 100 !=0){
//    }
//    echo "Високосный!";
//}
//else{
//    echo "Не високосный!";
//}
//?><!-- //#Задание6 W4-->

<?php
//$number = 967;
//$a = $number % 10;
//$b = round((($number % 100) / 10),0);
//$c = round(($number / 100),0);
//$sum = $c + $b + $a;
//echo $c, $b, $a;
//echo $sum;
//
//?><!-- //#Задание7 W4-->

<?php
//$a = 2;
//$b = 4;
//$c = 1;
//$D = $b**2 - 4 * $a * $c;
//if ($D == 0) {
//    echo "Один корень: х = " -$b / (2 * $a);
//}
//elseif ($D > 0){
//    echo $D;
//    echo " Корень х1 = ". ((-$b + sqrt($D)) / (2 * $a));
//    echo " Корень х2 = ". ((-$b - sqrt($D)) / (2 * $a));
//}
//else{
//    echo "Корней нет.";
//}
//?>

<!--//Циклы-->
<?php
////for ($num = 1; $num <= 100; $num ++){
////    echo $num . "<br/>";
////}
//
////$num = 1;
////while ($num <= 100){
////    echo $num . "<br/>";
////    $num++;
////}
//
////$num = 1;
////do{
////    echo $num . "<br/>";
////    $num++;
////}
////while ($num <=100);
//?>

<?php
//for ($num = 1; $num <= 100; $num ++){
//    if ($num % 7 == 0) {
//        $summ += $num;
//    }
//}
//echo $summ;
//?><!-- //Задание#3 W5-->

<?php
//$str = '';
//$number = 12;
//for ($i = 1; $i <= $number; $i++) {
//    for ($j = 1; $j <= $i; $j++) {
//        $str .= $i;
//    }
//}
//echo $str;
//?><!--  // Задание #4 W5-->

<?php
//echo "<ul>";
//$i = 1;
//while ($i <= 10){
//    echo "<li>Строка № $i</li>";
//    $i++;
//}
//echo "</ul>";
//?><!-- // Задание #5 w5-->

<?php
//for ($num = 1; $num <= 10000; $num ++){
//    if (strpos($num,3) ==FALSE and $num % 5!=0){
//        echo $num . "<br/>";
//    }
////    echo $num . "<br/>";
//}
//?><!-- // Задание #6 W5-->

<?php
//$number = 9;
//for ($i = $number; $i >= 1; $i--){
//    for ($j = 1; $j <= $i; $j++){
//        echo $i;
//    }
//    echo "<br/>";
//}
//?>

<?php
//$arr = [15, 3.14, "Строка", [12]];
//var_dump($arr);
//$arr[] = "sky";
//var_dump($arr);

//foreach ($arr as $i){
////    echo $i . "<br>";
//    var_dump($i);

//for ($i = 0; $i <count($arr); $i++){
//    var_dump($arr[$i]);

//$users = [
//        [
//            'name' => 'Иван',
//            'surname' => 'Булгаков',
//            'age' => '47'
//        ],
//        [
//            'name' => 'Максим',
//            'surname' => 'Ларионов',
//            'age' => '14'
//        ],
//];
//var_dump($users);
//echo $users[0] ['name'] . " " . $users[0] ['surname'] . "<br> Тебе " . $users[0] ['age']
//}

//$x = [];
//for ($i = 1; $i <= 10; $i++){
//    $x[] = rand(0, 10);
//}
//    $summ += $x[];
//
////for ($j = 0; $j < count($x); $j++){
////    $x[$j] = "$x[$j]$j";
////}
////var_dump($x); //Задание 2 W6
//var_dump($x);
//echo $summ; // Задание 3 W6

//$arr = [
//        0 => ['name' => 'Коля', 'salary' => 300],
//        1 => ['name' => 'Вася', 'salary' => 400],
//        2 => ['name' => 'Петя', 'salary' => 500],
//];
//foreach ($arr as $item){
//    echo $item['name'] ."-". $item['salary'];
//    echo "<br>";
//} // Задание 4 W6


//$arr =[14, 57, -56, 115, 99];
//echo $arr[count($arr) - 1];
// Задание 1 W7

//$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//$separ ='-';
//echo implode($separ, $arr);
// Задание 2 W7

//$arr1 = [1, 2, 3];
//$arr2 = ["a", "b", "c"];
//$arr3 = array_merge($arr1, $arr2);
//echo $arr3;
//var_dump($arr3);
//// Задание 3 W7

//$arr = ["a", "b", "c", "d", "e"];
//$arr = array_map(function ($upp) {
//    return strtoupper($upp);
//}, $arr);
//var_dump($arr);
//// Задание 4 W7

//$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
//$del = array_splice($arr, 1, 1);
//var_dump($del);
//var_dump($arr);
// Задание 5 W7

//$arr = ["a", "b", "c", "d", "e"];
//$del1 = array_splice($arr, 0, 1,"!");
//$del2 = array_splice($arr, 3,1,"!!");
//var_dump($del1);
//var_dump($del2);
//var_dump($arr);
// Задание 6 W7


//$arr = ["a", "b", "c", "b", "a"];
//$uniq = array_unique($arr);
//var_dump($uniq);
////Задание 7 W7

//$arr = ['a'=>1, 'b'=>2, 'c'=>3];
//$rand = array_rand($arr,1);
//var_dump($rand);
//Задание 8 W7

//$arr = ["a", "b", "c", "b", "a"];
//$count = array_count_values($arr);
//var_dump($count);
////Задание 9 W7

//*** ЗАНЯТИЕ 8 (W8) ***

//function displayInfo($name, $age = 18) {
//    echo "<div> Имя: {$name}<br>Возраст: {$age}</div><hr>";
//}
//displayInfo("Tom", 26);
//displayInfo("Bob", 30);
//displayInfo("John");

//function sumNums(...$numbers)
//{
//    $result = 0;
//    foreach ($numbers as $number) {
//        $result += $number;
//    }
//   echo "<p>Сумма: $result</p>";
//}
//sumNums(1,2,4,2,5);
//sumNums(100,2,4,2,5);
//sumNums(45);

//function multiplyNumbers(...$numbers){
//    $result = 1;
//    foreach ($numbers as $number) {
//        $result *= $number;
//    }
//    return $result;
//}
//
//$multi = multiplyNumbers(2,3,4,5);
//echo $multi . '<br>';
//echo  12 + $multi;
//echo multiplyNumbers(4,5);
//echo 12 + multiplyNumbers(4,5);

//*** Анонимные функции ***
//function welcome($message)
//{
//    $message();
//}
//welcome(function ()
//{
//    echo "Hello!";
//});

//function personInfo($name, $address, $age){
//    echo "<div>Имя: {$name}<br>Адрес: {$address}<br>Возраст: {$age}</div><hr>";
//}
//
//personInfo("Tom","Tulip str.,1122, Bronx","28");
//personInfo("Bob","Washigton str.,287, NY","31");
//personInfo("Collin","River str.,463, Sidney","27");
////Задание 1 W8

//function getResult(...$numbers)
//{
//    $result = 0;
//    foreach ($numbers as $number) {
//        $result += $number;
//    }
//    echo $result;
//}
//getResult(2,5,"sum");
////Задание 2 W8

//function personInfo($name, $address, $age){
//    $yy = abs((abs($age % 100) < 21) ? ($age % 100) : ($age % 10));
//    $grammar = (($yy == 1) ? "год" : (($yy > 1 and $yy < 5) ? "года" : "лет"));
//
//    echo "<div>Имя: {$name}<br>Адрес: {$address}<br></div>";
//    echo "<div>Возраст: {$age} {$grammar}<br></div><hr>";
//}
//
//personInfo("Tom","Tulip str., 1122, Bronx","28");
//personInfo("Bob","Washington str., 287, NY","31");
//personInfo("Collin","River str., 463, Sidney","27");
//Задание 3 W8

//function cut($str, $n_str = 10) {
////    if ($str = str($str)) {
//
//        echo "<div>Параметр 1: {$str}<br>Параметр 2: {$n_str}<br></div><hr>";
//
//}
//cut("Противоречие", 6);
//cut("Антимонополия", 12);
//cut("Рекогнасцировка");
////Задание 4 W8

//function grammNum($num, $forms){
//    $nn = abs((abs($num % 100) < 21) ? ($num % 100) : ($num % 10));
//    return (($nn == 1) ? $num . $forms[0] : (($nn > 1 and $nn < 5) ? $num . $forms[1] : $num . $forms[2]));
//
// }
//echo grammNum(51,['яблоко', 'яблока', 'яблок']);
//Задание 5 W8

//*** ЗАНЯТИЕ  9 ***

$strBit1 = "100011";
$strBit2 = "11111111";
if (strlen($strBit1) < 8 and strlen($strBit1) > 8){
    $strBit1 = str_pad($strBit1, 8, 1);
}
$strBit3 =$strBit1^$strBit2;
echo $strBit3;
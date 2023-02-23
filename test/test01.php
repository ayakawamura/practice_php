<?php
echo "これで表示";

$test = "変数";
print $test;

$test = "変数を更新";
echo "$test<br/>";

define("title","定数");
echo title;

define("title","定数を更新"); //更新されない
echo "title<br/>";//定数は""で囲むと文字扱いされる

define("Tax",1.08);
echo 300 * Tax ;
?>

<?php
//boolean（真偽）
$a = True;

//integer（整数）
$b = 0123;

//float(小数)
$c = 0.01;
echo "$c<br/>";


?>

<?php
$price = 300;
$pretax_price = $price * Tax;
$unit = "円";

print "300円の税込は".$pretax_price.$unit."です<br/>";
echo "$price<br/>";

$numbers = [10,20,30,40,50];
echo $numbers[1];

?>
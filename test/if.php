<?php
$result = 70;

if ($result > 80){
  echo "合格";
}elseif($result == 80){
  echo "ピッタリ！";
}elseif($result > 60){
  echo "惜しい";
}else{
  echo "残念";
}

?>
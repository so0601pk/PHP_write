<?php

$test_1 = 7;
$test_1 = 3;

if($test_1 === 7){
    echo 'それは' . $test_1 . 'です';
}else{
    echo 'それは' . $test_1 . 'ではありません';
}

$signale = '';
if(empty($signale)){
    echo '変数は空です';
}
$array_push = ['りんご','なし'];

array_push($array_push,'ぶどう','みかん');

echo '<pre>';
var_dump($array_push);
echo'</pre>';


?>
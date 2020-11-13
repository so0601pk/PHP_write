<?php

//インプット引き数なし
//アウトプット戻り値なし

function test(){
    //処理
    echo 'テスト';
}

test();

//インプット引き数あり
//アウトプット戻り値なし


$comment = 'コメント2';
function getComment($string){
    //処理
    echo $string;
}

getComment($comment);

//インプット引き数なし
//アウトプット戻り値なし
function getNumberOfComment(){
    //処理
    return 5;
}

echo(getNumberOfComment());

//引数2つ
//戻り値あり

function sumPrice($int1, $int2){
    //処理
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(3,5);
echo $total;


?>
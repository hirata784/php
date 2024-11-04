<?php
// // 引数１戻り値あり
// function outputNumber($a)
// {
//     echo $a;
//     return;
// }

// outputNumber(5);

// // 引数２戻り値あり
// function addNumber($num1, $num2)
// {
//     $value = $num1 + $num2;
//     return $value;
// }

// $total = addNumber(2, 3);
// echo $total;

// // 引数戻り値なし
// function outputFive()
// {
//     echo 5;
// }

// outputFive();

// function scoreSum($score1, $score2, $score3)
// {
//     $sum = $score1 + $score2 + $score3;
//     // 210点以上で合格
//     if($sum >= 210){
//         echo '合計点は'.$sum.'なので合格です';
//         // 209点以下で不合格
//     }else{
//         echo '合計点は'.$sum.'なので不合格です';
//     }
// }

// scoreSum(50, 70, 50);



// 三角形：底辺✖︎高さ÷２
function triangle($bottom, $height)
{
    $area = ($bottom * $height) *1/2;
    return $area;
}

// 四角形：縦✖︎横
function square($height, $width)
{
    $area = $height * $width;
    return $area;
}

// 台形：(上辺＋下辺)✖️高さ÷２
function trapezoid($topside, $Bottomside, $height)
{
    $area = ($topside + $Bottomside) * $height * 1/2;
    return $area;
}

echo triangle(4, 7)."\n";
echo square(6, 9)."\n";
echo trapezoid(5, 10, 4);
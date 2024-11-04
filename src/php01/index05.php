<?php
// for($i = 1; $i <= 10; $i++){
//     $i += 1;
//     echo $i;
//     echo "<br/>";
// }

// $count = 0;
// while($count < 20){
//     $count += 1;
//     echo $count.'<br/>';
// }

// ループは１００まで
// $count = 0;
// while($count <= 100){
//     // ３の倍数の時スキップ
//     if($count % 3 == 0){
//         $count++;
//         continue;
//     }

//     // ２０周目でループから抜ける
//     if($count == 20){
//         break;
//     }

//     // ここで出力
//     echo $count.'<br/>';
//     $count++;
// }

// $nume  = 0;
// do{
//     echo "num = ".$nume.'<br/>';
//     $nume++;
// }while($nume < 3);

// FizzBuzz問題
// ３で割り切れる：Fizz
// ５で割り切れる：Buzz
// ３でも５でも割り切れる：FizzBuzz
// それ以外の数：数字
// を表示。これを１~５０

// for($i = 1; $i  <= 50; $i++){
//     // ３で割り切れる：Fizz
//     if($i % 3 == 0){
//         // ３でも５でも割り切れる：FizzBuzz
//         if($i % 5 == 0){
//             echo 'FizzBuzz'.'<br/>';
//         }
//         echo 'Fizz'.'<br/>';
//     }elseif($i % 5 == 0){
//         // ５で割り切れる：Buzz
//         echo 'Buzz'.'<br/>';
//     }else{
//         // それ以外の数：数字
//         echo $i.'<br/>';
//     }
// }

// 丸を５✖️５で表示
for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= 5; $j++){
        echo "●";
    }
    echo '<br/>';
}
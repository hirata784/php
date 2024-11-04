<?php
// Taro(25歳men)
// Jiro(20歳men)
// hanako(16歳women)
// 以上３名のデータを配列化し、全て出力する

$people = [
    [
        "first_name" => 'Taro',
        "age" => 25,
        "gender" => 'men'
    ],
    [
        "first_name" => 'Jiro',
        "age" => 20,
        "gender" => 'men'
    ],
    [
        "first_name" => 'hanako',
        "age" => 16,
        "gender" => 'women'
    ]
    ];

    // echo $people[0]["first_name"]."<br/>";
    // echo $people[0]["age"]."<br/>";
    // echo $people[0]["gender"]."<br/>";

foreach($people as $key=>$vals){
    echo ($key." ".$vals);
    echo "<br/>";
}

// 問題の前提が間違っていた。
// 連想配列は使わない。
// 連想配列使って出す方法。余裕あれば質問してみよう


// $people = [
//   ['Taro', 25, 'men'],
//   ['Jiro', 20, 'men'],
//   ['hanako', 16, 'women']
// ];

// foreach ($people as $person) {
//   echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
// }
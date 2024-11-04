<?php
// ファイルを読み込むという点では同じですが、「require」では複数回読み込み(定義を呼び出し)をすることが可能でしたが、「require_once」では一度ファイルを読み込んだものは二回目以降、読み込まないようです。

require_once('functions/search_city_time.php');
$tokyo = searchCityTime('東京');
// ENT_QUOTES を指定することで、下記のようにエスケープを行ってくれます。
// 「"」が「&quot;」に変換される
// 「'」が「&#o39;」または「&apos;」に変換される
// 「<」が「&lt;」に変換される
// 「>」が「&gt;」に変換される
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/php03/index.php" class="header__logo">World Clock</a>
        </div>
    </header>

    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img src="img/<?php echo $tokyo['img']?>" alt="国旗" class="result-card__img">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $tokyo['name']?></p>
                        <p class="result-card__time"><?php echo $tokyo['time']?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img src="img/<?php echo $comparison['img']?>" alt="国旗" class="result-card__img">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $comparison['name']?>
                        </p>
                        <p class="result-card__time"><?php echo $comparison['time']?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
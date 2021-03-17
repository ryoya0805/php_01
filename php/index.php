

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>〇娘ソシャゲガチャシュミレーター</title>

    <link rel="stylesheet" href="css/style.css?v=2">
</head>
<body>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
  <h1>
  <?php

//キャラ一覧

//-------------育成馬----------------
$ssrchara = array(
    "☆3ミホノブルボン",
    "☆3テイエムオペラオー",
    "☆3スペシャルウィーク",
    "☆3サイレンスズカ",
    "☆3トウカイテイオー",
    "☆3マルゼンスキー",
    "☆3オグリキャップ",
    "☆3タイキシャトル",
    "☆3メジロマックイーン",
    "☆3シンボリルドルフ",
    "☆3ライスシャワー",

);
$srchara = array(
    "☆2ゴールドシップ",
    "☆2ウォッカ",
    "☆2ダイワスカーレット",
    "☆2グラスワンダー",
    "☆2エルコンドルバザー",
    "☆2エアグルーヴ",
    "☆2マヤノトップガン",
    "☆2スーパークリーク",

);
$rchara = array(
    "☆1メジロライアン",
    "☆1アグネスタキオン",
    "☆1ウィニングチケット",
    "☆1サクラバクシンオー",
    "☆1ハルウララ",
    "☆1マチカネフクキタル",
    "☆1ナイスネイチャ",
    "☆1キングヘイロー",

);
//-------------サポート馬-------------------
$supssrchara = array(
    "☆3[SPD]ツインターボ",
    "☆3[STM]ライスシャワー",
    "☆3[GUT]ハルウララ",
    "☆3[SPD]スペシャルウィーク",
    "☆3[POW]オグリキャップ",
    "☆3[STM]メジロマックイーン",
    "☆3[GUT]スペシャルウィーク",
    "☆3[SPD]サイレンススズカ",
    "☆3[SPD]トウカイテイオー",
    "☆3[POW]ウォッカ",
    "☆3[GUT]グラスワンダー",
    "☆3[POW]エルコンドルパサー",
    "☆3[STM]セイウンスカイ",
    "☆3[STM]タマモクロス",
    "☆3[WIS]ファインモーション",
    "☆3[GUT]アイネスフウジン",
    "☆3[GUT]ウィニングチケット",
    "☆3[WIS]エアシャカール",
    "☆3[SPD]ゴールドシチー",
    "☆3[SPD]サクラバシンオー",
    "☆3[STM]スーパークリーク",
    "☆3[POW]スマートファルコン",
    "☆3[SPD]ニシノフラワー",
    "☆3[SPD]ヒューペガサス",
    "☆3[FND]駿川たづな",
);
$supsrchara = array(
    "☆2[POW]ダイタクヘリオス",
    "☆2[SPD]スイープトウショウ",
    "☆2[WIS]フジキセキ",
    "☆2[WIS]ダイワスカーレット",
    "☆2[POW]ヒシアマゾン",
    "☆2[GUT]エアグルーヴ",
    "☆2[POW]アグネスデジタル",
    "☆2[POW]ビワハヤヒデ",
    "☆2[STM]マヤノトップガン",
    "☆2[STM]マンハッタンカフェ",
    "☆2[POW]ミホノブルボン",
    "☆2[POW]メジロライアン",
    "☆2[GUT]ユキノビジン",
    "☆2[WIS]アグネスタキオン",
    "☆2[SPD]エイシンフラッシュ",
    "☆2[SPD]ナリタタイシン",
    "☆2[WIS]マーベラスサンデー",
    "☆2[WIS]マチカネフクキタル",
    "☆2[GUT]メイショウドトウ",
    "☆2[WIS]メジロドーベル",
    "☆2[GUT]ナイスネイチャ",
    "☆2[SPD]キングヘイロー",
    "☆2[FND]桐生院葵",
);
$suprchara = array (
    "☆1[POW]ダイタクヘリオス",
    "☆1[SPD]スイープトウショウ",
    "☆1[WIS]フジキセキ",
    "☆1[WIS]ダイワスカーレット",
    "☆1[POW]ヒシアマゾン",
    "☆1[GUT]エアグルーヴ",
    "☆1[POW]アグネスデジタル",
    "☆1[POW]ビワハヤヒデ",
    "☆1[STM]マヤノトップガン",
    "☆1[STM]マンハッタンカフェ",
    "☆1[POW]ミホノブルボン",
    "☆1[POW]メジロライアン",
    "☆1[GUT]ユキノビジン",
    "☆1[WIS]アグネスタキオン",
    "☆1[SPD]エイシンフラッシュ",
    "☆1[SPD]ナリタタイシン",
    "☆1[WIS]マーベラスサンデー",
    "☆1[WIS]マチカネフクキタル",
    "☆1[GUT]メイショウドトウ",
    "☆1[WIS]メジロドーベル",
    "☆1[GUT]ナイスネイチャ",
    "☆1[SPD]キングヘイロー",
    "☆1[FND]桐生院葵",
    "☆1[SPD]ツインターボ",
    "☆1[STM]ライスシャワー",
    "☆1[GUT]ハルウララ",
    "☆1[SPD]スペシャルウィーク",
    "☆1[POW]オグリキャップ",
    "☆1[STM]メジロマックイーン",
    "☆1[GUT]スペシャルウィーク",
    "☆1[SPD]サイレンススズカ",
    "☆1[SPD]トウカイテイオー",
    "☆1[POW]ウォッカ",
    "☆1[GUT]グラスワンダー",
    "☆1[POW]エルコンドルパサー",
    "☆1[STM]セイウンスカイ",
    "☆1[STM]タマモクロス",
    "☆1[WIS]ファインモーション",
    "☆1[GUT]アイネスフウジン",
    "☆1[GUT]ウィニングチケット",
    "☆1[WIS]エアシャカール",
    "☆1[SPD]ゴールドシチー",
    "☆1[SPD]サクラバシンオー",
    "☆1[STM]スーパークリーク",
    "☆1[POW]スマートファルコン",
    "☆1[SPD]ニシノフラワー",
    "☆1[SPD]ヒューペガサス",
    "☆1[FND]駿川たづな",
);

echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";



echo "某競馬アプリ";

echo "<br>";

echo "10連ガチャシュミレーター";

echo "<br>";
echo "<br>";
echo "育成馬";
echo "<br>";
echo "単発１０回分";
echo "<br>";
echo "(提供割合・・・☆3:3% ☆2:18% ☆1:79%)";
for($i = 1; $i<=10; $i++){
echo "<p>".$i."回目:";

    
$data = rand(1,100);

//↓↓↓↓どの数字に入っているか確認用↓↓↓
// echo  $data;


//SSR3%
//SR18%
//R79%

//ピックアップ排出、天井は考えない物とする。

if($data <= 3){
    echo "SSR";

 $ssr = array_rand ($ssrchara);
 echo $ssrchara[$ssr];

}

elseif($data <= 18){
 echo "SR";   
 $sr = array_rand($srchara);
 echo $srchara[$sr];
}

elseif($data <= 100){
 echo "R";
$r = array_rand($rchara);
echo $rchara[$r];

}
echo "</p>";

}
echo "---------------------------------------";
echo "<br>";
echo "10連ガチャ";
echo "<br>";
echo "(提供割合・・・☆3:3%　☆2:97% ☆1:0%)";
echo "<br>";

for($i = 1; $i<=10; $i++){
    echo "<p>".$i."回目:";
    
        
    $data = rand(1,100);
    
    //↓↓↓↓どの数字に入っているか確認用↓↓↓
    // echo  $data;
    
    
    //SSR3%
    //SR97%
    //R0%
    
    //ピックアップ排出、天井は考えない物とする。
    
    if($data <= 3){
        echo "SSR";
    
     $ssr = array_rand ($ssrchara);
     echo $ssrchara[$ssr];
    
    }
    
    elseif($data <= 100){
     echo "SR";   
     $sr = array_rand($srchara);
     echo $srchara[$sr];
    }
    
   
    echo "</p>";
    
    }

    echo "---------------------------------------";
    echo "<br>";
    echo "<br>";
    echo "サポート馬";
    echo "<br>";
    echo "単発１０回分";
    echo "<br>";
    echo "(提供割合・・・☆3:3% ☆2:18% ☆1:79%)";
    for($i = 1; $i<=10; $i++){
    echo "<p>".$i."回目:";
    
        
    $data2 = rand(1,100);
    
    //↓↓↓↓どの数字に入っているか確認用↓↓↓
    // echo  $data2;
    
    
    //SSR3%
    //SR18%
    //R79%
    
    //ピックアップ排出、天井は考えない物とする。
    
    if($data2 <= 3){
        echo "SSR";
    
     $supssr = array_rand ($supssrchara);
     echo $supssrchara[$supssr];
    
    }
    
    elseif($data2 <= 18){
     echo "SR";   
     $supsr = array_rand($supsrchara);
     echo $supsrchara[$supsr];
    }
    
    elseif($data2 <= 100){
     echo "R";
    $supr = array_rand($suprchara);
    echo $suprchara[$supr];
    
    }
    echo "</p>";
    
    }
    echo "---------------------------------------";
    echo "<br>";
    echo "10連ガチャ";
    echo "<br>";
    echo "(提供割合・・・☆3:3%　☆2:97% ☆1:0%)";
    echo "<br>";
    
    for($i = 1; $i<=10; $i++){
        echo "<p>".$i."回目:";
        
            
        $data2 = rand(1,100);
        
        //↓↓↓↓どの数字に入っているか確認用↓↓↓
        // echo  $data2;
        
        
        //SSR3%
        //SR97%
        //R0%
        
        //ピックアップ排出、天井は考えない物とする。
        
        if($data2 <= 3){
            echo "SSR";
        
         $supssr = array_rand ($supssrchara);
         echo $supssrchara[$supssr];
        
        }
        
        elseif($data2 <= 100){
         echo "SR";   
         $supsr = array_rand($supsrchara);
         echo $supsrchara[$supsr];
        }
        
       
        echo "</p>";
        
        }
?>
</h1>




</div>




    







</body>
</html>

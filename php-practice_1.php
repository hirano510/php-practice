<?php
// Q1 変数と文字列
$name = '平野';

echo '私の名前は「$name」です。';



// Q2 四則演算
$num = 5 * 4;
echo $num;

$num = $num / 2;
echo "\n$num";



// Q3 日付操作
date_default_timezone_get('UTC');

echo date('現在の時刻は、 Y年n月j日 H時i分s秒です。');

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === "windows" || $device === "mac"){
  echo "使用のOSは、 $device です。";
} else {
  echo 'どちらでもありません';
}

// Q5 条件分岐-2 三項演算子
$age = 25;

$age = ($age > 20) ? '成人です。' : '未成年です。';
echo $age;

// Q6 配列
$kanto = ['東京', '千葉', '埼玉', '神奈川', '群馬', '栃木', '茨城'];

echo "$kanto[3]と$kanto[4]は関東地方の都道府県です。";


// Q7 連想配列-1
$prefectural = [
  ['東京', 'location' => '新宿'],
  ['千葉', 'location' => '千葉市'],
  ['埼玉', 'location' => 'さいたま市'],
  ['神奈川', 'location' => '横浜市'],
  ['群馬', 'location' => '前橋市'],
  ['栃木', 'location' => '宇都宮市'],
  ['茨城', 'location' => '水戸市']
];

for ($i = 0; $i <= 6; $i++) {
    echo $prefectural[$i]["location"]."\n";
}


// Q8 連想配列-2
for ($i = 0; $i <= 6; $i++) {
  if ($prefectural[$i]["location"] === "さいたま市"){
  echo $prefectural[$i][0]."県の県庁所在地は、".$prefectural[$i]["location"]."です。";
  }
}


// Q9 連想配列-3
$prefectural[] = ['大阪', 'location' => '大阪市'];
$prefectural[] = ['愛知', 'location' => '名古屋市'];

for ($i = 0; $i <= 8; $i++) {
  if ($i < 6){
  echo $prefectural[$i][0]."県の県庁所在地は、".$prefectural[$i]["location"]."です。\n";
  } else {
  echo $prefectural[$i][0]."県は関東地方ではありません。\n";
  }
}

// Q10 関数-1
function hello($name = '田中') 
{
  echo $name.'さん、こんんちは。'."\n";
}

hello('金谷');
hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  echo $price.'円の商品の税込み価格は'.$taxInPrice.'円です。';
}

calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($num) 
{
  if ($num % 2 === 0) {
    echo $num.'は偶数です。';
  } else {
    echo $num.'は奇数です。';
  }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade)
{
  switch ($grade) {
    case 'A':
    case 'B':
    echo '合格です。'."\n";
    break;

    case 'C':
    echo '合格ですが追加課題がります。'."\n";
    break;

    case 'D':
    echo '不合格です。'."\n";
    break;
    default:
    echo '判定不明です。講師に問い合わせてください。'."\n";
    break;
  }
}

  evaluateGrade('B');
  evaluateGrade('F');

?>
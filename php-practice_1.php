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
  '東京' => '新宿',
  '千葉' => '千葉市',
  '埼玉' => 'さいたま市',
  '神奈川' => '横浜市',
  '群馬' => '前橋市',
  '栃木' => '宇都宮市',
  '茨城' => '水戸市'
];

foreach ($prefectural as $x => $y) {
    echo $y."\n";
}


// Q8 連想配列-2
foreach ($prefectural as $x => $y) {
  if ($x === '埼玉') {
    echo $x."県の県庁所在地は、".$y."です。";
  }
}


// Q9 連想配列-3
$prefectural['大阪'] = '大阪市';
$prefectural['愛知'] = '名古屋';

foreach ($prefectural as $x => $y) {
  if ($x === '大阪' || $x === '愛知') {
    echo $x.'は関東地方ではありません。'."\n";
  } else {
      echo $x."県の県庁所在地は、".$y."です。"."\n";
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
  return $price.'円の商品の税込み価格は'.$taxInPrice.'円です。';
}

echo calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($num) 
{
  if ($num % 2 === 0) {
    echo $num.'は偶数です。';
  } else {
    return $num.'は奇数です。';
  }
}

echo distinguishNum(11);
echo distinguishNum(24);

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
    return '判定不明です。講師に問い合わせてください。'."\n";
    break;
  }
}

echo  evaluateGrade('B');
echo  evaluateGrade('F');

?>
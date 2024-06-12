<?php
// Q1 変数と文字列
$name = '平野';

echo '私の名前は'.$name.'です。';



// Q2 四則演算
$num = 5 * 4;
echo $num;

$num = $num / 2;
echo "\n$num";



// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

echo date('現在の時刻は、Y年n月j日 H時i分s秒です。');

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
$kanto = [
  '東京',
  '千葉',
  '埼玉',
  '神奈川',
  '群馬',
  '栃木',
  '茨城'
];

echo "$kanto[2]と$kanto[3]は関東地方の都道府県です。";


// Q7 連想配列-1
$prefectures = [
  '東京' => '新宿',
  '千葉' => '千葉市',
  '埼玉' => 'さいたま市',
  '神奈川' => '横浜市',
  '群馬' => '前橋市',
  '栃木' => '宇都宮市',
  '茨城' => '水戸市'
];

foreach ($prefectures as $location) {
    echo $location . "\n";
}


// Q8 連想配列-2
foreach ($prefectures as $prefecture => $location) {
  if ($prefecture === '埼玉') {
    echo $prefecture . "県の県庁所在地は、" . $location . "です。";
  }
}


// Q9 連想配列-3
$prefectures['大阪'] = '大阪市';
$prefectures['愛知'] = '名古屋';

foreach ($prefectures as $prefecture => $location) {
  if ($prefecture === '大阪' || $prefecture === '愛知') {
    echo $prefecture . 'は関東地方ではありません。' . "\n";
  } else {
      echo $prefecture . "県の県庁所在地は、" . $location . "です。"."\n";
  }
}

// Q10 関数-1
function hello($name = '田中') 
{
  echo $name . 'さん、こんんちは。' . "\n";
}

hello('金谷');
hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price)
{
  return $taxInPrice = $price * 1.1;
}

$taxInPrice = calcTaxInPrice(1000);

echo '1000円の商品の税込み価格は' . $taxInPrice . '円です。';


// Q12 関数とif文
function distinguishNum($num) 
{
  if ($num % 2 === 0) {
    echo $num . 'は偶数です。';
  } else {
    return $num . 'は奇数です。';
  }
}

$odd = distinguishNum(11);
$even = distinguishNum(24);

echo $odd;
echo $even;

// Q13 関数とswitch文
function evaluateGrade($grade)
{
  switch ($grade) {
    case 'A':
    case 'B':
    echo '合格です。' . "\n";
    break;

    case 'C':
    echo '合格ですが追加課題がります。' . "\n";
    break;

    case 'D':
    echo '不合格です。' . "\n";
    break;
    default:
    return '判定不明です。講師に問い合わせてください。' . "\n";
    break;
  }
}

$passed = evaluateGrade('B');
$unclear = evaluateGrade('F');

echo $passed;
echo $unclear;

?>
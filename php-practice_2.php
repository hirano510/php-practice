<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
    echo 'tic-tac' . "\n";

  } else if ($i % 5 == 0) {
    echo 'tac' . "\n";

  } else if ($i % 4 == 0) {
    echo 'tic'. "\n";

  } else 
  echo $i . "\n";
  
}


// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// 問題１
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';


// 問題２
foreach($personalInfos as $x => $personalInfo) {
  echo ($x + 1) . '番目の' . $personalInfo['name'] . 'のメールアドレスは' . $personalInfo['mail'] . 'で、電話番号は' . $personalInfo['tel'] . 'です。' . "\n";
}


//問題３
$ageList = [25, 30, 18];

foreach ($ageList as $x => $y) {
    $personalInfos[$x]['age'] = $y;
}


// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$hirano = new Student(20,'平野');

echo '学籍番号' . $hirano->studentId . '番の生徒は' . $hirano->studentName . 'です。';


// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題１
$date = new DateTime();
$date->modify('-1months');
echo $date->format('Y-m-d');


//問題２
$dateNow = new DateTime();
$datePast = new DateTime('1992-4-25');
$interval = $datePast->diff($dateNow);
echo $interval->format('あの日から%a日経過しました。');



?>
<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します \n\n";
for ($i =1; $i < 101; $i++){
    if ($i %20 === 0 ) {
        echo "ti-ctac\n";
    }elseif ($i %4 === 0) {
        echo "tic\n";
    }elseif ($i %5 === 0) {
        echo "tac\n";
    }else{
        echo  $i . "\n";
    }
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
var_dump($personalInfos);
  //問題１
echo "{$personalInfos[1]["name"]}Bの電話番号は{$personalInfos[1]["tel"]}です。";
  //問題２
foreach($personalInfos as $index ){
  $num = array_search($index, $personalInfos) +1 ; 
  echo "{$num}番目の{$index['name']}のメールアドレスは{$index['mail']}で、電話番号は{$index['tel']}です。\n";
}
  //問題３
$ageList = [25, 30, 18];
$ageList = [25, 30, 18];
foreach ($ageList as $index=>$age ){
    $personalInfos[$index]['age'] = $age;      
} 
var_dump($personalInfos);


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

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
$kitama = new Student(120,'北間');
// echo $kitama->studentId;
echo "学籍番号{$kitama->studentId}番の生徒は{$kitama->studentName}です。";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class= "php")
    {
        // echo $this->studentName;
        echo "{$this ->studentName}は{$class}の授業に参加しました。学籍番号：{$this ->studentId}\n";
    }
}

$kitama = new Student(120,'北間');
$kitama->attend("JAVA");


// Q5 定義済みクラス
//問題１
$oneMonthAgo = new DateTime("-1month");
echo $oneMonthAgo->format('Y-m-d');
// echo "{$now->modify("-1 months")->format("Y-m-d H:i:s")}";

//問題２
$now = new DateTime();
$old = new DateTime("1992-4-25");

$interval =  $now->diff($old);
echo "あの日から{$interval->days}日経過しました。";

?>
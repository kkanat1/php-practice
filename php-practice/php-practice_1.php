<?php
// Q1 変数と文字列
$name = '北間';
echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num= 5*4;
echo $num . "\n";
echo $num/2;

// Q3 日付操作
$y = date("Y");
$m = date("m");
$d = date("d");
$h = date("H");
$i = date("i");
$s = date("s");
echo '現在時刻は、' . $y .  "年 " .  $m . "月" . $d . "日 ";
echo  $h .  "時" . $i . "分" . $s . "秒です。";

// Q4 条件分岐-1 if文
if ($device === 'windows') {
  echo "使用OS、は{$device}です。";
}elseif ($device === 'mac') {
  echo "使用OS、は{$device}です。";
}else{
  echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
$age = 23;
echo $age >=18? "成人です。":"未成年です";

// Q6 配列
$kanto = ["茨城県", "栃木県","群馬県","埼玉県","千葉県", "東京都", "神奈川県"];
echo "{$kanto[2]}と{$kanto[3]}は関東地方の都道府県です。";

// Q7 連想配列-1
$kentyo = ["茨城県"=>"水戸市",
    "栃木県"=>"宇都宮市" ,
    "群馬県" =>"前橋市" ,
    "埼玉県"=>"さいたま市",
    "千葉県" => "千葉市", 
    "東京都" =>"新宿区",
    "神奈川県" => "横浜市"
    ];
foreach($kentyo as $key => $val){
    echo $val . "/n";
}

// Q8 連想配列-2
foreach($kentyo as $key => $val){
  if ($key === "埼玉県")
  echo "{$key}の県庁所在地は、{$val}です。";
}

// Q9 連想配列-3
$kentyo["石川県"] ="金沢市";
$kentyo["富山県"] ="富山市";
foreach($kentyo as $key => $val){
    if (in_array($key,$kanto)) {
        echo "{$key}の県庁所在地は、{$val}です。\n";
    }else{
      echo $key . "は関東地方ではありません。\n";   
    }
}

// Q10 関数-1
function sayHello($name){
  echo "{$name}さん、こんにちは\n";
}
sayHello("北間");
sayHello("佐藤");

// Q11 関数-2
function calcTaxInPrice($price){
  return $price *1.1;
}
$price = 500;
$taxInPrice =calcTaxInPrice($price);
echo "{$price}円の商品の税込価格は{$taxInPrice}円です。";

// Q12 関数とif文
function  distinguishNum($num){
  if($num %2 ===0){
    echo "{$num}は偶数です\n";
  }else {
    echo "{$num}は奇数です\n";
  }
}
distinguishNum(2);
distinguishNum(1);


// Q13 関数とswitch文
function evaluateGrade($grade){
  switch($grade){
    case 'A' || 'B':
      echo "合格です\n";
    break;
      
    case 'C':
        echo "合格ですが追加課題があります。\n";
        break;

    case 'D':
        echo '不合格です\n';
        break;
    default:
        echo  "判定不明です。講師に問い合わせてください。\n";
        break;
  }
} 
evaluateGrade("B");
evaluateGrade("");

?>
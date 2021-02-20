<?php
# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

$name[] = "斎藤";
print_r($name);

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載

$array = array_merge($array1,$array2);
print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載

$counter = 0;

foreach($numbers as $number){

   if($number == 3){
      $counter++;
      echo $counter."回";
   }

}


echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載

$sports = array_diff($sports,[null]);

print_r($sports);
  

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載

if(empty($array1)){
   echo "true";
}else {
   echo "false";
}

echo "<br>";

if(empty($array2)){
   echo "true";
}else{
   echo "false";
}

echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載

foreach($numbers1 as $number){
   $numbers2[] = $number * 10;
}

print_r($numbers2);

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載

$array = array_map("intval",$array);
print_r($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載

$programming_languages = array_map("ucfirst",$programming_languages);
$upper_case_programming_languages = array_map("strtoupper",$programming_languages);

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

  $members_number = 1;

  foreach($names as $name){
  
     $members_name[] = "会員No.".$members_number." ".$name;
     $members_number++;
     
  }
  
  print_r($members_name);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載

  foreach($foods as $food){
    if(preg_match("/うに/",$food)){
       echo "好物です"."<br>";
    }else{
       echo "まぁまぁ好きです"."<br>";
    }
 }

echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載

$sports2 = [];
foreach($sports as $sport){
   if(is_array($sport)){
      $sports2 = array_merge($sports2,$sport);
   }else{
      array_push($sports2,$sport);
   }
}

$sports2 = array_unique($sports2);
$sports3 = [];
$number = 1;

foreach($sports2 as $sport){
  $sport_name = "No.".$number." ".$sport;
  array_push($sports3,$sport_name);
  $number++;
}

echo "ユーザーの趣味一覧".PHP_EOL;
foreach($sports3 as $sport){
  echo $sport.PHP_EOL;
}


echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載

  print_r($data["user"]["name"]);

  echo "<br>";

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載

  $user_data = array_merge($user_data,$update_data);
  print_r($user_data);

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載

  foreach($data as $key => $value){
    $key_data[] = $value;
  }
 
  print_r($key_data);

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載

 if(array_key_exists("age",$data1)){
    echo "OK"."<br>";
 }else{
    echo "NG"."<br>";
 }
 
 if(array_key_exists("age",$data2)){
    echo "OK"."<br>";
 }else{
    echo "NG"."<br>";
 }

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載

 foreach($users as $user_data){
    echo "私の名前は".$user_data["name"]."です。";
    echo "年齢は".$user_data["age"]."です。";
    echo "<br>";
 }

echo PHP_EOL;

print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

  private $name;
   private $age;
   private $gender;

   public function __construct($name, $age, $gender){
      $this->name = $name;
      $this->age = $age;
      $this->gender = $gender;
   }

   public function info(){
      echo "名前：".$this->name."<br>";
      echo "年齢：".$this->age."<br>";
      echo "性別：".$this->gender."<br>";
   }

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加

  class Man {

    private $name;
    private $age;
 
    public function __construct($name, $age){
       $this->name = $name;
       $this->age = $age;
    }
 
    public function introduce(){
       if($this->age >= 20){
          echo "こんにちは、".$this->name."と申します。宜しくお願いいたします。"."<br>";
       }else{
          echo "はいさいまいど〜、".$this->name."です！！！"."<br>";
       }
    }
 }


$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加
  public $name;
   public $age;

   public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
   }

}

class Zoo
{
    
  # コードを追加
  private $zoo_name;
  private $entry_fee;

  public function __construct($zoo_name, $entry_fee){
     $this->zoo_name = $zoo_name;
     $this->entry_fee = $entry_fee;
  }

  public function info_entry_fee( Human $human){
     if($human->age <= 5){
        echo $human->name."さんの入場料金は".$this->entry_fee["infant"]."円です。<br>";
     }elseif($human->age <= 12){
        echo $human->name."さんの入場料金は".$this->entry_fee["children"]."円です。<br>";
     }elseif($human->age <= 64){
        echo $human->name."さんの入場料金は".$this->entry_fee["adult"]."円です。<br>";
     }elseif($human->age <= 120){
        echo $human->name."さんの入場料金は".$this->entry_fee["senior"]."円です。<br>";
     }
  

  }

}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;

print("#####q20#####".PHP_EOL);

for($i = 1; $i <= 30; $i++){

  if($i % 15 ==0){

    echo "FizzBuzz";
    echo "<br>";

  }elseif($i % 21 == 0){

    echo "FizzHoge";
    echo "<br>";

  }elseif($i % 3 == 0 ){

    echo "Fizz";
    echo "<br>";

  }elseif($i % 5 ==0){

     echo "Buzz";
     echo "<br>";

  }elseif($i % 7 == 0){

     echo "Hoge";
     echo "<br>";

  }else{

    echo $i."<br>";


  }

}

?>

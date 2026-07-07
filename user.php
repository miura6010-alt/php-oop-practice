<?php

class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "こんにちは、私は{$this->name}です。年齢は{$this->age}歳です。";
    }

    public function isAdult() {
        return $this->age >= 18;
    }
}

$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);

echo "<h1>ユーザー管理プログラム</h1>";
echo "<h2>自己紹介</h2>";

echo $user1->introduce() . "<br>";
echo $user2->introduce() . "<br>";
echo $user3->introduce() . "<br>";

echo "<h2>成人判定</h2>";
if ($user1->isAdult()) {
    echo "{$user1->name}は成人です。<br>";
} else {
    echo "{$user1->name}は未成年です。<br>";
}
if ($user2->isAdult()) {
    echo "{$user2->name}は成人です。<br>";
} else {
    echo "{$user2->name}は未成年です。<br>";
}
if ($user3->isAdult()) {
    echo "{$user3->name}は成人です。<br>";
} else {
    echo "{$user3->name}は未成年です。<br>";
}   

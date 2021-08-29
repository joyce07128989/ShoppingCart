<?php

class test{     // 這是一個class，有一個變數跟一個function
    public $name = "arthur";

    public function getName(){ //getName functio，return $name value
        return $this -> name;
    }
}

$test = new test(); //我想要使用test class，所以我創建一個叫做$test的test object
$name = $test -> getName(); // 使用test class的function getName，把getName 回傳的value用$name接收 

echo $name; //echo 接收到的value
?>


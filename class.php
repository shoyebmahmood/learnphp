<?php
$number1 = 12;
$number2 = 10;
if ($number1>$number2){
    echo "12 is greater than 10";
}else{
    echo "another number";
}
echo    PHP_EOL;
class Wishes{
    public $message="nice to meet you!";
}
//Wishes message  class এর অবজেক্ট তৈরি 
$dialogue = new Wishes();
$greeting =new Wishes();
// অবজেক্ট এর মাধ্যমে প্রোপার্টিতে এক্সেস
echo $dialogue->message;
echo $greeting->message;
//tips multicusor selector <ctrl></ctrl>
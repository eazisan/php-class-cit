<?php

echo"<h1>Example no 1 (htmlentities)</br><?h1>";

    $link= htmlentities("<a href='facebook.com'>Facebook</a>");
    echo html_entity_decode($link); //you can dcode html string to real function
  echo "</br>";

    echo"<h1>Example no 02 (str_repeat functio)</br><?h1>";
    $name = "Hervy </br>";
 echo str_repeat($name,3); //with str_repeat function you can repeat multiple time;

 echo"<h1>Example no 03 (hempty function)</br><?h1>";

     $username= "harrry08";
     $username1='';
     if(empty($username)){ 
      
      echo"Your username is empty";
}else {
  echo"Welcome";
}
  echo"</br>";
     if (empty($username1)){ 
  echo"Your username is empty";        
} else {
  echo"Welcome";
} 
echo"<h1>Example no 04 (isset function)</br><?h1>";

//you can use isset function to check elements
echo"</br>";
$a='';
var_dump(isset($a));
echo"</br>";
$a=null;//nulss means there are no value right now
var_dump(isset($a));
 
echo"</br>";
   
echo"<h1>Example no 05(explode and end function)</br><?h1>";
//you can convert string to array using explode function
//you can use end function cath the last array
$b="i am EA Zisan";
$c = explode(' ',$b);
echo"<pre>";
var_dump($c);
echo"</pre>";
//last name
echo"</br>";
$name ='harry stron';
$arrey = explode(' ',$name);
$lastname= end($arrey);
echo"<pre>";
var_dump($lastname);
echo"</pre>";
echo"</br>";



echo"<h1>Example no 06 (include functiom)</br><?h1>";
$d=[
  'I',
   'am',
   'EA',
   'Zisan'
];
echo implode(' ',$d);
echo"</br>";

echo"<h1>Example no 06 (arrey diff)</br><?h1>";


$user = [
  "name" => "Rahim islam",
  "age" => 23,
  "num" => '018736736'
];


$user2 = [
"name" => "EA Zisan",
"age" => 23,
"num" => '0165353443', 
];

print_r(array_diff($user,$user2));
echo"</br>";

echo"<h1>Example no 07 (count function)</br><?h1>";


$user =[ [
  'name' => 'Rahul',
  'email' => 'testing@gmail.com',
],[
  'name' => 'karim',
  'email' => 'testing@gmail.com',
],[
  'name' => 'harry',
  'email' => 'testing@gmail.com',
],[
  'name' => 'kail',
  'email' => 'testing@gmail.com',
],[
  'name' => 'luci',
  'email' => 'testing@gmail.com',
],[
  'name' => 'ruhi',
  'email' => 'testing@gmail.com',
],
];


if(count($user) > 5){
  echo "stop";
} else {
  echo "full fillup";
}
echo "<br>";

echo"<h1>Example no 07 (arrey push and pop)</br><?h1>";
//push for add  and pop for remove
$ctg =  [
  'mohra',
  'kulshi',
  'molobib Bazare',
];
array_push($ctg,'Rastarmatha','newmarket');
array_pop($ctg );
echo"<pre>";
print_r($ctg);
echo"</pre>";
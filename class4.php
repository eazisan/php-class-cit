<?php
// *scope
//declare  varrieble outeside function (global scope)
// declare inside function called (local scope)
//static
echo"<h1>EXAMPLE 1 </h1>";
$vat = 50;

function includingvat ($money,$tips){
     $tip = $tips ;
    global  $vat;
    $bill = $money;
    $totalbill = $tip + $vat  +  $bill  ;
    echo "your total bill $totalbill";
}
includingvat(300,20);
echo"</br>";
echo"<h1>EXAMPLE 2 </h1>";
//associative array
//multidimension ARRAy
$user = [
   'name' => 'Rahul',
   'phone'=> '018373367',
   'mail'=> 'rahul@gmail.com',
    'social_acount' => [
        'insta' => 'rahul007',
        'facebook' => [
            'real' => 'm.facebook.com/rahul98',
            'fake' => 'm.facebook.com/fariya007'
        ]
    ]
];
$user['phone'] = '01843183849'; // updating method
echo"<pre>";
print_r($user['social_acount']['facebook'] ['real']);
echo"</pre>";
echo"</br>";
echo"<pre>";
print_r($user['social_acount']['facebook'] ['fake']);
echo"</pre>";
echo"</br>";
echo"<pre>";
print_r($user['social_acount']['insta']);
echo"</pre>";
echo"</br>";
echo"<pre>";
print_r($user['phone']);
echo"</pre>";
echo"</br>";


echo"<h1>EXAMPLE 3</h1>";
$name1 = "ea zisan";

echo strtoupper($name1);
echo'</br>';
echo strtolower($name1);

printf("welcome to my dashboard %s",ucwords($name1));
echo'</br>';

echo"<h1>EXAMPLE 4</h1>";

$userPassword = 'ultrahash';
$encriptPass = password_hash($userPassword, PASSWORD_BCRYPT);
print_r($encriptPass);
echo '<br>';

$UserInput = 'ultrahash'; //Verify Encription password
if(password_verify($userPassword, $encriptPass)){
    echo 'Successful login! Welcome';
}else{
    echo 'Sorry! Denid access';
}
echo '<br>';

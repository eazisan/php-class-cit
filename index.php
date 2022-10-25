<?php
   echo"<h1> Example No1 (if condition)</h1></br>";
   function greaternum($num1,$num2, $num3,$num4){
    $a = $num1;
    $b = $num2;
    $c = $num3;
    $d = $num4;
     if( $a > $b && $a > $c && $a > $d){     //you can use &&  and or tag
        echo"A is greater number"; 
    }
    elseif($b > $a && $b > $c && $b > $d ){
        echo"B is a greater num";

    }elseif($c > $a && $c > $b && $c > $d ){
        echo"C is a greater num";

    }else { 
        echo"D is a greater number";

    }
   }
   greaternum(80,50,70,80);
   
   echo"<h1> Example No2 (alphabetic name check )</h1></br>";

   $username = "harry";
   if(ctype_alpha($username)){    //you canvuse ctypealpha function for check alpabetic num
    echo"Its true";
   }
   else{
    echo"your user name is unvelied";
   }
   echo"<h1> Example No3 (psetive negetive odd even number and about nasted if condition)</h1></br>";
   
   $number = 40;


   if( $number > 0){
    //* NESTER IF
    if($number%2 == 0){
        echo"$number is a posetive even number ";
    }else{
        echo"$number is a posetive odd number ";
    }
    }
  
   elseif($number < 0){
    echo"$number is a negetive number ";
   }
   else{
    echo"$number is nutral number";
   }
   echo"<h1> Example No4 (authetentication using nesting if)</h1></br>";
   $useremail = "user898@gmail.com";
   $password=9900;
   if($useremail = "user898@gmail.com"){
    // password check
    if($password == 9900){
        echo"loged in";
    }else{
        echo"your password is incorrect";
    }
   } else{
    echo"Your email adress is unvelied";
   }
   echo"<h1> Example No5 (loan monthly meter function)</h1></br>";
   function  monthlypay($amount, $year,  $interest){
        $amount=$amount;
        $year = $year;
        $interest = $interest;
        $totalinterest =  $interest / 10 * $year;
        $totalamount = $amount + $totalinterest;
        $totalpayblemonth=  $totalamount / ($year*12);
       return round($totalpayblemonth);
    }
 function getloan($income,$expans,$monthlypay){
    $totalincome = $income;
    $totalcost = $expans ;
    $savings =  $totalincome  - $totalcost;
    if($savings > $monthlypay){
        echo"You are eligable for loan. you have to pay $monthlypay  ";
    }
    else{
        echo"you are not eligabe for the loan";
    }
        
    
 }
 getloan(10000,1000, monthlypay(50000,1,10));

 echo"<h1> Example No6 (shortcut if condition under echo using ? and :)</h1></br>";

 $numbers = 3 ;
 echo $numbers%2 == 0 ? 'Even number' : 'Odd number'; // ? like if and : is like else

 echo"<h1> Example No7 (about array definding method)</h1></br>";
 $user =["HArry stron", 40,'coding'];// you can use [] or array() for definding arrey
 echo"<pre>";
 var_dump($user);
 echo"</pre>";
 echo($user[2]);

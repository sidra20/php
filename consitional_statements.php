<?php 
//if else
if(3==3){
    echo "true";
}
else{
    echo "false";
}

//even odd
if(2%2==0){
    echo "Even";
}
else{
    echo "Odd";
}

//relational
$a = 2;
$b = 3;

if($a==$b){
    echo "equal";
}
else{
    echo "Not equal";
}

echo "<br>";
$i = 3;
$j = 3.0;

//if($i==$j)
if($i===$j){
    echo "equal";
}
else{
    echo "not equal";
}

//logical and or not
if($i <5 || $i >3){
    echo "true";
}
else{
    echo "false";
}

echo(!($i!=$j));

echo "<br>";
//if else if
//marksheet
$php = 70;
$java = 90;
$kotlin = 100;
$total = $php + $java + $kotlin;
$percentage = $total/300 * 100;

if($percentage >=80 && $percentage<=100){
    echo "A1 grade";
}
else if($percentage >=70 && $percentage<80){
    echo "A grade";
}
else if($percentage >=60 && $percentage<70){

    echo "B grade";
}
else{
    echo "fail";
}

echo "<br>";
//nested if
if($percentage >=80){
    if($percentage<=100){
        echo "a1 grade";
    }
}
else if($percentage >=70){
    if($percentage<80){
        echo "A grade";
    }
}
else{
    echo "fail";
}


//switch
echo "<br>";
$vowel = 'p';
switch($vowel){
    case 'a':
        echo "Vowel";
        break;
    case 'e':
        echo "Vowel";
        break;
    case 'i':
        echo "Vowel";
        break;
    case 'o':
        echo "Vowel";
        break;
    case 'u':
        echo "Vowel";
        break;
    default:
        echo "Cosnonet";
        break;

}
?>
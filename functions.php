<?php 
$x = 5;
$y=5;
function sum(){
print("Addition of two numbers is " . 1+2);
}
sum();
echo "<br>";

//parameterized 
function add($a, $b){
    $res = $a+$b;
    print($res);
    echo "<br>";

}

//calling by value
add(2,3);

//calling by reference
add($x,$y);

//by default
function s($a="Sidra"){
    print($a);
    echo "<br>";
}
s();

//return
function walk($name){
    return $name . " is walking. <br>";
}

$result =walk("Sidra");
echo $result;
echo walk("Someone");

//recursion
//factorial
function fact($num){
    if($num ==0 || $num == 1){
        return 1;
    }
    return $num * fact($num -1);
}

echo "<br>";

$factorail = fact(5);
echo $factorail;

function sum_recursion($n){
    if($n == 1){
        return 1;
    }
    return $n + sum_recursion($n-1);
}
echo "<br>";

echo sum_recursion(10);
?>
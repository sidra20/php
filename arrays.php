<?php 

//single diemensional array
$names = array("Sidra","Yusra");
print_r ($names);
echo "<br>";
foreach($names as $name){
    echo $name ."<br>";
}

$fruits = array();
$fruits[0] = "Apple";
$fruits[1] = "Mango";
$fruits[2] = "Banana";

echo $fruits[0];
echo "<br>";
//print all

for($i=0; $i<sizeof($fruits); $i++){
    echo $fruits[$i] ."<br>";
}

echo "<br>";
foreach($fruits as $fr){
    echo $fr . "<br>";
}


echo "<br>";
//associative array

$std_details = array(
    "name" => "Sidra",
    "age" => 22,
    "dob" => "27/sep"
);
print_r($std_details);
echo "<br>";

foreach($std_details as $std){
    echo $std ."<br>";
}

//array of array
$students = array(
    "std1" => array(
        "name" => "Sidra",
        "age" => 22,
        "designation" => "Faculty" 
    ),
    "std2" => array(
        "name" => "Faiza",
        "age"=> 24,
        "desingation" => "Academic Cordinator"
    )

    );

    echo "<br>";

foreach($students as $stu){
    foreach($stu as $key => $value){
        echo $key . " = " . $value ."<br>";
    }
}
?>
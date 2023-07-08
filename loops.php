<?php 
//for, while, do while, foreach

// for($i=1; $i<=10; $i++){
//     echo $i . "<br>";
// }
// echo "<br>";
// //table
// $table = 5;
// for($i=1;$i<=10;$i++){
//     $res = $table *$i;
//     echo $table . " x " . $i . " = " . $res ."<br>";
// }

// echo "<br>";
// //sum of 10 natural numbers 
// $sum = 0;
// for($i=1; $i<=10; $i++){
//     $sum = $sum +$i;
// }
// echo $sum;

// //factorial
// //5x4x3x2x1
// echo "<br>";
// $num = 3;
// $factorial = 1;
// for($i=1; $i<$num;$i++){
//     $factorial = $factorial *($i+1);
// }
// echo $factorial;

// //fibonacci series

// echo "<br>";
// $num1=0;
// $num2=1;
// $nextTerm;
// echo $num1 ."<br>". $num2."<br>";
// for($i=1; $i<=10; $i++){
//     $nextTerm = $num1 +$num2;
//     $num1 = $num2;
//     $num2 = $nextTerm;
//     echo $nextTerm . "<br>";
// }

// //nested loop

// for($i=0;$i<5;$i++){
//     for($j=0;$j<$i;$j++){
//         echo " ";
//     }
//     for($k=0;$k<(2*$i+1);$k++){
//         echo "*";
//     }
//     echo "<br>";
// }

// for($i=1; $i<=5; $i++)
//     {
//         for($j=$i; $j<5-$i-1; $j++)
//         {
//             echo " ";
//         }
//         for($k=1; $k<=(2*$i-1); $k++)
//         {
//             echo "*";
//         }
//         echo "<br>";
//     }
// for($i=5;$i>=1;$i--){
//     for($j=1;$j<=$i;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }
echo "<br>";

// for($i=1;$i<=5;$i++){
//     for($j=1;$j<(5-$i);$j++){
//         echo " ";
//     }
//     for($k=0; $k!=(2*$i)-1; $k++){
//         echo "*";
//     }
//     echo "<br>";

// }

// for ($i=0; $i<5; $i++){
//     for ($j=5-$i; $j>1; $j--){
//        echo " ";
//     }
//     for ($k=0; $k<=$i; $k++ ){
//        echo "* ";
//     }
//     echo "<br>";
//   }

  for($i=1;$i<=5;$i++){
    for($j=1;$j<=5-$i;$j++){
        echo " ";
    }
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
  }

//   for($i=5;$i>=1;$i--){
//     for($j=1;$j<=5-$i;$j++){
//         echo " ";
//     }
//     for($k=1; $k<=$i; $k++){
//         echo "*";
//     }
//     echo "<br>";
//   }

for($i='A'; $i<='E'; $i++){
    for($j='A';$j<=$i;$j++){
        echo $i;
    }
    echo "<br>";
}


 $input = "i am sidra";

$words = preg_split('/\s+/', $input);
foreach ($words as &$word) {
    $word = str_repeat('*', strlen($word));
}

// Build the modified string
$modifiedString = implode('<br>', $words);

// Print the modified string
echo $modifiedString;

//while

$s = 1;
while($s<5){
    echo $s . '<br>';
    $s++;
}

echo "<br>";
$p =1;
do {
    echo $p .'<br>';
    $p++;
} while($p < 5);

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
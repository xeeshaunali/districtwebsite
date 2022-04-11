<?php 

define('PI', 3.1415 );

echo PI;


echo '<br>';
echo '<br>';echo '<br>';echo '<br>';



echo $x = 2;
echo '<br>';
echo $y = 3;        
echo '<br>';
echo $z = 4;
echo '<br>';
echo $x /= 2;
echo '<br>';
echo $x;
 
echo '<br>';
echo '<br>';
echo '<br>';


echo 'Value 1 == 4';
echo '<br>';
echo var_dump(1==4);

echo '<br>';


echo 'Value 1 != 4';
echo '<br>';
echo var_dump(1!=4);

echo '<br>';

echo 'Value 1 >= 4';
echo '<br>';
echo var_dump(1<=4);

echo '<br>';

echo 'Value 1 >= 4';
echo '<br>';
echo var_dump(1>=4);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


$myVar = (true and true);
echo '<br>';
echo var_dump($myVar);


$myVar = (false and true);
echo '<br>';
echo var_dump($myVar);


$myVar = (false and false);
echo '<br>';
echo var_dump($myVar);

$myVar = (true and false);
echo '<br>';
echo var_dump($myVar);



echo '<br>';
echo '<br>';

//Conditions:

// For first 50 units  Rs. 3.50/unit
// For next 100 units  Rs. 4.00/unit
// For next 100 units  Rs. 5.20/unit
// For units above 250 Rs. 6.50/unit
// You can use conditional statements.

$units = 500;

if ($units <= 50){
    echo '<br> The Unit price is: '. 3.50;
} else if($units >50 and $units <=150){
    echo '<br> The Unit price is: '. 4.00;
} else if ($units >150 and $units <=250 ){
    echo '<br> The Unit price is: '. 5.20;
} else if ($units >250 and $units<=350){
    echo '<br> The Unit price is: '. 6.50;
} else {
    echo '<br>More then 350 Unit price is Rs. 10 per Units';
}




?>
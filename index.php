<?php

// $lists = [1,2,3,4,5,6,7,8,6];

// for ($i = 0;$i <count($lists);$i++){
//     for ($j = $i+1;$j <count($lists);$j++){
//         if ($lists[$i]==$lists[$j]){
//             echo $lists[$i] ."\n";
//         }
//     }

// }



// $nums = [12,45,7,23,56,34];

// $smallest = $nums[0];

// for ($i = 0 ; $i<count($nums);$i++){
//     if($nums[$i] < $smallest){
//         $smallest = $nums[$i];
        
//     }
// }

// echo "This smallest number is $smallest";




#count even and odd numbers

// $nums = [1,2,3,4,5,6];

// $even = 0;
// $odd = 0;


// for ($i=0;$i<count($nums);$i++){
//     if ($nums[$i]%2==0){
//         $even ++;

//     }
//     else{
//         $odd ++;
//     }
// }
// echo "Even : $even \nOdd :$odd";




#revesr an array

// $array = [1,2,3,4,5,6];

// $reversed = [];
// for ($i = count($array)-1;$i >= 0 ; $i--){
//     // echo $array[$i] . " ";
//     $reversed[] = $array[$i] ;
// }
// foreach ($reversed as $value){
//     echo $value . " ";
// }
// echo $reversed;

// print_r($reversed);


#second largest


// $nums = [23,24,30,65,60];

// $second_largest = 0;
// $largest = 0 ;


// for ($i = 0 ; $i<count($nums) ; $i++){
//     if ($nums[$i] > $largest){
//         $second_largest = $largest;
//         $largest = $nums[$i];
        
//     }
//     else if ($nums[$i] > $second_largest and $nums[$i] != $largest){
//         $second_largest = $nums[$i];
//     }
// }
// print_r($nums);

// echo "Second largest number is $second_largest\n";
// echo "Largest number is $largest";




#Find the sum of all numbers

// $nums = [5,10,15,20,25];

// $result = 0;


// foreach ($nums as $num){
//     $result += $num;
// }
// $average = $result/count($nums);
// echo "Average is : $average\n";
// echo "Total : $result";


#find max and min 

// $array = [12,3,2326326,3263,4];

// $maxi = $array[0] ;
// $mini = $array[0] ;


// for ($i=1 ; $i<count($array) ;$i++){
//     if ($array[$i] > $maxi){
//         $maxi = $array[$i];
//     }
//     if ($array[$i] < $mini){
//         $mini = $array[$i];
//     }
// }

// print_r($array);

// echo "Smallest number is $mini\n";
// echo "Largest number is $maxi";



// $num = (int) readline("Please enter a number");

// $isprime = true;

// for ($i = 2 ; $i < $num/2 ; $i++){
//     if ($num % $i == 0){
//         $isprime = false;
//         break;

//     }
// }

// if ($isprime){
//     echo "$num is a Prime number\n";
// }else{
//     echo "$num is not a prime number";
// }



// $num = (int) readline("Please enter the number");

// $reverse = 0;

// while ($num > 0) {
//     $digit = $num % 10;

//     $reverse = $reverse * 10  + $digit;

//     $num = (int)($num / 10);

// }
// echo "Reversed number is: $reverse\n";



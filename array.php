<?php

// $colours = ["Red","Blue","Green","Yellow"];


// foreach ($colours as $colour){
//     echo $colour."\n";
// }



// $person = [
//     "name" => "Arjun",
//     "place" => "Ponnani",
//     'age' => 22,
// ];

// $person["Country"] = "India";


// foreach ($person as $key => $value){
//     echo $key . " : " . $value ."\n";
// }


$students = [
    [
        "name"=>"Arjun",
        "age"=>22,
        "city"=>"Kochi"
    ],
    [
        "name"=>"Akshay",
        "age"=> 22,
        "city"=>"Ponnani"


    ],
    [
        "name"=>"Jishnu",
        "age"=>21,
        "city"=>"Ponnani"
    ]
];

foreach($students as $student){
    echo $student["name"] ." ";
    echo $student["age"] ." ";
    echo $student["city"] ."\n";
}
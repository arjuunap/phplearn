<?php 

$students = [
    ['name'=>"Arjun",'marks'=> 90],
    ['name' => "Rahul",'marks' => 72],
    ['name' => "Anil",'marks' => 55],
    ['name' => "Joseph" ,"marks" => 40]
];


class Student{
    public function getgrade($mark){
        if ($mark >= 90){
            return "A";
        }
        elseif ($mark >= 75){
            return "B";
        }
        elseif ($mark >= 50){
            return "C";
        }
        else{
            return "Failed";
        }
    }

}

$s1 = new Student();

foreach ($students as $student){
    $grade = $s1->getgrade($student["marks"]);

    echo "Name: ".$student["name"]."\n";
    echo "Mark: ".$student["marks"]."\n";
    echo "Grade: ".$grade."\n\n";
}
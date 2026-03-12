<?php 
#1
// $students = [
//     ['name'=>"Arjun",'marks'=> 90],
//     ['name' => "Rahul",'marks' => 72],
//     ['name' => "Anil",'marks' => 55],
//     ['name' => "Joseph" ,"marks" => 40]
// ];


// class Student{
//     public function getgrade($mark){
//         if ($mark >= 90){
//             return "A";
//         }
//         elseif ($mark >= 75){
//             return "B";
//         }
//         elseif ($mark >= 50){
//             return "C";
//         }
//         else{
//             return "D";
//         }
//     }

// }

// $s1 = new Student();

// foreach ($students as $student){
//     $grade = $s1->getgrade($student["marks"]);

//     echo "Name: ".$student["name"]."\n";
//     echo "Mark: ".$student["marks"]."\n";
//     echo "Grade: ".$grade."\n";
//     if ($student["marks"] < 50 ){
//         echo "Result: Failed\n\n";
//     }
//     else{
//         echo "Result: Passed\n\n";
//     }
// }

#2

// $products = [
//     ["name"=>"Laptop","price"=>40000,"qty"=>1],
//     ["name"=> "Mouse","price"=>500,"qty"=>2],
//     ['name'=>'Keyword',"price"=>1500,'qty'=>1]
// ];


// class cart{
//     public function getsubtotal($price,$qty){
//         return $price * $qty;
//     }
// }


// $obj = new cart();

// $total = 0;

// foreach($products as $product){

//     $subtotal = $obj->getsubtotal($product["price"],$product["qty"]);

//     echo "Product : ". $product["name"]."\n";
//     echo "Subtotal : ".$subtotal."\n\n";

//     $total += $subtotal;
// }
// if ($total >= 50000){
//     $discount = $total*10/100;
// }else{
//     $discount = 0 ;
// }

// $amount_pay = $total - $discount ;

// echo "Total : $total"."\n";
// echo "Discount : $discount"."\n";
// echo "Amount to pay : $amount_pay";



#3


class BankAccount{
    public $balance;
    public function __construct($balance){
        $this->balance = $balance;
    }
    public function getbalance(){
        echo "Balance : ".$this->balance."\n";
    }

    public function withdraw($amount){
        if ($amount > $this->balance){
            echo "Insufficient Balance"."\n";
        }
        else{
            $this->balance -= $amount;
            echo $amount."debited from your bank"."\n";
            echo "Balance : $this->balance";

        }
        
    }

    public function deposit($amount){
        if ($amount <= 0){
            echo "Amount must be greater than Zero"."\n";
        }
        else{
            
            $this->balance += $amount;
            echo $amount."Credit to your account"."\n";
            echo "Balance : $this->balance";
        }
    }
}


$bank1 = new BankAccount(5000);

$bank1->getbalance();   
$bank1->withdraw(500);
$bank1->deposit(5000);   
$bank1->withdraw(10000);


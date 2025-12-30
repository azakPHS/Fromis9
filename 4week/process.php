<?php
// $birth = $_POST['birth'];
// $age = date('Y') - $birth;

// echo "당신의 나이는 $age 입니다.";


$person = $_POST['person'];
$age = $_POST['age'];
$time = $_POST['time'];
$price = 0;

if($age >= 18 && $time == "day"){
    $price = 20000;
}elseif($age >= 18 && $time =="night"){
    $price = 17000;
}elseif($age >= 7 && $time == "day"){
    $price = 15000;
}elseif($age >= 7 && $time == "night"){
    $price = 12000;
}else{
    $price = 0;
}

$result = $person * $price;

echo "$person 수의 사람 입장료는 ". number_format($result). "입니다.";

?>
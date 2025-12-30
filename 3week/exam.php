<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // $payment = 3000;
        // $price = 800;
        // $num = 3;

        // $change_money = $payment - ($price * $num);

        // echo "단가는 {$price}원 <br>개수는 {$num}개<br> 거스름돈은 {$change_money}원입니다.";

        // $weight = 60;
        // $height = 170;

        // $diet = ($height - 100) * 0.9;

        // if($weight >= $diet){
        //     echo "다이어트가 필요합니다.";
        // }else{
        //     echo "다이어트가 필요하지 않습니다";
        // }

        // $i = 1;
        // $j = 2;

        // while($j <= 9){
        //     while($i <= 9){
        //         $result = $j * $i;
        //         echo "$j X $i = $result<br>";
        //         $i++;  
        //     }
        //     $j++;
        //     $i = 1;
        //     echo "<br>";
        // }

        // for($i = 2; $i <= 9; $i++){
        //     for($j = 1; $j <= 9; $j++){
        //         $result = $i * $j;
        //         echo "$i X $j = $result<br>";
        //     }
        //     echo "<br>";
        // }

        // for ($a = 2; $a <= 9; $a += 3) {
        //     for ($i = 1; $i <= 9; $i++) {
        //         for ($j = $a; $j <= $a + 2 && $j <= 9; $j++) {
        //             echo "$j X $i = " . ($j * $i) . "&nbsp;&nbsp;&nbsp;&nbsp;";
        //         }
        //         echo "<br>";
        //     }
        //     echo "<br>";
        // }

        for($i = 2, $j = 3, $k = 4; $j <= 10; $i +=3, $j += 3, $k += 3){
            for($z = 1; $z <= 9; $z++){
                $result = $i * $z;
                echo "$i X $z = $result&nbsp&nbsp&nbsp";
                $result2 = $j * $z;
                echo "$j X $z = $result2&nbsp&nbsp&nbsp";
                if($k < 10){
                    $result3 = $k * $z;
                    echo "$k X $z = $result3";
                }
                echo "<br>";
            }
            echo "<br>";
        }

        

    ?>
</body>
</html>
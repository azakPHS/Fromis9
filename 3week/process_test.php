<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    
    <?php

        // $uid = $_POST['uid'];
        // $upw = $_POST['upw'];

        // echo "$uid 님 어서오세요. 당신의 패스워드는 $upw 군요!";

        $name = $_POST['name'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        $result = ($height - 100) * 0.9;

        if($weight > $result)   echo "{$name}님 다이어트가 필요합니다.";
        else    echo "$name 님 다이어트가 필요없습니다.";
        
        

    ?>

</body>
</html>
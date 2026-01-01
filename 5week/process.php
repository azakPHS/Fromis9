<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="./input.php">[데이터검색하기]</a> | 
    <a href="./serch.php">[데이터입력하기]</a>
    <br>

    <h1>주소록 입력하기</h1>

    <?php
    $uname = $_POST['uname'];
    $uphone = $_POST['uphone'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];

    //데이터베이스 연결
    $dbcon = mysqli_connect('localhost', 'root', '');
    //데이터베이스 선택
    mysqli_select_db($dbcon, 'student');
    //쿼리 준비 -> 전송
    $query = "insert into address_book values('$uname', '$uphone', '$gender', '$birth')";
    $result = mysqli_query($dbcon, $query);

    if($result){
        echo "$uname 님, 가입 신청이 완료되었습니다.";
    }else{
        echo "알 수 없는 오류 발생";
    }

    //데이터베이스 연결 해제
    mysqli_close($dbcon);

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>

    <a href="./input.php">[데이터검색하기]</a> | 
    <a href="./serch.php">[데이터입력하기]</a>
    <br>
    
    <h1>주소록 입력하기</h1>

    <form action="./process.php" method="post">

        이름: <input type="text" name = "uname"><br>
        전화: <input type="tel" name = "uphone">
        (-빼고 입력하세요)<br>

        성별: <br>
        <input type="radio" name="gender" value="mail" checked>남자<br>
        <input type="radio" name="gender" value="femail">여자<br>

        생년월일: <input type="text" name="birth">(ex: 801201)<br><br>

        <input type="submit" value="입력완료">
        
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>카운터</title>
</head>
<body>
    
    <?php
        
    //record.txt. 파일읽기
    $fp = fopen('record.txt', 'r+');
    //record.txt 파일로부터 숫자읽기(변수에 담기)
    $counts = fgets($fp, 4096);
    //읽어온 숫자(변수) 출력하기
    echo "당신은 $counts 번째 사용자입니다.";
    //읽어온 숫자 증가시키기 
    $counts++;
    //record.txt. 파일을 시작지점으로 커서 옮기기
    fseek($fp, 0);
    //record.txt에 증가된 숫자(변수) 쓰기
    fwrite($fp, $counts);
    //파일 연결 해제
    fclose($fp);
    ?>

</body>
</html>
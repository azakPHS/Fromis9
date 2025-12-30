<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        date_default_timezone_set('Asia/Seoul');
        // $dir = '../../image/'; //슬래쉬 / 반드시 붙여야함

        // $time = date("Y-m-d H:i:s");

        // $file_name = basename($_FILES['image']['name']); //image는 form에서 name 위치
        // $imagepath = $dir.$file_name;

        // move_uploaded_file($_FILES['image']['tmp_name'], $imagepath);
        // //임시파일을 지정한 경로로 옮기고 그 이름으로 저장해라
        // echo "<img src = '$imagepath'> ::: $time";

        $dir = "../../image/";
        $time = date("YmdHis");

        //$file_info = pathinfo($_FILES['image']['name']);
        //$file_type = $file_info['extension'];
        $file_name = basename($_FILES['image']['name']);
        $file_name = $time.$file_name;
        $imagepath = $dir.$file_name;
        
        move_uploaded_file($_FILES['image']['tmp_name'], $imagepath);
        $f_size = $_FILES['image']['size'];
        $result_size = number_format($f_size);

        echo "첨부파일: $file_name ($result_size bytes)<br>";
        echo "<img src = '$imagepath'><br><br>";

    ?>

</body>
</html>
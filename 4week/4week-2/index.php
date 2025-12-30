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
    $ip = $_SERVER['REMOTE_ADDR'];
    $fp = fopen('log.txt', 'a+');
    $time = date("Y-m-d H:i:s");
    
    fwrite($fp, "$ip || $time\n");
    fseek($fp, 0);

    while(!feof($fp)){
        $result = fgets($fp, 2048);
        echo "$result <br>";
    } 

    fclose($fp);

    ?>

</body>
</html>
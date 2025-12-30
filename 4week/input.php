<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>  

    <h1 style="text-align: center">놀이공원 입장표 결제</h1>
    <hr style="width:1000px; height:5px; background-color:yellow; border: 3px solid green;">
    
    <div style="display:flex; justify-content:center; margin-top:20px;">
    <div style="border:3px solid green; width:1000px; padding:20px;">
    <form action="process.php" method="post" style="text-align: center">
        <!-- <select name="choice1" size="1">
            <option>국가선택</option>
            <option value="korea">korea</option>
            <option value="japan">japan</option>
            <option value="china">china</option>
        </select> -->
        <!-- <select name="birth" size="1">
            <option>선택</option> -->
            <?php
                    // $cur_year = date('Y');
                    // $end_year = $cur_year - 100;
                    // for($year = 2025; $year > $end_year; $year--){
                    //     echo "<option value='$year'>$year</option>";
                    // }
            ?>
        <!-- </select> -->
        인원수: <input type="text" name="person"><br>
        &nbsp&nbsp&nbsp 나이: <input type="text" name="age"><br>
        <select name="time" id="" size="1">
            <option value="day">주간</option>
            <option value="night">야간</option>
        </select>
        <input type="submit" value='회원가입'>

    </form>
    </div>


</body>

</html>
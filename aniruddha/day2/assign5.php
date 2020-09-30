<!-- If the three sides of a triangle are entered by the user, write a program to check whether the
triangle is isosceles, equilateral, scalene or right angled triangle. Use the 'Get' method to post the
form. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
    <style>
        form {
            display: table;
            margin: auto;
            border: 2px solid red;
            padding: 5px;
        }
    </style>
</head>
<body>
<form action='assign5.php' method='get'>
    <span>Enter side 1</span>
    <input type="text" name="side1" id="">
    <br>
    <span>Enter side 2</span>
    <input type="text" name="side2" id="">
    <br>
    <span>Enter side 3</span>
    <input type="text" name="side3" id="">
    <input type="submit" value="clk">
</form>
</body>
</html>
<?php
    $s1=$_GET["side1"];
    $s2=$_GET["side2"];
    $s3=$_GET["side3"];
    if($s1==$s2||$s2==$s3||$s1==$s3){
        if($s2==$s3){    
            echo"equiliteral";
            // && $s1==$s3 && $s3==$s2
        }
        else{
            echo"isosceles";
        }
    }
    else{
        echo"scalene or right angled triangle";
    }
?>
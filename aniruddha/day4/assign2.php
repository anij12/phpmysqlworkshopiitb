<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str fun in php</title>
</head>
<body>
<form method="POST">
    <input type="text" name="string" id="">
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
    $str=$_POST["string"];
    echo"length of string is ".strlen($str);
    echo"<br>break down value of str is";
    $arr=explode("/",$str);
    print_r($arr);
    echo"<br>reverse of string is <br>".strrev($str);
    $lower=strtolower($str);
    $upp=strtoupper($str);
    echo"lower-case of str is".$lower;    
    echo"upper-case of str is".$upp;    
    $subs = "Clair";
    $newstr = substr_replace($str, $subs,0,5);
    echo $newstr;
?>
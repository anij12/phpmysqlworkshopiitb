<!-- Create a php page and create a user form which asks for marks in five subjects out of 100 and
then displays the marksheet of the student.The format is as follows:
Name of Student*:
Marks in Each Subject
Subject 1* :
Subject 2* :
Subject 3* :
Subject 4* :
Subject 5* :
Total Marks Obtained:
Total Marks:
Percentage:

Note: All the entries marked (*) are to be input by the user. And use a submit button to post the
entries in the form using the POST method. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marksheet</title>
</head>
<body>
    <form action="assign6.php" method="get">
    <span>Enter your Name:</span>
        <input type="text" name="stdname" id="">
        <br>
        <span>Enter marks in subject 1</span>
        <input type="number" name="su1" id="">
        <br>
        <span>Enter marks in subject 1</span>
        <input type="number" name="su2" id="">
        <br>
        <span>Enter marks in subject 1</span>
        <input type="number" name="su3" id="">
        <br>
        <span>Enter marks in subject 1</span>
        <input type="number" name="su4" id="">
        <br>
        <span>Enter marks in subject 1</span>
        <input type="number" name="su5" id="">
        <br>
        <input type="submit" value="generate marksheet">
    </form>
    <?php
        $sname=$_GET["stdname"];
        $s1=$_GET["su1"];
        $s2=$_GET["su2"];
        $s3=$_GET["su3"];
        $s4=$_GET["su4"];
        $s5=$_GET["su5"];
        if($sname && $s1 && $s2 && $s3 && $s4 && $s5){

            echo"Name of Student ";
            echo"$sname";
            echo"<br>";
            echo"Marks in Each Subject<br>";
            echo"Subject 1* :";
            echo" $s1";
            echo"<br>";
            echo"Subject 2* :";
            echo" $s2";
            echo"<br>";
            echo"Subject 3* :";
            echo" $s3";
            echo"<br>";
            echo"Subject 4* :";
            echo" $s4";
            echo"<br>";
            echo"Subject 5* :";
            echo" $s5";
            echo"<br>";
            echo"Total Marks Obtained:";
            $sum=$s1+$s2+$s3+$s4+$s5;
            echo $sum;
            echo"<br>";
            echo"Total Marks:500";
            echo"<br>";
            echo"Percentage:";
            echo (($sum/500)*100);
        }
        else{
            echo"something missing";
        }
        
    ?>
</body>
</html>
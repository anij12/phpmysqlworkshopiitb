<!-- In the previous assignment use the following data:
Name: Rohan
Marks in Subject(s): 55,66,77,88,76
Now write a PHP Script to update the values in the database with the new marks in subject 5 as "99"
and recalculating and updating database entries: total obtained and percent. -->
<?php
     require "myconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marksheet</title>
</head>
<body>
    <form method="POST">
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
        <input type="submit" name="submit" value="generate marksheet">
    </form>
    <?php
        
       
        $sname=$_POST["stdname"];
        $s1=$_POST["su1"];
        $s2=$_POST["su2"];
        $s3=$_POST["su3"];
        $s4=$_POST["su4"];
        $s5=$_POST["su5"];
    
        $sum=$s1+$s2+$s3+$s4+$s5;
        $avg=($sum/500)*100;
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
        
        if(isset($_POST["submit"])){
            
            $result=mysqli_query($conn,"INSERT INTO class1(suname,sub1,sub2,sub3,sub4,sub5,total_obtained,total_marks,per) VALUES ('$sname',$s1,$s2,$s3,$s4,$s5,$sum,500,$avg);");
            if($result){
                echo"<br>inserted";
                echo"<br>new";
                $s5=99;
                 $sum=$s1+$s2+$s3+$s4+$s5;
                 $avg=(($sum/500)*100);
                $result1=mysqli_query($conn,"UPDATE class1 SET sub5=99, total_obtained=$sum , per=$avg WHERE suname='Rohan';");
                 echo" new total is".$sum;
                 echo"<br>new percentage is ".$avg;
                if($result1){

                    echo "<script>alert('your data got updated')</script>";
                }
                else{
                    echo"<br>something wrong";
                }
            }
            else{
                echo "<br>".mysqli_error($conn);
            }
        }
    ?>
</body>
</html>

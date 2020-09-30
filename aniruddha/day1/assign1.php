<!-- /* Create a page evenodd.php into root directory of your local web server. Here, write a script for
finding out whether it is an odd number or even number and echo on the screen. The following
numbers set can be taken as input: 11, 23, 72 and 44.*/ -->
<?php
    $no=11;
    if($no%2==0)
        echo"the number".$no."is even";
    else
    {
        echo"the number".$no."is odd";
    }
?>
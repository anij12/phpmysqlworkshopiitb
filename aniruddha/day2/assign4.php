<!-- Declare a function named writeName2 with a parameter $firstname and define it by echoing out:
$firstname." Sharma". Now call the function to retrieve the following output:
My name is Jai Sharma
My brother's name is Ram Sharma
Note: Use writeName2 function to write the names on screen. -->
<?php
    function writeName2($firstname){
        echo"$firstname";
    }
    echo"My name is ";
    echo"".writeName2("Jai");
    echo" Sharma";
   
    
    echo"<br>My brother's name is ";
    echo"".writeName2("Ram");
    echo" Sharma";
    
?>
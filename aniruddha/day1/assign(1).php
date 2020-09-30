<!-- Create a page vowel.php into root directory of your local web server. Write in the script for
determining whether or not the character associated with a variable is Vowel or a Consonant. If its
a Vowel echo out the name of the vowel otherwise echo out its a Consonant. Use Switch for this
script. -->
<?php
    $ab="b";
    switch($ab)
    {
        case 'a':
            echo"enter char is".$ab;
        break;
        case 'e':
            echo"enter char is".$ab;
        break;
        case 'i':
            echo"enter char is".$ab;
        break;
        case 'o':
            echo"enter char is".$ab;
        break;
        case 'u':
            echo"enter char is".$ab;
        break;
        default:
            echo"it is a Consonant";
    }
?>
<!doctype html>


<html>
    
   <head>
     <title>Compare Strings</title>  
     <meta charset="UTF-8">
     <meta name="viewport" content="initial-scale=1.0">
      <script src="modernizr.custom.65897.js"></script> 
   </head> 
    
    
    <body>
        <h2>Compare Strings</h2>
        <?php
        //This code counts how many characters are in the string and tells you how many characters to change in order for the two strings/variable values to be the same. 
        $firstString = "Geek2Geek";
        $secondString = "Geezer2Geek";
    if (!empty($firstString)&& !empty($secondString)) {
        if ($firstString == $secondString) {
            echo "<p>Both strings are the same.</p>";
    } else {
            echo "<p>Both strings have " . similar_text($firstString, $secondString) . " character(s) in common.</p>";
            echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the strings the same.</p>";
        }
    }
        else {
            echo "<p>Either the \$firstString variable or the\$secondString variable does not contain a value so the two strings cannot be compared.</p>";
        }
        ?>
    </body>   
    
</html>
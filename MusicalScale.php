<!doctype html>


<html>
    
   <head>
     <title>Musical Scale</title>  
     <meta charset="UTF-8">
     <meta name="viewport" content="initial-scale=1.0">
      <script src="modernizr.custom.65897.js"></script> 
   </head> 
    
    
    <body>
        <h2>Musical Scale</h2>
        <?php
        //Made a foreach loop to display all the values in the array "$musicalScale"
        $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti", "do");
        $outputString = "The notes of the musicacl scale are: ";
        foreach($musicalScale as $currentNode) {
            $outputString .= " " .  $currentNode;
        }
        echo "<p>$outputString</p>";
        ?> 
        <h2>Formatted Text</h2>   
        <?php
        //Made a variable to display the value into the echos. Used the pre to unformat
        //the value and the strings. This example also shows us how to use /r and /n. 
        $displayVariable = 9.876;
        echo "<pre>\n";
        echo "Unformatted text line 1. \r\n";
        echo "Unformatted text line 2. \r\n";
        echo "\$displayVariable = $displayVariable";
        echo "</pre>\n";
        ?>
    </body>   
    
</html>
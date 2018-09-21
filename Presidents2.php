<!doctype html>


<html>
    
   <head>
     <title>Presidents 2</title>  
     <meta charset="UTF-8">
     <meta name="viewport" content="initial-scale=1.0">
      <script src="modernizr.custom.65897.js"></script> 
   </head> 
    
    
    <body>
        <h2>Presidents 2</h2>
        <?php
        // the strtok is to display the value out of a string when it hits a certain token in the string that
        // is indicated.
        //This while loop states that when the string hits to where there is no token that it will stop
        $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
        $thisPresident = strtok($presidents, ";");
        while ($thisPresident != NULL) {
            echo "$thisPresident<br>";
            $thisPresident = strtok(";");
        }
        ?>
    </body>   
    
</html>
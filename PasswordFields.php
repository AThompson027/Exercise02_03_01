<!doctype html>


<html>
    
   <head>
     <title>Password Fields</title>  
     <meta charset="UTF-8">
     <meta name="viewport" content="initial-scale=1.0">
      <script src="modernizr.custom.65897.js"></script> 
   </head> 
    
    
    <body>
        <h2>Password Fields</h2>
        <?php
        // This code has a variable with a value of string that has tokens inside. We also have and array
        // for our password fields. 
        $record = "jdoe:8w4dso3a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash";
        $passwordFields = array("login name",
                               "optional encrypted password",
                                "numerical user ID",
                                "numerical group ID",
                                "user name or comment field",
                                "user home directory",
                                "optional user command interpreter"
                               );
        $fieldIndex = 0;
        $extraFields = 0;
        $currField = strtok($record, ":");
        while ($currField != NULL) {
            if ($fieldIndex < count($passwordFields)) {
                echo "<p>The {$passwordFields[$fieldIndex]} is <em>$currField</em></p>\n";
            } 
            else {
                ++$extraFields;
                echo "<p>Extra field # $extraFields is <em>$currField</em></p>\n";
            }
            $currField = strtok(":");
            ++$fieldIndex;
        }
        ?>
    </body>   
    
</html>
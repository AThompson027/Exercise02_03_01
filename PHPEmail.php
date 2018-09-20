<!doctype html>


<html>
    
   <head>
     <title>PHP Email</title>  
     <meta charset="UTF-8">
     <meta name="viewport" content="initial-scale=1.0">
      <script src="modernizr.custom.65897.js"></script> 
   </head> 
    
    
    <body>
        <h2>PHP Email</h2>
        <?php
        //This code determines if the email addresses are considered valid or unvalid.
        $emailAddresses = array(
        "john.smith@php.test",
        "mary.smith@php.example",
        "john.jones@php.invalid",
        "alan.smithee@test",
        "jsmith456@example.com",
        "jsmith465@test", 
        "mjones@example",
        "mjones@example.net",
        "jane.a.doe@example.org"
        );
        
        function validateAddress($address) {
            if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
                return true;
            }
            else {
                return false;
            }
        }
        
        foreach($emailAddresses as $value) {
            if(validateAddress($value) === false) {
                echo "<p>The email address <em>$value</em> does not appear to be valid.</p>";
            }   
        }
        ?>
    </body>   
    
</html>
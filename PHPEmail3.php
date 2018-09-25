<!doctype html>


<html>
    
   <head>
     <title>PHP Email 3</title>  
     <meta charset="UTF-8">
     <meta name="viewport" content="initial-scale=1.0">
      <script src="modernizr.custom.65897.js"></script> 
   </head> 
    
    
    <body>
        <h2>PHP Email 3</h2>
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
        "Mjones@example.net",
        "jane.a.doe@example.org"
        );
        
        function sortAddress($addresses) {
            $sortedAddresses = array();
            $ilimit = count($addresses) - 1;
            $jlimit = count($addresses);
            for ($i = 0; $i < $ilimit; $i++) {
                $currentAddress = $addresses[$i];
                for($j = $i + 1; $j < $jlimit; $j++) {
                    // strcasecmp is added to make the sorting of the addresses more simplier
                    if (strcasecmp($currentAddress, $addresses[$j] > 0)) {
                        $tempVal = $addresses[$j];
                        $addresses[$j] = $currentAddress;
                        $currentAddress = $tempVal;
                    }
                }
                $sortedAddresses[] = $currentAddress;
            }
            return($sortedAddresses);
        }
        $sortedAddresses = sortAddress($emailAddresses);
        $sortedAddressesList = implode(", ", $sortedAddresses);
        echo "<p>Sorted Addresses: $sortedAddressesList\n</p>";
        
        function validateAddress($address) {
            if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
                return true;
            }
            else {
                return false;
            }
        }
        
        foreach($sortedAddresses as $value) {
            if(validateAddress($value) === false) {
                echo "<p>The email address <em>$value</em> does not appear to be valid.</p>";
            }   
        }
        ?>
    </body>   
    
</html>
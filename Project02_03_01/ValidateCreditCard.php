<!doctype html>


<html>
    
   <head>
     <title>Validate Credit Card</title>  
     <meta charset="UTF-8">
     <meta name="viewport" content="initial-scale=1.0">
      <script src="modernizr.custom.65897.js"></script> 
   </head> 
    
    
    <body>
        <h2>Validate Credit Card</h2>
        <?php
        $creditCard = array("", "8910-1234-5678-6543", "0000-9123-4567-0123");
        
        // The for each runs through the credit card number looking for invalid info. In this case, the invalid info 
        // is that there is an empty string on the indexed "0" card number. 
        foreach ($creditCard as $indexNumber => $cardNumber) {
            if (empty($cardNumber)) {
                echo"<p>Credit Card Number $indexNumber is invalid because it contains an empty string.";
            } else {
                 // The cards that are correct has their dashes and spaces removed by the replace propery
                $creditCardNumber = $cardNumber;
                $creditCardNumber = str_replace("-", "", $creditCardNumber);
                $creditCardNumber = str_replace(" ", "", $creditCardNumber);
                echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.";
                if (!is_numeric($creditCardNumber)) {
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid becaise it contains a non-numeric character.</p>";
                } else {
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is a valid Credit Card Number.</p>";
                }
            }
        }
        ?>
    </body>   
    
</html>
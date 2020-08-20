<html>
    <head>
        <title>Lab2</title>
    </head>
    <body>
        <?php
            $operand1 = 15.55;
            $operand2 = 2.94;

            print($operand1 . " + " . $operand2 . " = " . ($operand1+$operand2) . "</br>");
            print($operand1 . " - " . $operand2 . " = " . ($operand1-$operand2) . "</br>");
            print($operand1 . " * " . $operand2 . " = " . ($operand1*$operand2) . "</br>");
            print($operand1 . " / " . $operand2 . " = " . ($operand1/$operand2) . "</br>");
            print($operand1 . " % " . $operand2 . " = " . ($operand1%$operand2) . "</br>");

            $phrase = "If you are strong enough, there are no precedents.";
            print("</br><strong>" . $phrase . "<strong></br>");

            $phrase .= "</br>-Unkown";
            print("</br><strong>" . $phrase . "<strong></br>");
        ?>
    </body>
</html>
<html>
    <head>
        <title>Simple arrays</title>
    </head>
    <body>
        <?php
            $family = array("Pranath", "Ramachandra", "Savitha", "Shamanth", "Shashank", "Ashwij", "Anvitha");

            $vehicles[0] = "Car";
            $vehicles[1] = "Aeroplane";
            $vehicles[2] = "Cruise Ship";
            $vehicles[3] = "Train";

            print($family[0] . " just purchased a new " . $vehicles[2]);
            print("<br>");

            for($i = 0; $i < count($family); $i++)
            {
                print($family[$i]);
                print("<br>");
            }
        ?>
    </body>
</html>
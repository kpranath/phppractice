<html>
    <head>
        <title>Loops</title>
    </head>
    <body>
        <?php
            $i = 0;
            while($i<101){
                print($i);
                print("<br>");
                $i+=10;
            }

            $airlines = array("Indigo", "Vistara", "AirAsia", "Spicejet");
            $x = 0;
            while($x < count($airlines)){
                print($airlines[$x]);
                print("<br>");
                $x++;
            }

            $y = 0;
            do{
                print($y);
                print("<br>");
                $y++;
            } while($y<35);
        ?>
    </body>
</html>
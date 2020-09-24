<html>
    <head>
        <title>Associative arrays</title>
    </head>
    <body>
        <?php
            $gpas = array(
                "Smith" => 3.25,
                "Johnson" => 3.1,
                "Blackstone" => 2.5,
                "Craigson" => 1.77,
                "Garcia" => 4.0,
                "Wendell" => 3.11
            );

            print("Eric Smith has a gpa of " . $gpas["Smith"]);
            print("<br>Fred Garica has a gpa of " . $gpas["Garcia"]);
        ?>
    </body>
</html>
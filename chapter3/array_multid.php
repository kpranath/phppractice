<html>
    <head>
        <title>Multidimensional arrays</title>
    </head>
    <body>
        <?php
            $teams = array
            (
                "Yankees" => array
                (
                    "Rivera",
                    "Jeter",
                    "Granderson",
                    "Gardner"
                ),
                "Mets" => array
                (
                    "Dickey",
                    "Acosta",
                    "Pelfrey"
                ),
                "Redsox" => array
                (
                    "artiz",
                    "Bard",
                    "Buckholz",
                    "Beckett"
                )
            );

            echo($teams['Redsox'][0]);
            echo("<br>");
            echo($teams['Yankees'][1]);
        ?>
    </body>
</html>
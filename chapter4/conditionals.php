<html>
    <head>
        <title>Conditionals</title>
    </head>
    <body>
        <?php
        $age = 19;
        $citizen = true;

        if($age >= 18 && $citizen){
            print("<strong>You are eligible to vote</strong>");
        }
        ?>
    </body>
</html>
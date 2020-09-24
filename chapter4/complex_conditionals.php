<html>
    <head>
        <title>Complex_Conditionals</title>
    </head>
    <body>
        <?php
        $age = 37;
        $citizen = false;

        if($age >= 18 && $citizen){
            print("<strong>You are eligible to vote</strong>");
        } else {
            print("<strong>You are not eligible to vote</strong>");
        }
        ?>
    </body>
</html>
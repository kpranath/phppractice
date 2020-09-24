<html>
    <head>
        <title>Conditionals</title>
    </head>
    <body>
        <?php
        $age = $_REQUEST['age'];
        $citizen = $_REQUEST['citizen'];

        if($age >= 18 && $citizen){
            print("<strong>You are eligible to vote</strong>");
        }
        ?>
    </body>
</html>
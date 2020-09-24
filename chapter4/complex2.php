<html>
    <head>
        <title>More Complex</title>
    </head>
    <body>
        <?php
        $GPA = 0.5;
        if($GPA == 4){
            print("your GPA is excellent");
        } elseif ($GPA > 3) {
            print("your GPA is good");
        } elseif ($GPA > 2) {
            print("your GPA is average");
        } elseif ($GPA > 1) {
            print("your GPA is poor. Time to open your books");
        } else {
            print("Why are you even going to school");
        }
        ?>
    </body>
</html>
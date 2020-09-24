<html>
    <head>
        <title>Switch...case...break</title>
    </head>
    <body>
        <?php
        $grade = 'b';
        switch($grade){
            case 'A':
            case 'a':
                print("That is a great grade");
            break;
            case 'B':
            case 'b':
                print("That is a good grade");
            break;
            case 'C':
            case 'c':
                print("That is an average grade");
            break;
            case 'D':
            case 'd':
                print("That is a low passing grade");
            break;
            case 'F':
            case 'f':
                print("That is a failing grade");
            break;
            default:
                print("Letter is not a grade");
        }
        ?>
    </body>
</html>
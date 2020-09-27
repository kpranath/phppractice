<html>
    <head>
        <title>Output</title>
    </head>
    <body>
        <?php
        $gpas;
        $gpas["Pranath"] = 9.2;
        $gpas["Sidharth"] = 9.1;
        $gpas["Lakshya"] = 8.7;
        $gpas["Abhishek"] = 8.6;
        $gpas["Rushi"] = 8.1;

        foreach($gpas as $key => $value){
            print("Name: " . $key);
            print("   GPA: ". $value);
            print("<br>");
        }
        ?>
    </body>
</html>
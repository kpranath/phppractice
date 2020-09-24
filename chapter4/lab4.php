<html>
    <head>
        <title>Lab4</title>
    </head>
    <body>
        <?php
        //Part1
        $age = 17;
        if($age <18 ){
            print("You are still a pup. Stay at school!!");
        } elseif ($age >= 18 && $age <= 29) {
            print("This is the prime of your lfe. Enjoy it!!!");
        } elseif ($age >= 30 && $age <= 39) {
            print("Time to focus on your career");
        } elseif ($age >= 40 && $age <= 49) {
            print("Your prime earning years");
        } elseif($age >= 50 && $age <= 59) {
            print("Time to get ready for retirement");
        } elseif($age >=60) {
            print("What is life's next adventure???");
        }

        print("<br>");

        //part2
        //Mary = array(89,99,63,85);
        //Bob = array(73,80,81,82);
        //Mark = array(90,95,91,70);
        $avg = array(
            "Mary" => 84,
            "Bob" => 79,
            "Mark" => 86.5
        );
        $students = array_keys($avg);
        for($i=0;$i<count($students);$i++){
            $caseValue = $avg[$students[$i]];
            switch($caseValue){
                case $caseValue<=100 && $caseValue>=97 :
                    print($students[$i] . " secured A+ grade");
                break;
                case $caseValue<97 && $caseValue>=92 :
                    print($students[$i] . " secured A grade");
                break;
                case $caseValue<92 && $caseValue>=90 :
                    print($students[$i] . " secured A- grade");
                break;
                case $caseValue<90 && $caseValue>=87 :
                    print($students[$i] . " secured B+ grade");
                break;
                case $caseValue<87 && $caseValue>=83 :
                    print($students[$i] . " secured B grade");
                break;
                case $caseValue<83 && $caseValue>=80 :
                    print($students[$i] . " secured B- grade");
                break;
                case $caseValue<80 && $caseValue>=70 :
                    print($students[$i] . " secured C grade");
                break;
                case $caseValue<70 && $caseValue>=60 :
                    print($students[$i] . " secured D grade");
                break;
                case $caseValue<60 :
                    print($students[$i] . " secured F grade");
                break;
            }
            print("<br>");
        }

        ?>
    </body>
</html>
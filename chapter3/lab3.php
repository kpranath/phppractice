<html>
    <head>
        <title>Lab 3</title>
    </head>
    <body>
        <?php
            $test1 = array(
                "Smith" => 98,
                "Johnson" => 67,
                "Fields" => 71,
                "Laurel" => 68,
                "Gold" => 91,
                "Braveman" => 88,
                "Stone" => 84,
                "Kiel" => 84
            );

            $test2 = array(
                "Smith" => 75,
                "Johnson" => 88,
                "Fields" => 81,
                "Laurel" => 63,
                "Gold" => 67,
                "Braveman" => 82,
                "Stone" => 77,
                "Kiel" => 81
            );

            $test3 = array(
                "Smith" => 100,
                "Johnson" => 85,
                "Fields" => 76,
                "Laurel" => 71,
                "Gold" => 63,
                "Braveman" => 55,
                "Stone" => 81,
                "Kiel" => 79
            );

            $test4 = array(
                "Smith" => 91,
                "Johnson" => 81,
                "Fields" => 77,
                "Laurel" => 70,
                "Gold" => 90,
                "Braveman" => 82,
                "Stone" => 90,
                "Kiel" => 100
            );

            $avg = array(0,0,0,0);
            $i = 0;
            //average for test1
            foreach ($test1 as $student => $marks){
                $avg[$i]+=$marks;
            }
            $average1 = $avg[$i]/count($test1);
            $i+=1;
            echo("Average of test1 is " . $average1 . "<br>");

            //average for test2
            foreach ($test2 as $student => $marks){
                $avg[$i]+=$marks;
            }
            $average2 = $avg[$i]/count($test2);
            $i+=1;
            echo("Average of test2 is " . $average2 . "<br>");

            //average for test3
            foreach ($test3 as $student => $marks){
                $avg[$i]+=$marks;
            }
            $average3 = $avg[$i]/count($test3);
            $i+=1;
            echo("Average of test3 is " . $average3 . "<br>");

            //average for test4
            foreach ($test4 as $student => $marks){
                $avg[$i]+=$marks;
            }
            $average4 = $avg[$i]/count($test4);
            $i+=1;
            echo("Average of test4 is " . $average4 . "<br>");

            //giving some line brake
            for($i=0;$i<2;$i++){
                echo("<br>");
            }

            //Average of each student from all tests
            $students = array_keys($test1);
            for($i=0; $i<count($students); $i++){
                $average = ($test1[$students[$i]]+$test2[$students[$i]]+$test3[$students[$i]]+$test4[$students[$i]])/4;
                echo("Average marks of " . $students[$i] . " is " . $average . "<br>");
            }

            //giving some line brake
            for($i=0;$i<2;$i++){
                echo("<br>");
            }

            //Table output
            echo "Table of the data<br>";
            print "<table>
                    <tr>
                        <th>StudentName</th>
                        <th>Test one</th>
                        <th>Test two</th>
                        <th>Test three</th>
                        <th>Test four</th>
                    </tr>
                    <tr>
                        <td>" . $students[0] . "</td>
                        <td>" . $test1[$students[0]] . "</td>
                        <td>" . $test2[$students[0]] . "</td>
                        <td>" . $test3[$students[0]] . "</td>
                        <td>" . $test4[$students[0]] . "</td>
                    </tr>
                    <tr>
                        <td>" . $students[1] . "</td>
                        <td>" . $test1[$students[1]] . "</td>
                        <td>" . $test2[$students[1]] . "</td>
                        <td>" . $test3[$students[1]] . "</td>
                        <td>" . $test4[$students[1]] . "</td>
                    </tr>
                    <tr>
                        <td>" . $students[2] . "</td>
                        <td>" . $test1[$students[2]] . "</td>
                        <td>" . $test2[$students[2]] . "</td>
                        <td>" . $test3[$students[2]] . "</td>
                        <td>" . $test4[$students[2]] . "</td>
                    </tr>
                    <tr>
                        <td>" . $students[3] . "</td>
                        <td>" . $test1[$students[3]] . "</td>
                        <td>" . $test2[$students[3]] . "</td>
                        <td>" . $test3[$students[3]] . "</td>
                        <td>" . $test4[$students[3]] . "</td>
                    </tr>
                    <tr>
                        <td>" . $students[4] . "</td>
                        <td>" . $test1[$students[4]] . "</td>
                        <td>" . $test2[$students[4]] . "</td>
                        <td>" . $test3[$students[4]] . "</td>
                        <td>" . $test4[$students[4]] . "</td>
                    </tr>
                    <tr>
                        <td>" . $students[5] . "</td>
                        <td>" . $test1[$students[5]] . "</td>
                        <td>" . $test2[$students[5]] . "</td>
                        <td>" . $test3[$students[5]] . "</td>
                        <td>" . $test4[$students[5]] . "</td>
                    </tr>
                    <tr>
                        <td>" . $students[6] . "</td>
                        <td>" . $test1[$students[6]] . "</td>
                        <td>" . $test2[$students[6]] . "</td>
                        <td>" . $test3[$students[6]] . "</td>
                        <td>" . $test4[$students[6]] . "</td>
                    </tr>
                    <tr>
                        <td>" . $students[7] . "</td>
                        <td>" . $test1[$students[7]] . "</td>
                        <td>" . $test2[$students[7]] . "</td>
                        <td>" . $test3[$students[7]] . "</td>
                        <td>" . $test4[$students[7]] . "</td>
                    </tr>
                    <tr>
                        <td>Average</td>
                        <td>" . $average1 . "</td>
                        <td>" . $average2 . "</td>
                        <td>" . $average3 . "</td>
                        <td>" . $average4 . "</td>
                    </tr>
                  </table>"
        ?>
    </body>
</html>
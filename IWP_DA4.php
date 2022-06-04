<!DOCTYPE html>

<html lang="en">

<head>
    <title>Students details </title>
    <link rel="stylesheet" href="IWP_DA4.css">
</head>

<body>
    <h1 class="head">Student's Details</h1>
    <fieldset class="fieldset">
        <legend class="legend">Students Details</legend>
            <form action="IWP_DA4.php" method="post">
                Name: <input type="text" name="name"><br><br>
                Reg. No.: <input type="text" name="regno"><br><br>
                
                <div id="marks_head">Enter Course Details:</div> <br>
                Course 1: <input type="text" name="course1"><br><br>
                Course Code 1: <input type="text" name="ccode1"><br><br>
                Course 2: <input type="text" name="course2"><br><br>
                Course Code 2: <input type="text" name="ccode2"><br><br>
                Course 3: <input type="text" name="course3"><br><br>
                Course Code 3: <input type="text" name="ccode3"><br><br>
                Course 4: <input type="text" name="course4"><br><br>
                Course Code 4: <input type="text" name="ccode4"><br><br>
                Course 5: <input type="text" name="course5"><br><br>
                Course Code 5: <input type="text" name="ccode5"><br><br>

                <div id="marks_head">CAT-1 Marks of respective courses start by 1 to 5:</div> <br>
                
                MARKS 1: <input type="number" name="c1m1"><br><br>
                MARKS 2: <input type="number" name="c1m2"><br><br>
                MARKS 3: <input type="number" name="c1m3"><br><br>
                MARKS 4: <input type="number" name="c1m4"><br><br>
                MARKS 5: <input type="number" name="c1m5"><br><br><br>

                <div id="marks_head">CAT-2 Marks of respective courses start by 1 to 5:</div> <br>
                MARKS 1: <input type="number" name="c2m1"><br><br>
                MARKS 2: <input type="number" name="c2m2"><br><br>
                MARKS 3: <input type="number" name="c2m3"><br><br>
                MARKS 4: <input type="number" name="c2m4"><br><br>
                MARKS 5: <input type="number" name="c2m5"><br><br><br>

                <div id="marks_head">DA-1 Marks of respective courses start by 1 to 5:</div> <br>
                MARKS 1: <input type="number" name="d1m1"><br><br>
                MARKS 2: <input type="number" name="d1m2"><br><br>
                MARKS 3: <input type="number" name="d1m3"><br><br>
                MARKS 4: <input type="number" name="d1m4"><br><br>
                MARKS 5: <input type="number" name="d1m5"><br><br><br>

                <div id="marks_head">DA-2 Marks of respective courses start by 1 to 5:</div> <br>
                MARKS 1: <input type="number" name="d2m1"><br><br>
                MARKS 2: <input type="number" name="d2m2"><br><br>
                MARKS 3: <input type="number" name="d2m3"><br><br>
                MARKS 4: <input type="number" name="d2m4"><br><br>
                MARKS 5: <input type="number" name="d2m5"><br><br><br>

                <div id="marks_head">QUIZ Marks of respective courses start by 1 to 5:</div> <br>
                MARKS 1: <input type="number" name="qm1"><br><br>
                MARKS 2: <input type="number" name="qm2"><br><br>
                MARKS 3: <input type="number" name="qm3"><br><br>
                MARKS 4: <input type="number" name="qm4"><br><br>
                MARKS 5: <input type="number" name="qm5"><br><br><br>

                <div id="marks_head">FAT Marks of respective courses start by 1 to 5:</div> <br>
                MARKS 1: <input type="number" name="fm1"><br><br>
                MARKS 2: <input type="number" name="fm2"><br><br>
                MARKS 3: <input type="number" name="fm3"><br><br>
                MARKS 4: <input type="number" name="fm4"><br><br>
                MARKS 5: <input type="number" name="fm5"><br><br><br>
                <input class="button" type="submit" value="button">
            </form> 
    </fieldset><br><br><br>

        <?php
            if (isset($_POST['name']) && isset($_POST['regno']) && isset($_POST['course1']) && isset($_POST['ccode1'])) {

                echo '<br><br><div class = "success">Student Registration successful !!!</div><br><br>';

                $name =  $_POST["name"];
                $regno =  $_POST["regno"];
                
                $course1 =  $_POST["course1"];
                $courseCode1 =  $_POST["ccode1"];
                $course2 =  $_POST["course2"];
                $courseCode2 =  $_POST["ccode2"];
                $course3 =  $_POST["course3"];
                $courseCode3 =  $_POST["ccode3"];
                $course4 =  $_POST["course4"];
                $courseCode4 =  $_POST["ccode4"];
                $course5 =  $_POST["course5"];
                $courseCode5 =  $_POST["ccode5"];

                $c1marks1 =  $_POST["c1m1"];
                $c1marks2 =  $_POST["c1m2"];
                $c1marks3 =  $_POST["c1m3"];
                $c1marks4 =  $_POST["c1m4"];
                $c1marks5 =  $_POST["c1m5"];

                $c2marks1 =  $_POST["c2m1"];
                $c2marks2 =  $_POST["c2m2"];
                $c2marks3 =  $_POST["c2m3"];
                $c2marks4 =  $_POST["c2m4"];
                $c2marks5 =  $_POST["c2m5"];

                $d1marks1 =  $_POST["d1m1"];
                $d1marks2 =  $_POST["d1m2"];
                $d1marks3 =  $_POST["d1m3"];
                $d1marks4 =  $_POST["d1m4"];
                $d1marks5 =  $_POST["d1m5"];

                $d2marks1 =  $_POST["d2m1"];
                $d2marks2 =  $_POST["d2m2"];
                $d2marks3 =  $_POST["d2m3"];
                $d2marks4 =  $_POST["d2m4"];
                $d2marks5 =  $_POST["d2m5"];

                $qmarks1 =  $_POST["qm1"];
                $qmarks2 =  $_POST["qm2"];
                $qmarks3 =  $_POST["qm3"];
                $qmarks4 =  $_POST["qm4"];
                $qmarks5 =  $_POST["qm5"];

                $fmarks1 =  $_POST["fm1"];
                $fmarks2 =  $_POST["fm2"];
                $fmarks3 =  $_POST["fm3"];
                $fmarks4 =  $_POST["fm4"];
                $fmarks5 =  $_POST["fm5"];

                
                $numbers = array(array($course1,$courseCode1,$c1marks1,$c2marks1,$d1marks1,$d2marks1,$qmarks1, $fmarks5), array($course2,$courseCode2,$c1marks2,$c2marks2,$d1marks2,$d2marks2,$qmarks2, $fmarks5),array($course3,$courseCode3,$c1marks3,$c2marks3,$d1marks3,$d2marks3,$qmarks3, $fmarks5),array($course4,$courseCode4,$c1marks4,$c2marks4,$d1marks4,$d2marks4,$qmarks4, $fmarks5),array($course5,$courseCode5,$c1marks5,$c2marks5,$d1marks5,$d2marks5,$qmarks5,$fmarks5));

                echo '<div class = "main">';
                echo '<div id = "output_head"><u> STUDENTS DETAILS DISPLAY: </u></div><br><br>';
                
                echo '<div id = "details">';
                echo "NAME: $name <br>";
                echo "Reg. No.: $regno<br>";
                
                $totalc1 = 0;
                $totalc2 = 0;
                $totalda1 = 0;
                $totalda2 = 0;
                $totalquiz = 0;
                $totalFat = 0;
                

                $averagec1 = 0;
                $averagec2 = 0;
                $averageda1 = 0;
                $averageda2 = 0;
                $averagequiz = 0;
                $averageFat = 0;



                echo "<br><hr><br>";
                echo '<div class = "output_head"><u> Marks with subjects: </u></div><br><br>';
                
                for ($i = 0; $i < 5; $i++) {
                    for($j=2;$j<3;$j++){
                        if ($numbers[$i][$j] > 30 || $numbers[$i][$j] < 0) {
                            $message = "Invalid Marks";
                            echo '<script>alert("'.$message.' '.($i+1).'nd Subject")</script>';
                        }
                    }                    

                    $totalc1 = $numbers[$i][2]/2 + $totalc1;

                    $totalc2 = $numbers[$i][3]/2 + $totalc2;
                    
                    $totalda1 = $numbers[$i][4] + $totalda1;
                    
                    $totalda2 = $numbers[$i][5] + $totalda2;
                   
                    $totalquiz = $numbers[$i][6] + $totalquiz;
                   
                    $totalFat = ($numbers[$i][7]*0.4) + $totalFat;

                    $averagec1 = $numbers[$i][2] + $averagec1;
                    $averagec2 = $numbers[$i][3] + $averagec2;
                    $averageFat = $numbers[$i][7] + $averageFat;
                    
                }

                echo "<table border='2'>";
                echo "<tr> ";
                echo "<th> Course </th>";
                echo "<th> Course Code </th>";
                echo "<th> CAT 1 </th>";
                echo "<th> CAT 2 </th>";
                echo "<th> DA 1 </th>";
                echo "<th> DA 2 </th>";
                echo "<th> QUIZ </th>";
                echo "<th> FAT </th>";
                echo "</tr>";

                for ($i = 0; $i < 5; $i++) {

                    echo "<tr> ";
                    echo "<td> " . $numbers[$i][0]. "</td>";
                    echo "<td> " . $numbers[$i][1]. "</td>";
                    echo "<td> " . $numbers[$i][2]. "</td>";
                    echo "<td> " . $numbers[$i][3]. "</td>";
                    echo "<td> " . $numbers[$i][4]. "</td>";
                    echo "<td> " . $numbers[$i][5]. "</td>";
                    echo "<td> " . $numbers[$i][6]. "</td>";
                    echo "<td> " . $numbers[$i][7]. "</td>";
                    echo "</tr>";
                }
                echo "</table>";

                $total = $totalc1 + $totalc2 + $totalda1 + $totalda2 + $totalFat + $totalquiz;

                $total_internal = $totalc1 + $totalc2 + $totalda1 + $totalda2 + $totalquiz;
                
                $average = $total/5;
                $cgpa = $total * 2 / 100;

                $averagec1 = $averagec1/5;
                $averagec2 = $averagec2/5;
                $averageda1 = $totalda1/5;
                $averageda2 = $totalda2/5;
                $averagequiz = $totalquiz/5;
                $averageFat = $averageFat/5;

                echo "<br><hr><br>";
                echo '<div class = "output_head"><u> Average, Total, CGPAS of given marks: </u></div><br><br>';
                
                echo "<table border='2'>";
                echo "<tr> ";
                echo "<th> Total Internal Marks (60) </th>";
                echo "<th> Total Marks (100) </th>";
                echo "<th> AVERAGE </th>";
                echo "<th> CGPA </th>";
                echo "</tr>";
                echo "<tr> ";
                echo "<td> $total_internal </td>";
                echo "<td> $total </td>";
                echo "<td> $average </td>";
                echo "<td> $cgpa</td>";
                echo "</tr>";
                echo "</table>";

                echo "</div>";
                echo "</div>";

                for ($i = 0; $i < 5; $i++) {
                    for($j=2;$j<3;$j++){
                        if ($numbers[$i][$j] < 15 && $numbers[$i][$j]>0) {
                            $message = "Slow Learner and Do the Extra Assignment work";
                            echo '<br><br><div class = "slow">'. $message.'</div>';
                        }
                    }
                }
            }


            $conn=new mysqli('localhost:3306','root','','marks_da4');

            if ($conn -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
            }else{

                $sendQuery1="INSERT INTO students_details(name, reg_No,cgpa, average_CAT1, average_CAT2,average_DA1, average_DA2, average_Quiz, average_Fat, Total_Internal) VALUES( ?,?,?,?,?,?,?,?,?,?)";
                $stmt = $conn -> prepare($sendQuery1);
                $stmt -> bind_param("ssiiiiiiii",$name,$regno,$cgpa,$averagec1,$averagec2,$averageda1,$averageda2,$averagequiz,$averageFat,$total_internal);
                $execval = $stmt -> execute();
                
                $stmt -> close();
            }

        ?>
        <br><br><br><div class = "final_table">
        
        <?php
            
            $recieveQuery = "SELECT * FROM students_details ORDER BY Total_Internal DESC;";
            $query = $conn->query($recieveQuery);
                
                echo '<br><div class = "output_head_f"><u> Students Details In order: </u></div><br>';
                echo "<hr><br>";
                    echo "<table border='2'>";
                        echo '<tr class= "t_head"> ';
                        echo "<th> Name </th>";
                        echo "<th> Reg_No </th>";
                        echo "<th> CGPA </th>";
                        echo "<th> Average_CAT1 </th>";
                        echo "<th> Average_CAT2 </th>";
                        echo "<th> Average_DA1 </th>";
                        echo "<th> Average_DA2 </th>";
                        echo "<th> Average_Quiz </th>";
                        echo "<th> Average_Fat </th>";
                        echo "<th> Total Internal </th>";
                        echo "</tr>";
                        
                        
                        

                    while($row = mysqli_fetch_array($query)){
                        $name = $row['name'];
                        $regno = $row['reg_No'];
                        $cgpa = $row['cgpa'];
                        $avgc1 = $row['average_CAT1'];
                        $avgc2 = $row['average_CAT2'];
                        $avgd1 = $row['average_DA1'];
                        $avgd2 = $row['average_DA2'];
                        $avgq = $row['average_Quiz'];
                        $avgf = $row['average_Fat'];
                        $totint = $row['Total_Internal'];
                    
                            echo '<tr class = "t_data">';
                            echo "<td>$name</td>";
                            echo "<td>$regno</td>";
                            echo "<td>$cgpa</td>";
                            echo "<td>$avgc1</td>";
                            echo "<td>$avgc2</td>";
                            echo "<td>$avgd1</td>";
                            echo "<td>$avgd2</td>";
                            echo "<td>$avgq</td>";
                            echo "<td>$avgf</td>";
                            echo "<td>$totint</td>";
                            echo "</tr>"; 
                    }
                    
                    echo "</table>";

                echo "<br><br></div> <br><br>";
           

            $conn->close();

        ?>
        </div>

    </body>

</html>

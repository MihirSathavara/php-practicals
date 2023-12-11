<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>
    <h1>Student Result</h1>
    <form method="post">
        <table border="1">
            <tr>
                <th>Student Name</th>
                <th>PHP</th>
                <th>JAVA</th>
                <th>FLUTTER</th>
                <th>Total Marks</th>
                <th>Percentage</th>
            </tr>

            <?php
            $studentResults = array(
                array('Bhaumik', 88, 85, 90),
                array('Pranshu', 78, 92, 76),
                array('Abhishek', 85, 80, 90)
            );

            $overallTotal = 0;
            $overallPercentage = 0;

            foreach ($studentResults as $student) {
                $name = $student[0];
                $math = $student[1];
                $science = $student[2];
                $english = $student[3];

                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$math</td>";
                echo "<td>$science</td>";
                echo "<td>$english</td>";

                $totalMarks = $math + $science + $english;
                $percentage = ($totalMarks / 300) * 100;

                if (isset($_POST['calculate'])) {
                    echo "<td>$totalMarks</td>";
                    echo "<td>$percentage%</td>";
                } else {
                    echo "<td></td>";
                    echo "<td></td>";
                }

                echo "</tr>";

              
            }
            ?>

        </table>
        <br>
        <input type="submit" name="calculate" value="Calculate Result">
    </form>
</body>
</html>
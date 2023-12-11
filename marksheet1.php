<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Marksheet</title>
</head>
<body>
<?php
// Create a 2 dimensional array to hold the students result data subject wise
$students = array(
    array("Name" => "Neel", "PHP" => 85, "Net" => 90, "Java" => 95),
    array("Name" => "Mihir", "PHP" => 75, "Net" => 95, "Java" => 80),
    array("Name" => "Pandya", "PHP" => 65, "Net" => 80, "Java" => 85),
    array("Name" => "Gandhi", "PHP" => 55, "Net" => 80, "Java" => 45),
    array("Name" => "IDK", "PHP" => 50, "Net" => 90, "Java" => 25),
);
// Calculate the total of all subjects for each student
foreach ($students as $key => $student) {
    $students[$key]['Total'] = $student['PHP'] + $student['Net'] + $student['Java'];
}
// Calculate the percentage for each student
foreach ($students as $key => $student) {
    $students[$key]['Percentage'] = ($student['Total'] / 300) * 100;
}
// Display the result in tabular format
echo '<table border="2">';
echo "<tr>";
echo "<th>Name</th>";
echo "<th>PHP</th>";
echo "<th>Net</th>";
echo "<th>Java</th>";
echo "<th>Total</th>";
echo "<th>Percentage</th>";
echo "</tr>";
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['Name'] . "</td>";
    echo "<td>" . $student['PHP'] . "</td>";
    echo "<td>" . $student['Net'] . "</td>";
    echo "<td>" . $student['Java'] . "</td>";
    if (isset($_POST["submit"])){
       echo "<td>" . $student['Total'] . "</td>";
       echo "<td>" . $student['Percentage'] . "%</td>";}
    else
    {
      echo "<td>" ,0, "</td>";
       echo "<td>" ,0, "%</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<form action="#" method="post"><input type="submit" value="Calculate Result" name="submit"></form>

</body>
</html>


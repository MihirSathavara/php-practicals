<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculation</title>
</head>
<body>
    <h1>Age Calculation</h1>
    <form action="#" method="post">
        <label for="dob" class="">Enter Your Birthdate :</label>
        <input type="date" name="dob" require><br><br>
        <label for="age-date">Enter The Date To Calculate Age At :</label>
        <input type="submit" name="calculate" value="calculate">
    </form>

    <?php
     if(isset($_POST['calculate'])){

        $dob=$_POST['dob'];
        $ageDate=$_POST['age_Date'];
        $birthdate=new DateTime('$dob');
        $calculatonDate=new DateTime($ageDate);
        $interval=$birthdate->diff($calculatonDate);
        $years=$interval->y;
        $months=$interval->m;
        $t_months=($years*12)+$months;
        $days=$interval->d;
        $t_days=$interval->days%7;
        $total_days=$years*365+$months*30+$days;
        $week=floor($interval->days/7);
        $week=$years*365*24+$months*30*24+$days*24;
        $minutes=$hours*60;
        $seconds=$minutes*60;


        echo "<h2> Your Age At The Specified Date Is :</h2>";
        echo "<p>$years Years $months Months $days Days </p>";
        echo "<p> Or $t_months Month $days Days </p>";
        echo "<p> Or $weeks Weeks $t_days Days </p>";
        echo "<p> Or $total_days Days </p>";
        echo "<p>  Or $hours Hours </p>";
        echo "<p>  Or $minutes Minutes </p>";
        echo "<hp>  Or $seconds Seconds </hp>";
    }
    
    ?>
   
</body>
</html>
<!-- <?php
$x=(2+3)*2+3;
echo $x;
?> 

<?php
$X = 12;
function demo(){
$X = "Hello World";
global $X;
$Y = 13;
$Y++;
$Y++;
$Y++;
static $Z = 13;
$Z++;
echo "Value of X: ",$X,"<br>";
echo "Value of Y: ",$Y,"<br>";
echo "Value of Z: ",$Z,"<br>";
}
demo();
demo();
demo();
?> 

<?php 
$a = "hello"; 
$b = "world";
$a.=$b; 
echo $a;
echo "<br>";
echo $b; 
?> -->

<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function displayFirst100Primes() {
    $count = 0;
    $num = 2;

    while ($count < 100) {
        if (isPrime($num)) {
            echo $num . " ";
            $count++;
        }
        $num++;
    }
}

displayFirst100Primes();
?>
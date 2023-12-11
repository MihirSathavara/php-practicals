<?php 
echo "<h2>Your Input:</h2>","<br>";
echo "Name :", $_POST["name"],"<br>";
echo "email :",$_POST["email"],"<br>";
echo "website :",$_POST["website"],"<br>";
echo "comment :",$_POST["comment"],"<br>";
echo "gender :",$_POST["gender"],"<br>";

echo"<pre>";
print_r($_SERVER);
echo"<pre>";
?>
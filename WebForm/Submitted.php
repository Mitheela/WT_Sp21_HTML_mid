<!DOCTYPE html>
<html>
<body>

<h1>Thank you for your time.</h1>

<?php
echo "Name: ".$_POST["name"]."<br>";
echo "Password: ". $_POST["pass"]."<br>";
echo "Date of Birth: ". $_POST["dob"]."<br>";
echo "Gender: ".$_POST["gendr"]."<br>";
$var = $_POST["hobby"];
for($i=0;$i<count($var);$i++){
echo "Hobbies: ".$var[$i]."<br>";}
echo "Profession: ".$_POST["prof"]."<br>";
echo "Bio: ".$_POST["bio"]."<br>";
?>

</body>
</html>
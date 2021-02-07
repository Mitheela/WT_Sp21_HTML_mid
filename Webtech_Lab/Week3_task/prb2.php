<?php
$marks=66.5;
if ($marks>=90) {echo "A+ ";}
elseif ($marks>80 && $marks<90) {echo "A ";}
elseif ($marks>70 && $marks<80) {echo "B ";}
elseif ($marks>60 && $marks<700) {echo "C ";}
else {echo "F";}
echo $marks;
?>
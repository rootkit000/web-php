<!DOCTYPE html>
<html>
<body>

<?php

$d=strtotime("-12 Months");
echo "periodo escolar ".date("Y ", $d) . "-";

$d=strtotime("today");
echo date("Y", $d)."<br>";


$d=strtotime("today");
echo "periodo escolar ".date("Y ", $d) . "-";

$d=strtotime("+12 Months");
echo date("Y", $d)."<br>";




?>

</body>
</html>
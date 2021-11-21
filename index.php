<?php

$presentTime = new DateTime();
$presentTimeFormat = $presentTime->format('M d Y H:i');


$destinationTime = new DateTime ('APR 26 2078 13:00');
$destinationTimeFormat = $destinationTime->format('M d Y H:i');

$diff = $presentTime->diff($destinationTime);
$diffTime = $diff->format('Difference between both date is %Y years, %m months, %d days, %h hours and %i minutes.');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to the future</title>
</head>
<body>
<?php 
echo $presentTimeFormat.'<br>';
echo $destinationTimeFormat.'<br>';    
echo $diffTime;
?>
</body>
</html>

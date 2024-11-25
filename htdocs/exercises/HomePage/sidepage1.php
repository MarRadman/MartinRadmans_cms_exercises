<?php include './components/header.php'; ?>
<h1>Todays Date</h1>
<?php
setlocale(LC_TIME, 'sv_SE.UTF-8');
$days = ["Sunday", "Monday", "Thuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$day = $days[date("w")];
$date = date("j F");
$isEven = (date("j") % 2 == 0) ? "Even" : "Odd";

echo "<p>Today is $day the $date.</p>";
echo "<p>$date is a $isEven date.</p>";
?>
<?php include './components/footer.php'; ?>

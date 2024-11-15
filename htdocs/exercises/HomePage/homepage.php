<?php include './components/header.php'; ?>
<h1>Homepage</h1>
<?php
$greetings = ["Good morning", "Good afternoon", "Good evening", "Good night"];
$hour = date("H");

if ($hour < 10) {
  $greeting = $greetings[0];
} elseif ($hour < 12) {
  $greeting = $greetings[1];
} elseif ($hour < 18) {
  $greeting = $greetings[2];
} else {
  $greeting = $greetings[3];
}

echo "<p>$greeting</p>";
?>
<?php include './components/footer.php'; ?>

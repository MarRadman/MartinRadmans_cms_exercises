<?php include './components/header.php'; ?>
<h1>Multiplication Table</h1>
<?php
$table = 52;
for ($i = 1; $i <= 10; $i++) {
  $result = $table * $i;
  echo "<p>$table x $i = $result</p>";
}
?>
<?php include './components/footer.php'; ?>

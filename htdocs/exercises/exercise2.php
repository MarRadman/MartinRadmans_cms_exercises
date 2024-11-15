<!-- Övning 2
- Skapa en funktion is_prime() Som räknar ut
om ett tal är ett primtal. (Primtal är ett nummer
som är större än ett och som inte kan delas
jämnt med något annat tal än 1 eller sig själv.) -->

<?php
function is_prime($a)
{
  $a = 7;
  if ($a <= 1) {
    return false;
  }
  for ($i = 2; $i < $a; $i++) {
    if ($a % $i == 0) {
      return false;
    }
  }
  return true;
}

echo is_prime($a) ? 'true' : 'false';
?>

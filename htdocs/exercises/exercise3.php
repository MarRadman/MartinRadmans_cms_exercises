<!-- Övning 3
- Skapa en funktion som tar emot en associativ
array med nycklarna "bord", "frukt" och "extra".
Den ska returnera en sträng som förklarar för
en juice-bar-servitör vart en beställning ska,
vilka frukter den ska innehålla samt, om det
finns en extrabeställning även skriva vad den
innehåller.
- Du får gärna låta värdet för frukt vara en egen
array  -->

<?php
function OrderList($order)
{
  return "Table: $order[Table], Fruits: $order[Fruits], Extra: $order[Extra]";
}
$fruits = ['apple', 'banana', 'orange'];
$extra = $fruits[0];
$order = [
  'Table' => 1,
  'Fruits' => $fruits[2],
  'Extra' => $extra
];

echo OrderList($order);
?>

<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nyhet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <?php include 'components/header.php'; ?>
  <div class="container mt-5">
    <h1 class="mb-4">Nytt miljöinitiativ ska minska plastavfall i haven</h1>
    <img src="./components/plast.jpg" class="img-fluid mb-4 news-image" alt="Nyhetsbild">
    <p>Publicerad: <?php echo date("Y-m-d"); ?></p>
    <p>Kategori: Miljö</p>
    <p>Ett nytt miljöinitiativ har lanserats för att minska mängden plastavfall i världens hav. Initiativet, som stöds av flera stora företag och miljöorganisationer, syftar till att samla in och återvinna plastavfall innan det når haven. Genom att använda avancerad teknik och innovativa metoder hoppas initiativtagarna kunna göra en betydande skillnad i kampen mot plastföroreningar.</p>
    <p>"Plastföroreningar är ett av de största miljöproblemen vi står inför idag," säger Maria Lindgren, en av initiativtagarna. "Genom att samarbeta och använda den senaste tekniken kan vi göra en verklig skillnad och skydda våra hav för framtida generationer."</p>
  </div>
  <?php include 'components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

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
    <h1 class="mb-4">Stort genombrott inom medicinsk forskning</h1>
    <img src="./components/forskning.jpg" class="img-fluid mb-4 news-image" alt="Nyhetsbild">
    <p>Publicerad: <?php echo date("Y-m-d"); ?></p>
    <p>Kategori: Hälsa</p>
    <p>Forskare har gjort ett stort genombrott inom medicinsk forskning som kan leda till nya behandlingar för en rad olika sjukdomar. Genom att använda en ny teknik för att redigera gener har forskarna lyckats korrigera genetiska defekter som orsakar sjukdomar som cystisk fibros och sicklecellanemi.</p>
    <p>"Detta är en mycket spännande utveckling," säger Dr. Erik Johansson, en av forskarna bakom genombrottet. "Vi har nu verktygen för att korrigera genetiska defekter på ett sätt som tidigare var omöjligt. Detta kan leda till nya behandlingar för en rad olika sjukdomar och förbättra livskvaliteten för miljontals människor."</p>
  </div>
  <?php include 'components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

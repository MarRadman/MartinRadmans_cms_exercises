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
    <h1 class="mb-4">Ny banbrytande teknik revolutionerar energibranschen</h1>
    <img src="./components/nano.jpg" class="img-fluid mb-4 news-image" alt="Nyhetsbild">
    <p>Publicerad: <?php echo date("Y-m-d"); ?></p>
    <p>Kategori: Teknik</p>
    <p>En ny teknik som utvecklats av forskare vid ett ledande universitet har potential att revolutionera energibranschen. Tekniken, som använder sig av avancerade nanomaterial, kan öka effektiviteten hos solceller med upp till 50%. Detta kan leda till en betydande minskning av kostnaderna för förnybar energi och bidra till att minska koldioxidutsläppen globalt.</p>
    <p>Forskarna bakom tekniken säger att de är mycket optimistiska om dess potential och arbetar nu med att kommersialisera den. "Detta är ett stort steg framåt för förnybar energi," säger Dr. Anna Svensson, en av huvudforskarna bakom projektet. "Vi hoppas att denna teknik kommer att göra solenergi mer tillgänglig och prisvärd för alla."</p>
  </div>
  <?php include 'components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

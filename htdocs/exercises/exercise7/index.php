<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Välkommen till Nyhetssidan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <?php include 'components/header.php'; ?>
  <div class="container mt-5">
    <h1 class="mb-4">Välkommen till Nyhetssidan</h1>
    <p>Här hittar du de senaste och mest intressanta nyheterna från hela världen. Vi strävar efter att ge dig uppdaterad och pålitlig information om olika ämnen, inklusive teknik, hälsa, miljö och mycket mer.</p>
    <h2 class="mt-5 mb-4">Senaste Nyheten</h2>
    <div class="row">
      <?php
      $featuredNews = [
        "title" => "Ny banbrytande teknik revolutionerar energibranschen",
        "image" => "./components/nano.jpg",
        "link" => "newsOnePage.php",
        "description" => "En ny teknik som utvecklats av forskare vid ett ledande universitet har potential att revolutionera energibranschen. Tekniken, som använder sig av avancerade nanomaterial, kan öka effektiviteten hos solceller med upp till 50%."
      ];

      echo '
      <div class="col-md-12">
        <div class="card mb-4">
          <img src="' . $featuredNews["image"] . '" class="card-img-top news-image" alt="Nyhetsbild">
          <div class="card-body">
            <h5 class="card-title">' . $featuredNews["title"] . '</h5>
            <p class="card-text">' . $featuredNews["description"] . '</p>
            <a href="' . $featuredNews["link"] . '" class="btn btn-primary">Läs mer</a>
          </div>
        </div>
      </div>';
      ?>
    </div>
    <a href="news.php" class="btn btn-primary mt-4">Visa alla nyheter</a>
  </div>
  <?php include 'components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

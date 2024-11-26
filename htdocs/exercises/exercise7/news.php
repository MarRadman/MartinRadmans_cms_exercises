<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nyhetssida</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <?php include 'components/header.php'; ?>
  <div class="container mt-5">
    <h1 class="mb-4">Senaste Nyheterna</h1>
    <div class="row">
      <?php
      $news = [
        [
          "title" => "Ny banbrytande teknik revolutionerar energibranschen",
          "image" => "./components/nano.jpg",
          "link" => "newsOnePage.php"
        ],
        [
          "title" => "Stort genombrott inom medicinsk forskning",
          "image" => "./components/forskning.jpg",
          "link" => "newsOnePageSec.php"
        ],
        [
          "title" => "Nytt miljöinitiativ ska minska plastavfall i haven",
          "image" => "./components/plast.jpg",
          "link" => "newsOnePageThird.php"
        ]
      ];

      foreach ($news as $article) {
        echo '
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="' . $article["image"] . '" height="300px" width="200px" class="card-img-top" alt="Nyhetsbild ">
            <div class="card-body">
              <h5 class="card-title">' . $article["title"] . '</h5>
              <a href="' . $article["link"] . '" class="btn btn-primary">Läs mer</a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
  <?php include 'components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

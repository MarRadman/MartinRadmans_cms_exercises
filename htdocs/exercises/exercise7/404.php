<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Sidan kunde inte hittas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <?php include 'components/header.php'; ?>
  <div class="container mt-5 text-center">
    <h1 class="mb-4">404 - Sidan kunde inte hittas</h1>
    <p>Tyvärr, sidan du letar efter finns inte. Kontrollera URL:en eller gå tillbaka till <a href="index.php">startsidan</a>.</p>
    <form class="d-flex justify-content-center mt-4">
      <input class="form-control me-2" type="search" placeholder="Sök" aria-label="Sök">
      <button class="btn btn-outline-success" type="submit">Sök</button>
    </form>
  </div>
  <?php include 'components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

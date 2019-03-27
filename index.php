<?php
  $Nome = (isset($_POST['Nome'])) ? $_POST['Nome'] : '';
  $cognome = (isset($_POST['Cognome'])) ? $_POST['Cognome'] : '';
  $indirizzo = (isset($_POST['Indirizzo'])) ? $_POST['Indirizzo'] : '';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Esercizio-php-form</title>
  </head>
  <body>
    <div class="container">
      <h1>Inserisci i tuoi dati qui</h1>
        <?php if (empty($Nome)): ?>
        <div class="alert alert-danger" role="alert">
          <p>Scrivi il tuo nome</p>
        </div> 
        <?php else: ?> 
        <div class="alert alert-primary" role="alert">
        <ul>
          <?php
            foreach ($_POST as $key => $value) {
            print '<li>' . $key . ': ' . $value . '</li>';
            }
          ?>
        </ul>
        </div>
        <?php endif; ?>
      
        <form action="index.php" method="post">
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="Nome" id="name" placeholder="Il tuo nome">
            <small class="form-text text-muted">Scrivi il tuo nome</small>
          </div>
          <div class="form-group">
            <label for="surname">Cognome</label>
            <input type="text" class="form-control" name="Cognome" id="surname" placeholder="Il tuo cognome">
            <small class="form-text text-muted">Scrivi il tuo cognome</small>
          </div>
          <div class="form-group">
            <label for="indirizzo">E-mail</label>
            <input type="text" class="form-control" name="Indirizzo" id="indirizzo" placeholder="Il tuo indirizzo e-mail">
            <small class="form-text text-muted">Scrivi la tua e-mail</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
  </body>
</html>
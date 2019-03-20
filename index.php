<?php

$nome = (isset($_POST['nome'])) ? $_POST['nome']:'';
$cognome = (isset($_POST['cognome'])) ? $_POST['cognome']:'';
$indirzzo = (isset($_POST['indirizzo'])) ? $_POST['indirizzo']:'';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Tag Form</title>
  </head>
  <body> 
    <div class="container-fluid">
      <div class="alert alert-primary" role="alert">
        <?php
          foreach ($_POST as $key => $value) {
            print $key . ': ' . $value . '<br>';
          }
        ?>
      </div>
        <h1>Inserisci i tuoi dati</h1>
        
          <form action="index.php" method="post">
          
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control" name="nome" id="name" aria-describedby="nameHelp" placeholder="Il tuo nome">
              <small id="nameHelp" class="form-text text-muted">Inserisci il tuo nome</small>
            </div>
          
            <div class="form-group">
              <label for="surname">Cognome</label>
              <input type="text" class="form-control" name="cognome" id="surname" aria-describedby="surnameHelp" placeholder="Il tuo cognome">
              <small id="surnameHelp" class="form-text text-muted">Inserisci il tuo cognome</small>
            </div>
          
            <div class="form-group">
              <label for="address">Indirizzo</label>
              <input type="text" class="form-control" name="indirizzo" id="address" aria-describedby="addressHelp" placeholder="Il tuo indirizzo">
              <small id="addressHelp" class="form-text text-muted">Inserisci il tuo indirizzo</small>
            </div>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src=js/bootstrap.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  </head>
  <body>
    <header>
      <div class="cont-head">
        <img src="./img/spoty.png" alt="">
      </div>
    </header>
    <div class="container">


    </div>



    <script id="gestione-messaggi" type="text/x-handlebars-template">

      <div class="album">
        <img src="{{immagine}}" alt="">

        <div class="info">

          <p>{{nome}}</p>
          <p>{{autore}}</p>
          <p>{{anno}}</p>

        </div>

        <div class="cerchio">
          <i class="fas fa-play"></i>
        </div>

      </div>

    </script>


    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="partials/script.js" charset="utf-8"></script>
  </body>
</html>

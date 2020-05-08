<?php

  include __DIR__ . "/database.php";

  header('Content-Type: application/json');

  $dischi = [];

  foreach ($db as $infoDischi) {
    $dischi[] = [
      "copertina" => $infoDischi["poster"],
      "titolo" => $infoDischi["title"],
      "autore" => $infoDischi["author"],
      "anno" => $infoDischi["year"]
    ];
  }


  echo json_encode($dischi);


 ?>

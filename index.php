<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->


<?php

  $matches = [
    "tappa1" => [
      "squadraDiCasa" => "Longhi Treviso Basket",
      "squadraOspite" => "Germani Brescia",
      "PuntiFattiCasa" => 30,
      "puntiFattiOspite" => 33,
    ],
    "tappa2" => [
      "squadraDiCasa" => "Allinaz Basket",
      "squadraOspite" => "Vanoll Cremona",
      "PuntiFattiCasa" => 67,
      "puntiFattiOspite" => 87
    ],
    "tappa3" => [
      "squadraDiCasa" => "Cesenatico Basket",
      "squadraOspite" => "Sala Palla",
      "PuntiFattiCasa" => 87,
      "puntiFattiOspite" => 78
    ],
  ]


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Risultati:</h1>
     <span><?php echo $matches["tappa1"]["squadraDiCasa"] . " - "?> </span>
     <span><?php echo $matches["tappa1"]["squadraOspite"] . " | "?> </span>
     <span><?php echo $matches["tappa1"]["PuntiFattiCasa"] . " | "?> </span>
     <span><?php echo $matches["tappa1"]["puntiFattiOspite"]?> </span>
     <br>
     <span><?php echo $matches["tappa2"]["squadraDiCasa"] . " - "?> </span>
     <span><?php echo $matches["tappa2"]["squadraOspite"] . " | "?> </span>
     <span><?php echo $matches["tappa2"]["PuntiFattiCasa"] . " | "?> </span>
     <span><?php echo $matches["tappa2"]["puntiFattiOspite"]?> </span>
     <br>
     <span><?php echo $matches["tappa3"]["squadraDiCasa"] . " - "?> </span>
     <span><?php echo $matches["tappa3"]["squadraOspite"] . " | "?> </span>
     <span><?php echo $matches["tappa3"]["PuntiFattiCasa"] . " | "?> </span>
     <span><?php echo $matches["tappa3"]["puntiFattiOspite"]?> </span>



   </body>
 </html>

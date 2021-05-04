<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <style media="screen">

    body{
      display: flex;
      justify-content: center;
      align-items: center;

      background-color: darkorange;

    </style>
    <title></title>
  </head>
  <body>
      <?php

      // Creiamo un array contenente le partite di
      // basket di un'ipotetica tappa del calendario.
      // Ogni array avrà una squadra di
      // casa e una squadra ospite,
      // punti fatti dalla squadra di casa e
      // punti fatti dalla squadra ospite.
      // Stampiamo a schermo tutte le
      // partite con questo schema.

      // Olimpia Milano - Cantù | 55-60

      $index = [
        'Milano' => [

          'Teams' => [
            'Milano',
            'Roma'
          ],
          'score' => [
            '27',
            '33'
          ]

        ],

        'Napoli' => [

          'Teams' => [
            'Napoli',
            'Palermo'
          ],
          'score' => [
            '2',
            '3'
          ]

        ],

        'Napoli' => [

          'Teams' => [
            'Napoli',
            'Palermo'
          ],
          'score' => [
            '2',
            '3'
          ]

        ]
      ];

      echo '<h1>' . count($index) . '</h1>';

      // for ($i=0; $i < count($index); $i++) {
      //   // code...
      // }

    ?>
  </body>
</html>

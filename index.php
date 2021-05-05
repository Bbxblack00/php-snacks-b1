<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <style media="screen">

    body{
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-direction: column;


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

      // $index = [
      //   'Milano' => [
      //
      //     'Teams' => [
      //       'Milano',
      //       'Roma'
      //     ],
      //     'score' => [
      //       '27',
      //       '33'
      //     ]
      //
      //   ],
      //
      //   'Napoli' => [
      //
      //     'Teams' => [
      //       'Napoli',
      //       'Palermo'
      //     ],
      //     'score' => [
      //       '2',
      //       '3'
      //     ]
      //
      //   ],
      //
      //   'Manfredonia' => [
      //
      //     'Teams' => [
      //       'Manfredonia',
      //       'Venezia'
      //     ],
      //     'score' => [
      //       '89',
      //       '0'
      //     ]
      //
      //   ]
      // ];

      // echo '<h1>' . count($index) . '</h1>';

      // for ($i=0; $i < count($index); $i++) {
      //   $firstMach = $index[0];
      //   $secondMach = $index[1];
      //   $thirdMach = $index[2];
      //
      //   echo $fisrtMach[];
      // }

      // foreach ($index as $mach) {
      //   echo "<h1>" . $mach['Teams'][0] . ' - ' . $mach['Teams'][1] . ' | ' . $mach['score'][0] . '-'. $mach['score'][1] . '</h1>';
      // }


// -----------------------------------------------------------------------------


      // Passare come parametri GET name, mail e age e
      // verificare (cercando i metodi che non conosciamo
      // nella documentazione) che name sia più lungo di 3 caratteri,
      // che mail contenga un punto e una chiocciola e che age sia un numero.
      // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

      $name = $_GET['name'];
      $mail = $_GET['mail'];
      $age = $_GET['age'];

      if (count($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
        echo '<h1> ACCESSO RIUSCITO </h1>';
      } else {
        echo '<h1> ACCESSO NEGATO </h1>';
      }


    ?>
  </body>
</html>

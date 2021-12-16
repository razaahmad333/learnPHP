<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learn PHP</title>
  </head>
  <body>
    
      <?php
        include 'header.php';

      echo "thisi s main page";
      echo '<br>';
        // create array of associative array
        $crypto = array(
          array(
            'name' => 'Bitcoin',
            'symbol' => 'BTC',
            'price' => '$9,000'
          ),
          array(
            'name' => 'Ethereum',
            'symbol' => 'ETH',
            'price' => '$1,000'
          ),
          array(
            'name' => 'Litecoin',
            'symbol' => 'LTC',
            'price' => '$100'
          )
        );

        // print_r($crypto);
        // echo '<br>';

        foreach($crypto as $cr){
          echo $cr['name'] . ' - ' . $cr['symbol'] . ' - ' . $cr['price'] . '<br>';
        }

   ?>
  </body>
</html>

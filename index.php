<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body>
  <?php
  $rychlost = filter_input (INPUT_POST, 'gear');
  $submit = filter_input (INPUT_POST, 'submit');
  if ($submit != null) {
    if ($rychlost == 1) {
    echo "jedeš 20km/h";
    }
    elseif ($rychlost == 2) {
    echo "jedeš 40km/h";
    }
    elseif ($rychlost == 3) {
    echo "jedeš 60km/h";
    }
    elseif ($rychlost == 4) {
    echo "jedeš 80km/h";
    }
    elseif ($rychlost == 0) {
      echo "nebyla zadaná žádná rychlost";
    }
    else {
      echo "jedeš víc jak 100km/h";
      }
   }
  ?>

  <form class="" action="index.php" method="post">
    <input type="radio" name="gear" value="1"> 1 <br>
    <input type="radio" name="gear" value="2"> 2 <br>
    <input type="radio" name="gear" value="3"> 3 <br>
    <input type="radio" name="gear" value="4"> 4 <br>
    <input type="radio" name="gear" value="5"> 5 <br>
    <input type="submit" name="submit" value="Odeslat"> <br>

  </form>
</body>

</html> 

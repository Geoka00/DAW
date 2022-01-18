<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biletul nr.5</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php
    include "db.php"
    ?>
    <script>

    </script>
</head>
<body>
<?php
$sqli = "SELECT * FROM produse";
$res = $con->query($sqli);
$data = $res->fetch_all(MYSQLI_ASSOC);

echo "<h1><b>Magazin</b></h1>";
echo "<hr>";


echo "<div class='container'>";

  foreach($data as $row){
      echo "<div class='box'>
                <img src='{$row['image']}'; class='box-img';
                <br>
            <div class='box-title'>
            {$row['product']} - {$row['price']}$
            </div>
            <br>
            <div class='description'>
            {$row['description']}
            </div>
            <input type='number' value='1'><button>Adauga</button>
        </div>";
  }
  echo "<div class='last-row'>
    <h3 style='text-align: center'>Cos</h3>
    <br>
    Total produse: 0
    <br>
    Total itemii: 0
    <br>
    Total: {$row['price']}
    <br>
    <button>Comanda acum</button>
</div>";
echo "</div>";
    /*cart*/

?>


</body>
</html>
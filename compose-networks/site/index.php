<html>
  <body>
    <h1>Apparel prices:</h1>
    <ul>
      <?php
        foreach(json_decode(file_get_contents('http://prices')) as $price_item) {
          echo "<li>$price_item->name: $$price_item->price</li>";
        }
      ?>
    </ul>
    <h2>Core apparel:</h2>
    <ul>
        <?php
          foreach(json_decode(file_get_contents('http://apparel')) as $apparel_item) {
            echo "<li>$apparel_item->name</li>";
          }
        ?>
    </ul>
  </body>
</html>
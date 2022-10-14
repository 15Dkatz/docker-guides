<html>
  <body>
    <h1>Apparel prices:</h1>
    <ul>
      <?php
        $json = file_get_contents('http://prices');
        $price_items = json_decode($json);
        foreach ($price_items as $price_item) {
          echo "<li>$price_item->price</li>";
        }
      ?>
    </ul>
    <h2>Core apparel:</h2>
    <ul>
      <?php
        $json = file_get_contents('http://apparel');
        $apparel_items = json_decode($json);
        foreach ($apparel_items as $apparel_item) {
          echo "<li>$apparel_item->name</li>";
        }
      ?>
    </ul>
  </body>
</html>

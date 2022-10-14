<html>
  <body>
    <h1>Team:</h1>
    <ul>
      <?php
        $json = file_get_contents('http://players/');
        $players = json_decode($json)->players;
        foreach ($players as $player) {
          echo "<li>$player</li>";
        }
      ?>
    </ul>
  </body>
</html>

<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Факти за България</title>
  </head>
  <body>
    <div align="center">
      <h1>НАСЕЛЕНИЕ КЪМ 31.12. 2020 Г. ПО ПОЛ</h1>
      <img src="https://www.nsi.bg/core/themes/bartik/images/BGR_NSI_Logo.png" />
      <table>
        <tr>
          <td>Площ</td>
          <td></td>
          <td>110 993.6 кв.км.</td>
        </tr>
      </table>
      <table>
<?php
require_once ('config.php');
   try {
      $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
      $query = $connection->query("SELECT citizen_type, population FROM citizens ORDER BY population DESC");
      $citizens = $query->fetchAll();

      if (empty($citizens)) {
         echo "<tr><td>Няма данни.</td></tr>\n";
      } else {
         $total = 0;
         foreach ($citizens as $citizen) {
            print "<tr><td>{$citizen['citizen_type']}</td><td align=\"right\">{$citizen['population']}</td></tr>\n";
           $total += $citizen['population'];
         }
         print "<tr><td><b>ОБЩО</b></td><td align=\"right\">{$total}</td></tr>\n";
      }
   }
   catch (PDOException $e) {
      echo $e->getMessage().'<br>';
      print "<tr><td>Няма връзка към базата. Опитайте отново.</td></tr>\n";
   }
?>
      </table>
    </div>
    <?php print "Node: <b>".gethostname()."</b>";?>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="container">
    <?php include 'menubar.php' ?>
    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div>
    <div class="content">
      <?php 
        include("config.php"); 
        session_start();

        $sql = "SELECT * FROM products";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<h2> product: " . $row["name"]. " - voorraad: " . $row["stock"]."</h2><br>";
          }
        }
        $db->close();
      ?>
    </div>
    <div class="footer" style = "clear:both; text-align: center">
      <p style="padding-left: 10%; padding-right: 10%">Copyright © 2018 | Site uitsluitend bedoeld voor Summa ICT te Eindhoven</p>
    </div>
  </div>
</body>
</html>


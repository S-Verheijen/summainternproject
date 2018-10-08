<html>
<?php include('session.php'); ?>
   <head>
   <link rel="stylesheet" type="text/css" href="css/style.css">
      <title> Bestellingen </title>
   </head>
   <body>
        <div class="container">
            <?php include('menubar.php');?>
            <div class="pagetitle">
                <h1> Bestellingen </h1>
            </div>
            <div class="content">
            <div id="items">
                    <table>
                        <tr>
                            <th> Monitor </th>
                            <th> Quantity </th>
                            <th> Stock </th>
                        </tr>
                        <tr>
                            <td> <img class="imgDIV" src="assets/monitor.png"> </td>
                            <td>   
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                            <td> out of stock / in stock </td>
                            <td> <button type="button" onclick="alert('Toegevoegd aan mandje')">Add to cart</button> </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="footer" style = "clear:both; text-align: center">
            <p style="padding-left: 10%; padding-right: 10%">Copyright © 2018 | Site uitsluitend bedoeld voor Summa ICT te Eindhoven</p>
            </div>
        </div>
        </body>
</html>


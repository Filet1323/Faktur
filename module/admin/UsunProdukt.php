<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM produkty;";
$res= mysql_query($sql);
$string = "";

while($row = mysql_fetch_array($res)){
    $picname = $row['ID'];
    $string .= "<form action='UsunProduktTabela.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    '<input type="hidden" value="'.$row['ID'].'" name="ID" />'.
    '<td>'.$row['ID'].'</td><td>'.$row['Nazwa'].
    '</td><td>'.$row['Cena'].'</td></tr></form>';
}
?>
<html>
    <meta charset="UTF-8">
    <head>
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
			  <div class="header"><h1>Fakturowanie</h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo2.jpg" height="100" width="100" alt="Fakturowanie"/>
				</div>
			<br/><br/>
				<ul>
				    <li class="manulist">
						   <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="DodajProdukt.php">Dodaj produkt</a>
								<a class ="menulista" href="ZobaczProdukt.php">Zobacz produkty</a>
								<a class ="menulista" href="UsunProdukt.php">Usuń produkt</a>

								<div align="center">
								<h4>Witaj Admin</h4>
								    <a class ="menulista" href="logout.php"><?php echo "Wyloguj";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Usuń fakturę</h2><hr/>
              <table class= "styled-table" border="1">
                <tr>
                    <th>Wybierz do usunięcia</th>
                    <th>ID</th>
                    <th>Nazwa</th>
                    <th>Cena</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
		</body>
</html>

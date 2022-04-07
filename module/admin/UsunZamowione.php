<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM zamowione_produkty;";
$res= mysql_query($sql);
$string = "";

while($row = mysql_fetch_array($res)){
    $picname = $row['ID'];
    $string .= "<form action='UsunZamowioneTabela.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    '<input type="hidden" value="'.$row['ID_Faktury'].'" name="ID" />'.
    '<td>'.$row['ID_Faktury'].'</td><td>'.$row['ID_Produktu'].
    '</td><td>'.$row['Ilosc'].'</td><td>'.$row['Cena_Netto'].
    '</td><td>'.$row['Stawka_VAT'].'</td><td>'.$row['Kwota_VAT'].
    '</td><td>'.$row['Cena_Brutto'].'</td></tr></form>';
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
								<a class ="menulista" href="dodajZamowione.php">Dodaj Zamówione produkty</a>
								<a class ="menulista" href="ZobaczZamowione.php">Zobacz Zamówione produkty</a>
								<a class ="menulista" href="aktualizujZamowione.php">Uaktualnij Zamówione produkty</a>
								<a class ="menulista" href="UsunZamowione.php">Usun Zamówione produkty</a>

								<div align="center">
								<h4>Witaj Admin</h4>
								    <a class ="menulista" href="logout.php"><?php echo "Wyloguj";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Usuń Zamówione produkty</h2><hr/>
              <table class= "styled-table" border="1">
                <tr>
                    <th>Wybierz do usunięcia</th>
                    <th>ID Faktury</th>
                    <th>ID Produktu</th>
                    <th>Ilość</th>
                    <th>Cena_Netto</th>
                    <th>Stawka_VAT</th>
                    <th>Kwota_VAT</th>
                    <th>Cena_Brutto</th>

                </tr>
                <?php echo $string;?>
              </table>
        </center>
		</body>
</html>

<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM sprzedawca;";
$res= mysql_query($sql);
$string = "";
while($row = mysql_fetch_array($res)){
    $picname = $row['ID'];
    $string .= '<tr><td>'.$row['ID'].'</td><td>'.$row['Nazwa'].
    '</td><td>'.$row['Adres'].'</td><td>'.$row['Miasto'].
    '</td><td>'.$row['Kraj'].'</td><td>'.$row['Kod_pocztowy'].
    '</td><td>'.$row['Telefon'].'</td><td>'.$row['NIP'].'</td></tr>';
}
?>
<html>
     <meta charset="UTF-8">
    <head>
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/SzukajSprzedawce.js"></script>
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
								<a class ="menulista" href="dodajSprzedawce.php">Dodaj Sprzedawce</a>
								<a class ="menulista" href="ZobaczSprzedawce.php">Zobacz Sprzedawce</a>
								<a class ="menulista" href="aktualizujSprzedawce.php">Uaktualnij Sprzedawce</a>
								<a class ="menulista" href="UsunSprzedawce.php">Usun Sprzedawce</a>

								<div align="center">
								<h4>Witaj Admin</h4>
								    <a class ="menulista" href="logout.php"><?php echo "Wyloguj";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
        <center>
            <table>
                <tr>
                    <td><b>Szukaj po ID lub Nazwie: </b></td>
                    <td><input type="text" name="SprzedawcaId" placeholder="................." onkeyup="getSprzedawca(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center><h2>Zobacz Nabywców</h2></center>
        <center>
            <table class= "styled-table" border="1" id='SprzedawcaList'>
                <tr>
                    <th>ID</th>
                    <th>Nazwa</th>
                    <th>Adres</th>
                    <th>Miasto</th>
                    <th>Kraj</th>
                    <th>Kod pocztowy</th>
                    <th>Telefon</th>
                    <th>NIP</th>

                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>

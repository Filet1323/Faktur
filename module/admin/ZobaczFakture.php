<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM faktury;";
$res= mysql_query($sql);
$string = "";
while($row = mysql_fetch_array($res)){
    $picname = $row['ID'];
    $string .= '<tr><td>'.$row['ID'].'</td><td>'.$row['Nr_Faktury'].
    '</td><td>'.$row['Data_wystawienia'].'</td><td>'.$row['Data_sprzedazy'].
    '</td><td>'.$row['ID_Nabywcy'].'</td><td>'.$row['ID_Sprzedawcy'].
    '</td><td>'.$row['Razem_do_zaplaty'].'</td><td>'.$row['Forma_platnosci'].
    '</td><td>'.$row['Data_platnosci'].'</td><td>'.$row['Nr_rachunku_sprzedawcy'].
    '</td><td>'.$row['Czy_oplacona'].'</td></tr>';
}
?>
<html>
     <meta charset="UTF-8">
    <head>
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/Szukajfaktury.js"></script>
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
								<a class ="menulista" href="DodajFakture.php">Dodaj Fakture</a>
								<a class ="menulista" href="ZobaczFakture.php">Zobacz Faktury</a>
								<a class ="menulista" href="aktualizujFakture.php">Uaktualnij Fakture</a>
								<a class ="menulista" href="UsunFakture.php">Usun Fakture</a>

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
                    <td><b>Szukaj po ID lub Nr Faktury: </b></td>
                    <td><input type="text" name="FakturaId" placeholder="................." onkeyup="getBilling(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center><h2>Zobacz Faktury</h2></center>
        <center>
            <table class="styled-table" border="1" id='BillingList'>
                <tr>
                    <th>ID</th>
                    <th>Numer Faktury</th>
                    <th>Data wystawienia</th>
                    <th>Data sprzedaży</th>
                    <th>ID nabywcy</th>
                    <th>ID Sprzedawcy</th>
                    <th>Razem do zapłaty</th>
                    <th>Forma Płatności</th>
                    <th>Data Płatności</th>
                    <th>Numer Rachunku</th>
                    <th>Czy opłacona</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>

<?php
include_once('main.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/SzukajupdateZamowione.js"></script>
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
            <table>
                <tr>
                    <td><b>Szukaj po ID Faktury lub Produktu: </b></td>
                    <td><input type="text" name="searchId" placeholder="................." onkeyup="getZamowioneForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Tylko 1 Zamówienie może być edytowana jednocześnie.</h2>
            <form action="#" method="post" onsubmit="return newZamowioneValidation();" enctype="multipart/form-data">
                <table class= "styled-table" border="1" cellpadding="6" id='updateZamowioneData'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $faktID = $_POST['fakturaID'];
    $ProdID = $_POST['ProduktID'];
    $ilo = $_POST['ilos'];
    $cen_net = $_POST['cena_net'];
    $staw = $_POST['stawka'];
    $kwot = $_POST['kwota'];
    $cen_bru = $_POST['cena_bru'];
    
    $sql = "UPDATE zamowione_produkty SET ID_Faktury='$faktID', ID_Produktu='$ProdID', Ilosc='$ilo', Cena_Netto='$cen_net', Stawka_VAT='$staw', Kwota_VAT='$kwot', Cena_Brutto='$cen_bru' WHERE ID_Faktury='$faktID'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Nie udało się zaktualizować: '.mysql_error());
    }
    echo "Wszystko przebiegło pomyślnie\n";
}

if ($_POST["netto"] and $_POST["vat"] and !$_POST["brutto"]) {
 $netto = $_POST["netto"];
 $brutto = number_format($_POST["netto"]*(1+$_POST["vat"]/100), 2, ".", "");
 $vat = $_POST["vat"];
 echo "netto: $netto, vat: ".($brutto-$netto).", brutto: $brutto ";
} else if ($_POST["brutto"] and $_POST["vat"] and !$_POST["netto"]) {
 $netto = number_format($_POST["brutto"]/(1+$_POST["vat"]/100), 2, ".", "");
 $brutto = $_POST["brutto"];
 $vat = $_POST["vat"];
 echo "Netto: $netto, VAT: ".($brutto-$netto).", Brutto: $brutto ";
} else {
 echo "Wypełnij pole VAT oraz pole Netto albo Brutto";
}
echo <<<KOD
<form name="formularz" action="aktualizujZamowione.php" method="post">
 Netto: <input type="text" name="netto" value="$netto" />
 Brutto: <input type="text" name="brutto" value="$brutto" />
 Vat: <input type="text" name="vat" value="$vat" />
 <input type="submit" value="Wyślij" />
</form>
KOD;
?>

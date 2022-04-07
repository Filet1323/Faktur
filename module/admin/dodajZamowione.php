<?php
include_once('main.php');
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
            <h2>Dodawanie Zamówień</h2><hr/>
            <form action="#" method="post"onsubmit="return newBillingValidation();" enctype="multipart/form-data">
                <table class= "styled-table" cellpadding="6">

                    <tr>
                      <td>ID Faktury:</td>
                      <td><input id="faktID"type="int(11)" name="fakturaID" placeholder="..........."></td>
                    </tr>

                    <tr>
                        <td>ID Produktu:</td>
                        <td><input id="ProdID" type="int(11)" name="ProduktID" placeholder="..........."></td>
                    </tr>
                    <tr>
                        <td>Ilość:</td>
                        <td><input id="ilo" type="int(11)" name="ilos" placeholder="..........."></td>
                    </tr>
                    <tr>
                        <td>Cena_Netto:</td>
                        <td><input id="cen_net"type="float" name="cena_net" placeholder="..........."></td>
                    </tr>
                    <tr>
                        <td>Stawka_VAT:</td>
                        <td><input id="staw"type="float" name="stawka" placeholder="..........."></td>
                    </tr>
                       <tr>
                        <td>Kwota_VAT:</td>
                        <td><input id="kwot"type="float" name="kwota" placeholder="..........."></td>
                    </tr>
                        <tr>
                        <td>Cena_Brutto:</td>
                        <td><input id="cen_bru"type="float" name="cena_bru" placeholder="..........."></td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit"value="Submit"></td>
                    </tr>
                </table>
                <h2>Obliczanie VAT</h2>
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
    
    $sql = "INSERT INTO zamowione_produkty VALUES('$faktID','$ProdID','$ilo','$cen_net','$staw','$kwot','$cen_bru');";
    $success = mysql_query($sql);
    if(!$success) {
        die('Nie można dodać Zamówienia: '.mysql_error());
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
<form name="formularz" action="dodajZamowione.php" method="post">
 Netto: <input type="text" name="netto" value="$netto" />
 Brutto: <input type="text" name="brutto" value="$brutto" />
 Vat: <input type="text" name="vat" value="$vat" />
 <input type="submit" value="Wyślij" />
</form>
KOD;
?>
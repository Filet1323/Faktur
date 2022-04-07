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
								<a class ="menulista" href="dodajNabywce.php">Dodaj Nabywcę</a>
								<a class ="menulista" href="ZobaczNabywce.php">Zobacz Nabywcę</a>
								<a class ="menulista" href="aktualizujNabywce.php">Uaktualnij Nabywcę</a>
								<a class ="menulista" href="UsunNabywce.php">Usun Nabywcę</a>

								<div align="center">
								<h4>Witaj Admin</h4>
								    <a class ="menulista" href="logout.php"><?php echo "Wyloguj";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Dodawanie Nabywcy</h2><hr/>
            <form action="#" method="post"onsubmit="return newBillingValidation();" enctype="multipart/form-data">
                <table class= "styled-table" cellpadding="6">

                    <tr>
                      <td>Nazwa:</td>
                      <td><input id="naz"type="varchar(50)" name="nazw" placeholder="............"></td>
                    </tr>

                    <tr>
                        <td>Adres:</td>
                        <td><input id="adr"type="varchar(50)" name="adre" placeholder="............"></td>
                    </tr>
                    <tr>
                        <td>Miasto:</td>
                        <td><input id="mia"type="varchar(50)" name="miast" placeholder="............"></td>
                    </tr>
                     <tr>
                        <td>Kraj:</td>
                        <td><input id="kr"type="varchar(50)" name="kra" placeholder="............"></td>
                    </tr>
                    <tr>
                        <td>Kod pocztowy:</td>
                        <td><input id="kod_po"type="varchar(6)" name="kod_poczt" placeholder="............"></td>
                    </tr>

                    <tr>
                        <td>Telefon:</td>
                        <td><input id="tel"type="varchar(15)" name="tele" placeholder="............"></td>
                    </tr>
                    <tr>
                        <td>NIP:</td>
                        <td><input id="ni"type="varchar(50)" name="niip" placeholder="............"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit"value="Submit"></td>
                    </tr>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $Id = $_POST['IDid'];
    $naz = $_POST['nazw'];
    $adr = $_POST['adre'];
    $mia = $_POST['miast'];
    $kr = $_POST['kra'];
    $kod_po = $_POST['kod_poczt'];
    $tel = $_POST['tele'];
    $ni = $_POST['niip'];
    
    $sql = "INSERT INTO nabywca VALUES('$Id','$naz','$adr','$mia','$kr','$kod_po','$tel','$ni');";
    $success = mysql_query($sql);
    if(!$success) {
        die('Nie można dodać Nabywcy: '.mysql_error());
    }
    echo "Wszystko przebiegło pomyślnie\n";
}
?>

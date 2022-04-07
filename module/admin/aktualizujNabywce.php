<?php
include_once('main.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/SzukajupdateNabywce.js"></script>
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
            <table>
                <tr>
                    <td><b>Szukaj po ID lub Nazwie: </b></td>
                    <td><input type="text" name="searchId" placeholder="................." onkeyup="getNabywcaForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Tylko 1 Nabywca może być edytowany jednocześnie.</h2>
            <form action="#" method="post" onsubmit="return newNabywcaValidation();" enctype="multipart/form-data">
                <table class= "styled-table" border="1" cellpadding="6" id='updateNabywcaData'>
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
    
    $sql = "UPDATE nabywca SET ID='$Id', Nazwa='$naz', Adres='$adr', Miasto='$mia', Kraj='$kr', Kod_pocztowy='$kod_po', Telefon='$tel', NIP='$ni'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Nie udało się zaktualizować: '.mysql_error());
    }
    echo "Wszystko przebiegło pomyślnie\n";
}
?>

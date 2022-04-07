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
            <h2>Dodawanie Faktury</h2><hr/>
            <form action="#" method="post"onsubmit="return newBillingValidation();" enctype="multipart/form-data">
                <table class= "styled-table" cellpadding="6">

                    <tr>
                      <td>Numer Faktury:</td>
                      <td><input id="faktNR"type="int(11)" name="fakturaNR" placeholder="ID"></td>
                    </tr>

                    <tr>
                        <td>Data wystawienia:</td>
                        <td><input id="data_wystaw"name="data_wystawienia"value = "<?php echo date('Y-m-d');?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Data sprzedaży:</td>
                        <td><input id="dat_spr"type="date" name="data_spr" placeholder="Data"></td>
                    </tr>
                    <tr>
                        <td>ID nabywcy:</td>
                        <td><input id="id_nab"type="int(11)" name="id_nabywcy" placeholder="IDNabywca"></td>
                    </tr>
                        <tr>
                        <td>ID Sprzedawcy:</td>
                        <td><input id="id_spr"type="int(11)" name="id_sprzedawcy" placeholder="IDSprzedawca"></td>
                    </tr>

                       <tr>
                        <td>Razem do zapłaty:</td>
                        <td><input id="do_zapl"type="float" name="do_zaplaty" placeholder="Cena"></td>
                    </tr>

                    <tr>
                        <td>Forma Płatności:</td>
                        <td><input id="forma_plat" type="text" name="forma_platnosci" placeholder="Wpisz Forme"></td>
                    </tr>
                    <tr>
                        <td>Data Płatności:</td>
                        <td><input id="data_plat"type="date" name="data_platnosci" placeholder="wpisz datę zapłaty"></td>
                    </tr>
                    <tr>
                        <td>Numer Rachunku:</td>
                        <td><input id="Nr_rach" type="varchar(20)" name="Nr_rachunku" placeholder="Numer:"></td>
                    </tr>
                    <tr>
                        <td>Czy opłacona:</td>
                        <td><input id="czy_oplac" type="bit" name="czy_oplacona" placeholder="1 lub 0"></td>
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
    $faktNR = $_POST['fakturaNR'];
    $data_wystaw = $_POST['data_wystawienia'];
    $dat_spr = $_POST['data_spr'];
    $id_nab = $_POST['id_nabywcy'];
    $id_spr = $_POST['id_sprzedawcy'];
    $do_zapl = $_POST['do_zaplaty'];
    $forma_plat = $_POST['forma_platnosci'];
    $data_plat = $_POST['data_platnosci'];
    $Nr_rach = $_POST['Nr_rachunku'];
    $czy_oplac = $_POST['czy_oplacona'];
    
    $sql = "INSERT INTO faktury VALUES('$Id','$faktNR','$data_wystaw','$dat_spr','$id_nab','$id_spr','$do_zapl','$forma_plat','$data_plat','$Nr_rach','$czy_oplac');";
    $success = mysql_query($sql);
    if(!$success) {
        die('Nie można dodać faktury: '.mysql_error());
    }
    echo "Wszystko przebiegło pomyślnie\n";
}
?>

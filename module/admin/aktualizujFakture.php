<?php
include_once('main.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/Szukajupdatefaktury.js"></script>
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
                    <td><b>Szukaj po ID lub Nr_faktury: </b></td>
                    <td><input type="text" name="searchId" placeholder="................." onkeyup="getBillingForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Tylko 1 faktura może być edytowana jednocześnie.</h2>
            <form action="#" method="post" onsubmit="return newBillingValidation();" enctype="multipart/form-data">
                <table class= "styled-table" border="1" cellpadding="6" id='updateBillingData'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $fakId = $_POST['IDid'];
    $fakNR = $_POST['fakturaNR'];
    $fakdata_wystaw = $_POST['data_wys'];
    $fakdat_spr = $_POST['data_spr'];
    $fakid_nab = $_POST['id_naby'];
    $fakid_spr = $_POST['id_spr'];
    $fakdo_zapl = $_POST['do_zap'];
    $fakforma_plat = $_POST['forma_pla'];
    $fakdata_plat = $_POST['data_pla'];
    $fakNr_rach = $_POST['Nr_rach'];
    $fakczy_oplac = $_POST['czy_opl'];
    
    $sql = "UPDATE faktury SET ID='$fakId', Nr_Faktury='$fakNR', Data_wystawienia='$fakdata_wystaw', Data_sprzedazy='$fakdat_spr', ID_Nabywcy='$fakid_nab', ID_Sprzedawcy='$fakid_spr', Razem_do_zaplaty='$fakdo_zapl', Forma_platnosci='$fakforma_plat', Data_platnosci='$fakdata_plat', Nr_rachunku_sprzedawcy='$fakNr_rach', Czy_oplacona='$fakczy_oplac' WHERE ID='$fakId'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Nie udało się zaktualizować: '.mysql_error());
    }
    echo "Wszystko przebiegło pomyślnie\n";
}
?>

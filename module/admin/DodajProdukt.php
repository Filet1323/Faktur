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
            <h2>Dodawanie Produktu</h2><hr/>
            <form action="#" method="post"onsubmit="return newProductValidation();" enctype="multipart/form-data">
                <table class= "styled-table" cellpadding="6">
                    <tr>
                      <td>ID:</td>
                      <td><input id="id"type="int(11)" name="IDid" placeholder="............"></td>
                    </tr>
                    <tr>
                      <td>Nazwa:</td>
                      <td><input id="naz"type="text" name="Nazwa" placeholder="............"></td>
                    </tr>
                       <tr>
                        <td>Cena:</td>
                        <td><input id="cen"type="float" name="cena" placeholder="............"></td>
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
    $naz = $_POST['Nazwa'];
    $cen = $_POST['Cena'];

    
    $sql = "INSERT INTO produkty VALUES('$Id','$naz','$cen');";
    $success = mysql_query($sql);
    if(!$success) {
        die('Nie można dodać produktu: '.mysql_error());
    }
    echo "Wszystko przebiegło pomyślnie\n";
}
?>

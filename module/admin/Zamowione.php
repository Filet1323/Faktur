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
        
		</body>
</html>

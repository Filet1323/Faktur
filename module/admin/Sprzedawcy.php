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
        
		</body>
</html>

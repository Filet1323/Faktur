<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Złe dane!";
	  $color="red";
}
else{
    $login_message="Zaloguj się !";
	  $color="green";
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
	      <script src="source/js/loginValidate.js"></script>
        <title>Fakturowanie</title>
    </head>
    <body>
        <center>
	          <img src="source/logo2.jpg" />
	          <hr/>
            <?php echo "<font size='4' color='$color'>$login_message</font>";?>
            <form  action="service/check.access.php" onsubmit="return loginValidate();" method="post"><br/>
                <input type="text" id="myid" name="myid" placeholder="ID" autofocus=""   /><br/><br/><br/>
                <input type="password" id="mypassword" name="mypassword" placeholder="Hasło"  /><br/><br/><br/>
                <input type="submit" value="Zaloguj" />
            </form>
        </center>
    </body>
</html>

<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if($_POST['submit']){
    $ID = $_POST['ID'];
    $sql = "DELETE FROM produkty WHERE ID = '$ID';";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Nie można usunąć: '.mysql_error());
    }
    echo "Usunięto pomyślnie\n";

}
?>

<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if($_POST['submit']){
    $ID = $_POST['ID'];
    $sql = "DELETE FROM zamowione_produkty WHERE ID_Faktury = '$ID';";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Nie można usunąć: '.mysql_error());
    }
    echo "Usunieto pomyslnie\n";

}
?>

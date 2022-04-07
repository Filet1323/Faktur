<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
$string = "<tr>
            <th>ID Faktury</th>
            <th>ID Produktu</th>
            <th>Ilość</th>
            <th>Cena_Netto</th>
            <th>Stawka_VAT</th>
            <th>Kwota_VAT</th>
            <th>Cena_Brutto</th>
</tr>";
$sql = "SELECT * FROM zamowione_produkty WHERE ID_Faktury like '$searchKey%' OR ID_Produktu like '$searchKey%';";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
    $picname = $row['ID_Faktury'];
    $string .= '<tr><td>'.$row['ID_Faktury'].'</td><td>'.$row['ID_Produktu'].
    '</td><td>'.$row['Ilosc'].'</td><td>'.$row['Cena_Netto'].
    '</td><td>'.$row['Stawka_VAT'].'</td><td>'.$row['Kwota_VAT'].
    '</td><td>'.$row['Cena_Brutto'].'</td></tr>';
}
echo $string;
?>

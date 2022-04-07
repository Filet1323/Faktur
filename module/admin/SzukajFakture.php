<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
$string = "<tr>
    <th>ID</th>
    <th>Nr_Faktury</th>
    <th>Data_wystawienia</th>
    <th>Data_sprzedazy</th>
    <th>ID_Nabywcy</th>
    <th>ID_Sprzedawcy</th>
    <th>Razem_do_zaplaty</th>
    <th>Forma_platnosci</th>
    <th>Data_platnosci</th>
    <th>Nr_rachunku_sprzedawcy</th>
    <th>Czy_oplacona</th>
</tr>";
$sql = "SELECT * FROM faktury WHERE id like '$searchKey%' OR Nr_Faktury like '$searchKey%';";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
    $picname = $row['ID'];
    $string .= '<tr><td>'.$row['ID'].'</td><td>'.$row['Nr_Faktury'].
    '</td><td>'.$row['Data_wystawienia'].'</td><td>'.$row['Data_sprzedazy'].
    '</td><td>'.$row['ID_Nabywcy'].'</td><td>'.$row['ID_Sprzedawcy'].
    '</td><td>'.$row['Razem_do_zaplaty'].'</td><td>'.$row['Forma_platnosci'].
    '</td><td>'.$row['Data_platnosci'].'</td><td>'.$row['Nr_rachunku_sprzedawcy'].
    '</td><td>'.$row['Czy_oplacona'].'</td></tr>';
}
echo $string;
?>

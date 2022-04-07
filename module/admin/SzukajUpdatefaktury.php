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
$sql = "SELECT * FROM faktury WHERE ID like '$searchKey%' OR Nr_Faktury like '$searchKey%';";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
    $string .= "<tr><td><input value='".$row['ID']."'name='IDid' readonly >".
    "</td><td><input type='text' value='".$row['Nr_Faktury']."'name='fakturaNR'>".
    "</td><td><input type='text' value='".$row['Data_wystawienia']."'name='data_wys'>".
    "</td><td><input type='text' value='".$row['Data_sprzedazy']."'name='data_spr'>".
    "</td><td><input type='text' value='".$row['ID_Nabywcy']."'name='id_naby'>".
    "</td><td><input type='text' value='".$row['ID_Sprzedawcy']."'name='id_spr'>".
    "</td><td><input type='text' value='".$row['Razem_do_zaplaty']."'name='do_zap'>".
    "</td><td><input type='text' value='".$row['Forma_platnosci']."'name='forma_pla'>".
    "</td><td><input type='text' value='".$row['Data_platnosci']."'name='data_pla'>".
    "</td><td><input type='text' value='".$row['Nr_rachunku_sprzedawcy']."'Nr_rach'>".
    "</td><td><input type='text' value='".$row['Czy_oplacona']."'name='czy_opl'>".
    "</td></tr>";
}
echo $string."<input type='submit' name='submit'value='Submit'>";
?>

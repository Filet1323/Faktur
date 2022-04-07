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
    $string .= "<tr><td><input value='".$row['ID_Faktury']."'name='fakturaID'>".
    "</td><td><input type='text' value='".$row['ID_Produktu']."'name='ProduktID'>".
    "</td><td><input type='text' value='".$row['Ilosc']."'name='ilos'>".
    "</td><td><input type='text' value='".$row['Cena_Netto']."'name='cena_net'>".
    "</td><td><input type='text' value='".$row['Stawka_VAT']."'name='stawka'>".
    "</td><td><input type='text' value='".$row['Kwota_VAT']."'name='kwota'>".
    "</td><td><input type='text' value='".$row['Cena_Brutto']."'name='cena_bru'>".
    "</td></tr>";
}
echo $string."<input type='submit' name='submit'value='Submit'>";
?>

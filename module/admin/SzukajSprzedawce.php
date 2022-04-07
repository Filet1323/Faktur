<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
$string = "<tr>
         <th>ID</th>
         <th>Nazwa</th>
         <th>Adres</th>
         <th>Miasto</th>
         <th>Kraj</th>
         <th>Kod_pocztowy</th>
         <th>Telefon</th>
         <th>NIP</th>
</tr>";
$sql = "SELECT * FROM sprzedawca WHERE id like '$searchKey%' OR Nazwa like '$searchKey%';";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
    $picname = $row['ID'];
    $string .= '<tr><td>'.$row['ID'].'</td><td>'.$row['Nazwa'].
    '</td><td>'.$row['Adres'].'</td><td>'.$row['Miasto'].
    '</td><td>'.$row['Kraj'].'</td><td>'.$row['Kod_pocztowy'].
    '</td><td>'.$row['Telefon'].'</td><td>'.$row['NIP'].'</td></tr>';
}
echo $string;
?>

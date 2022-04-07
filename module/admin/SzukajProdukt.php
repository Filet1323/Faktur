<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
$string = "<tr>
    <th>ID</th>
    <th>Nazwa</th>
    <th>Cena</th>

</tr>";
$sql = "SELECT * FROM produkty WHERE ID like '$searchKey%' OR Nazwa like '$searchKey%';";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
    $picname = $row['ID'];
    $string .= '<tr><td>'.$row['ID'].'</td><td>'.$row['Nazwa'].
    '</td><td>'.$row['Cena'].'</td></tr>';
}
echo $string;
?>

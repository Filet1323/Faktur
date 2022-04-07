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
                    <th>Kod pocztowy</th>
                    <th>Telefon</th>
                    <th>NIP</th>
</tr>";
$sql = "SELECT * FROM nabywca WHERE ID like '$searchKey%' OR Nazwa like '$searchKey%';";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
    $string .= "<tr><td><input value='".$row['ID']."'name='IDid' readonly >".
    "</td><td><input type='text' value='".$row['Nazwa']."'name='nazw'>".
    "</td><td><input type='text' value='".$row['Adres']."'name='adre'>".
    "</td><td><input type='text' value='".$row['Miasto']."'name='miast'>".
    "</td><td><input type='text' value='".$row['Kraj']."'name='kra'>".
    "</td><td><input type='text' value='".$row['Kod_pocztowy']."'name='kod_poczt'>".
    "</td><td><input type='text' value='".$row['Telefon']."'name='tele'>".
    "</td><td><input type='text' value='".$row['NIP']."'name='niip'>".
    "</td></tr>";
}
echo $string."<input type='submit' name='submit'value='Submit'>";
?>

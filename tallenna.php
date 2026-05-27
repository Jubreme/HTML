<?php
$nimi = $_POST['Nimi'] ?? ''; // muuttuja määriteään, jotta saadaan tiedot txt tiedostoon
$email = $_POST['Sähköposti'] ?? '';
$aihe = $_POST['Aihe'] ?? '';
$viesti = $_POST['Viesti'] ?? '';
$sisalto = "Nimi: $nimi\n";
$sisalto .= "Sähköposti: $email\n";
$sisalto .= "Aihe: $aihe\n";
$sisalto .= "Viesti:\n$viesti\n"; // Lisää Viesti: ja sen alle itse viestin sisällön
$tiedoston_nimi = "viesti.txt"; // Määrittää ladattavan tiedoston nimeksi viesti.txt
header("Content-Type: text/plain"); //sisältö on pelkkää tekstiä, ei HTML:ää
header("Content-Disposition: attachment; filename=\"$tiedoston_nimi\""); //Pakottaa selaimen lataamaan tiedoston.

echo $sisalto; //Tulostaa tekstin
exit;
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viestin lataus</title>
</head>
<body>
</body>
</html>

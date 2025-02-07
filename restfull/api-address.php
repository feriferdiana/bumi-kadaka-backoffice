<?php

// -6.904819977954282, 107.61689394849716
// -6.904975907609617, 107.61321721422924

$latitude = "-6.904819977954282";
$longitude = "3";

$urlMaps = "https://nominatim.openstreetmap.org/reverse?format=json&lat=$latitude&lon=$longitude";
$optionsMaps = [
    'http' => [
        'header' => "User-Agent: MyApp/1.0\r\n"
    ]
];
$contextMaps = stream_context_create($optionsMaps);
$responseMaps = file_get_contents($urlMaps, false, $contextMaps);

$dataLokasi = json_decode($responseMaps, true);
print_r($dataLokasi);

echo "<br>";
echo "<br>";
echo $dataLokasi['display_name'] ?? "-";
echo "<br>";
echo $dataLokasi['address']['village'] ?? "-";
echo "<br>";
echo $dataLokasi['address']['subdistrict'] ?? "-";
echo "<br>";
echo $dataLokasi['address']['city'] ?? "-";
echo "<br>";
echo $dataLokasi['address']['state'] ?? "-";
echo "<br>";
echo $dataLokasi['address']['postcode'] ?? "-";    



?>

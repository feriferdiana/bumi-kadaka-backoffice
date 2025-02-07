<?php
    include "../action/con/connection.php";
    include "../action/visit_action.php";

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");

    $rawData = file_get_contents("php://input");

    $data = json_decode($rawData, true);

    if (json_last_error() === JSON_ERROR_NONE) {

        // request
        $latitude = $data['latitude'];
        $longitude = $data['longitude'];

        // variable
        $address;
        $village;
        $subdistrict;
        $city;
        $state;
        $postcode;

        $urlMaps = "https://nominatim.openstreetmap.org/reverse?format=json&lat=$latitude&lon=$longitude";
        $optionsMaps = [
            'http' => [
                'header' => "User-Agent: MyApp/1.0\r\n"
            ]
        ];
        $contextMaps = stream_context_create($optionsMaps);
        $responseMaps = file_get_contents($urlMaps, false, $contextMaps);

        $dataLokasi = json_decode($responseMaps, true);
        //print_r($dataLokasi);
        
        $address = $dataLokasi['display_name'] ?? "-";
        $village = $dataLokasi['address']['village'] ?? "-";
        $subdistrict = $dataLokasi['address']['subdistrict'] ?? "-";
        $city = $dataLokasi['address']['city'] ?? "-";
        $state = $dataLokasi['address']['state'] ?? "-";
        $postcode = $dataLokasi['address']['postcode'] ?? "-";   

        $findDateNow = findSameDay($latitude, $longitude, $village, $subdistrict, $city, $state, $postcode);
        if($findDateNow == null){
            insert($latitude, $longitude, $address, $village, $subdistrict, $city, $state, $postcode); 
        }
        
        // Respon
        echo json_encode([
            'code' => '200',
            'status' => 'success',
            'message' => 'Data received successfully',
            'data' => [
                'latitude' => $latitude,
                'longitude' => $longitude,
                'alamat' => $address,
                'village' => $village,
                'subdistrict' => $subdistrict,
                'city' => $city,
                'state' => $state,
                'postcode' => $postcode
            ]
        ]);
    } else {
        // Jika data JSON tidak valid
        echo json_encode([
            'code' => '500',
            'status' => 'error',
            'message' => 'Invalid JSON payload',
        ]);
    }
?>

<?php

function getKey(){
    return ["1234", "secret", "abc"];
}

function isValid($input){
    $apiKey = $input["api_key"];
    if (in_array($apikey, getKey())){
        return true;
    } else {
        return false;
    }
}
    function jsonOut ($status, $message, $data) {
        $respon = ["status" => $status, "message" => $message, "data" => $data];

        header("Content-type: application/json");
        echo json_encode($respon);
    }

    function getFilm(){
        $film = [
            ["title" => "AADC1", "konten" => "Film Ada Apa Dengan Cinta ke-1"],
            ["title" => "AADC2", "konten" => "Film Ada Apa Dengan Cinta ke-2"],
            ["title" => "AADC3", "konten" => "Film Ada Apa Dengan Cinta ke-3"],
        ];
        return $film;    
        }

        if (isValid($_GET)){
            jsonOut("berhasil", "apikey valid", getFilm());

        } else {
            jsonOut("gagal", "apikey not valid!!!", null);
}

?>
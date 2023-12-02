<?php


namespace App\Http\Service;


use GuzzleHttp\Client;

class EndPoints
{
public static function getCandidat ($id_candidat){
    $options=[
    ];
    $client = new Client(['headers' => $options]);
    $res = $client->request('GET', env("URL_ENDPOINT").'/candidats',
        ['query' => [ "id"=> $id_candidat,]]);
    return json_decode($res->getBody(),true);
}
}

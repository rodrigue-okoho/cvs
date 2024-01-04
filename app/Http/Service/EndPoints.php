<?php


namespace App\Http\Service;


use GuzzleHttp\Client;

class EndPoints
{
public static function getCandidat ($id_candidat){
    $options=[
    ];
    $client = new Client(['headers' => $options]);
    $res = $client->request('GET', env("URL_ENDPOINT").'/candidats/profile/'.$id_candidat);
    return json_decode($res->getBody(),true);
}
    public static function savePhoto ($data){
        $options=[
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('POST', env("URL_ENDPOINT").'/candidats');
        return json_decode($res->getBody(),true);
    }
}

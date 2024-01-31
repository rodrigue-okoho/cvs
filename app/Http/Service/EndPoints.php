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
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            'body' => $data,
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->post(env("URL_ENDPOINT").'/candidats', $options);
        //$res = $client->post('POST', env("URL_ENDPOINT").'/candidats');
        return json_decode($res->getBody(),true);
    }
    public static function savePhotoEmployer ($data){
        $options=[
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            'body' => $data,
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->post(env("URL_ENDPOINT").'/recruteurs', $options);
        return json_decode($res->getBody(),true);
    }
}

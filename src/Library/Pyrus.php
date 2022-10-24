<?php

namespace Pyrus\Library;

use GuzzleHttp\Client;

class Pyrus
{
    private const API_URL = "https://api.pyrus.com/v4/";

    private array $headers;

    public function __construct(private Client $http){}

    public function setHeaders(string $bot_login, string $bot_secret): void
    {
        $access_token = $this->getAccessToken($bot_login, $bot_secret);

        $this->headers = [
            'Authorization' => 'Bearer '.$access_token,
            'Content-Type' => 'application/json;charset=UTF-8'
        ];
    }

    private function getAccessToken(string $bot_login, string $bot_secret)
    {
        $url = self::API_URL."auth";

        $response =  $this->http->request('POST', $url, [
            'json' => [
                'login' => $bot_login,
                'security_key' => $bot_secret
            ]
        ])->getBody();

        return json_decode($response)->access_token;
    }

    public function get(string $path, $return_array = true)
    {
        $result = $this->http->request('GET', self::API_URL.$path, [
            'headers' => $this->headers
        ])->getBody();

        return $return_array === true ? json_decode($result, true) : $result;
    }

    public function post($path, $data, $return_array = true)
    {
        $result = $this->http->request('POST', self::API_URL.$path, [
            'headers' => $this->headers,
            'json' => $data
        ])->getBody();

        return $return_array === true ? json_decode($result, true) : $result;
    }

    public function postFile($api_path, $file_path)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::API_URL.$api_path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ['file_contents'=> curl_file_create($file_path)]);

        $headers = [];
        $headers[] = 'Content-type: multipart/form-data';
        $headers[] = 'Authorization: '.$this->headers['Authorization'];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true)['guid'];

    }

    public function __get(string $name)
    {
        return $this->$name;
    }
}
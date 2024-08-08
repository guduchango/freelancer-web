<?php
namespace App\Services;

use GuzzleHttp\Client;

class GeoLocationService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getGeoLocation($ip)
    {
        try {
            $response = $this->client->get("http://ip-api.com/json/{$ip}");
            $data = json_decode($response->getBody(), true);
            return $data;
        } catch (\Exception $e) {
            return null;
        }
    }
}


?>

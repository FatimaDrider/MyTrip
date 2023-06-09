<?php
namespace  App\Services;

use GuzzleHttp\Client;
class  YelpService{

    private  $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.yelp.com/v3/',
            'headers' => [
                'Authorization' => 'Bearer ' . 'nOBkfCcKetbXC6PcYtM6vJBzgHgJG2GS-AB6elqaNMKhtu7yUq_-G6aJgBNL2rTwlJ_-RzC2GalvzpP217kTgde9CK8mcXvUZ1TGnmCzTpsMJa4zvWkQujxrIdYZZHYx'
            ]

        ]);

    }
    public  function search($term, $location,$limit,$startDate,$endDate){

        $response =$this->client->get('businesses/search',[
            "query" => [
                'term' => $term,
                'location' => $location,
                'limit' => $limit,
                'start_date' => $startDate,
                'end_date' => $endDate,
            ]

        ]);
        return json_decode($response->getBody()->getContents());
    }

}

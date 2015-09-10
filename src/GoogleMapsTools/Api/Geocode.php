<?php
namespace GoogleMapsTools\Api;

use GoogleMapsTools\Api\RemoteCall;
use GoogleMapsTools\Point;

class Geocode extends RemoteCall
{
    protected $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function execute()
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/';

        $params = array();
        $params['address'] = $this->address;

        parent::__execute($url, $params);
    }

    public function getFirstPoint()
    {
        $location = $this->result['results'][0]['geometry']['location'];
        return new Point($location['lat'], $location['lng']);
    }
}

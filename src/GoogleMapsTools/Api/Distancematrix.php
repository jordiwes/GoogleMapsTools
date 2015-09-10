<?php
namespace GoogleMapsTools\Api;

use GoogleMapsTools\Api\RemoteCall;
use GoogleMapsTools\Point;

class Distancematrix extends RemoteCall
{
    protected $start;
    protected $end;

    public function __construct(Point $start, Point $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function execute()
    {
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/';

        $params = array();
        $params['units'] = 'metric';
        $params['mode'] = 'driving';
        $params['origins'] = $this->start->getLatitude() . ',' . $this->start->getLongitude();
        $params['destinations'] = $this->end->getLatitude() . ',' . $this->end->getLongitude();

        parent::__execute($url, $params);
    }

    public function getFirstRouteDistance()
    {
        return $this->result['rows'][0]['elements'][0]['distance']['value'];
    }
}

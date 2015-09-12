<?php
namespace GoogleMapsTools\Test\Api;

require_once ('GoogleMapsTools/Test/autoload.php');
require_once ('PHPUnit/Framework/TestCase.php');
use \PHPUnit_Framework_TestCase as PHPUnit_Framework_TestCase;
use GoogleMapsTools\Api\Geocode;

class GeocodeTest extends PHPUnit_Framework_TestCase
{
    public function testValidAddressTest()
    {
        $latitude = '42.6930337';
        $longitude = '23.3353448';

        $geocode = new Geocode('Car Osvoboditel 13, Sofia, Bulgaria');
        $geocode->execute();
        $point = $geocode->getFirstPoint();

        $this->assertEquals($latitude, $point->getLatitude());
        $this->assertEquals($longitude, $point->getLongitude());
    }

    public function testAnotherValidAddressTest()
    {
        $latitude = '42.6968461';
        $longitude = '23.3358899';

        $geocode = new Geocode('Ianko Sakazov 1, Sofia, Bulgaria');
        $geocode->execute();
        $point = $geocode->getFirstPoint();

        $this->assertEquals($latitude, $point->getLatitude());
        $this->assertEquals($longitude, $point->getLongitude());
    }
}

<?php
namespace GoogleMapsTools\Test;

require_once ('GoogleMapsTools/Test/autoload.php');
require_once ('PHPUnit/Framework/TestSuite.php');
use \PHPUnit_Framework_TestSuite as PHPUnit_Framework_TestSuite;

class AllTests extends PHPUnit_Framework_TestSuite
{
    public function __construct()
    {
        $this->setName('GoogleMapsTools/Test/AllTests');

        $this->addTestSuite('GoogleMapsTools\Test\Api\GeocodeTest');
        $this->addTestSuite('GoogleMapsTools\Test\Api\DistancematrixTest');
    }

    public static function suite()
    {
        return new self();
    }
}

<?php
namespace GoogleMapsTools\Test\Api;

require_once ('GoogleMapsTools/Test/autoload.php');
require_once ('PHPUnit/Framework/TestCase.php');
use \PHPUnit_Framework_TestCase as PHPUnit_Framework_TestCase;
use GoogleMapsTools\Api\Distancematrix;
use GoogleMapsTools\Point;

class DistancematrixTest extends PHPUnit_Framework_TestCase
{
    public function testConstructorInvalidStart()
    {
        try {
            $dmatrix = new Distancematrix('string', new Point('42.6968461', '23.3358899'));
        } catch (\Exception $e) {
            $this->assertContains('must be an instance of GoogleMapsTools\Point', $e->getMessage());
        }
    }

    public function testConstructorInvalidEnd()
    {
        try {
            $dmatrix = new Distancematrix(new Point('42.6968461', '23.3358899'), 'string');
        } catch (\Exception $e) {
            $this->assertContains('must be an instance of GoogleMapsTools\Point', $e->getMessage());
        }
    }

    public function testConstructorInvalidConfigType()
    {
        try {
            $dmatrix = new Distancematrix(new Point('42.6930337', '23.3353448'), new Point('42.6968461', '23.3358899'), 'string');
        } catch (\Exception $e) {
            $this->assertContains('must be of the type array', $e->getMessage());
        }
    }
}

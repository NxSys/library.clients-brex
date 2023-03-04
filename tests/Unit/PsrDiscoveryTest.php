<?php
use NxSys\Library\Clients\Brex as BrexSdk;

class PsrDiscoveryTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;


    // tests
    public function testFindableClient()
    {
		$httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
		$this->assertInstanceOf(\Psr\Http\Client\ClientInterface::class, $httpClient);
		codecept_debug($httpClient);
    }
}
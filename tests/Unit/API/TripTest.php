<?php
namespace API;
use Codeception\Attribute\Group;
use Http\Message\Authentication\Bearer;
use NxSys\Library\Clients\Brex as BrexSdk;
use NxSys\Library\Clients\Brex\API;
use NxSys\Library\Clients\Brex\SDKHost;

class TripTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

	protected SDKHost $oSDK;

    protected function _before()
    {
		$this->BREX_TOKEN = getenv('BREX_TOKEN');

		$this->oHostPlugin =
			new \Http\Client\Common\Plugin\AddHostPlugin(
				new \Nyholm\Psr7\Uri('https://platform.staging.brexapps.com'),
				['replace' => true]
		);
		$oSDK=new BrexSdk\SDKHost;
		$oSDK->addHttpPlugin($this->oHostPlugin);
		$oSDK->setAuthKey($this->BREX_TOKEN);
		$this->oSDK=$oSDK;
	}

    protected function _after()
    {
		unset($this->oSDK);
    }

	public function testTravelClientSetup()
	{
		$this->oSDK->setupTravelClient();
		$this->assertInstanceOf(API\Travel\Client::class, $this->oSDK->getTravelClient());
	}

	public function testTripListingsResultType()
	{
		// @var API\Travel\Client
		$oTravelSdk=$this->oSDK->setupTravelClient();
		$oTripList=$oTravelSdk->listTrips();
		$this->assertInstanceOf(API\Travel\Model\PageTrip::class, $oTripList);
		$this->assertGreaterThanOrEqual(0, count($oTripList));
	}
}
<?php


namespace Tests\Unit\Writers;

use Tests\Support\UnitTester;
use NxSys\Library\Clients\Brex as BrexSdk;

class BasicTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
		$this->BREX_TOKEN = getenv('BREX_TOKEN');

		$this->oHostPlugin =
			new \Http\Client\Common\Plugin\AddHostPlugin(
				new \Nyholm\Psr7\Uri(getenv('BREX_ENDPOINT')),
				['replace' => true]
		);

    }

    // tests
    public function testCreateUser()
    {
		$oSdkHost=new BrexSdk\SDKHost;
		$oSdkHost->addHttpPlugin($this->oHostPlugin);

		//Let's get company details to start
		/** @var BrexSdk\API\Team\Client $oTeamClient; */
		$oTeamClient=$oSdkHost->setAuthKey($this->BREX_TOKEN)
				->setupTeamClient();


		$oNewUser=new BrexSdk\API\Team\Model\CreateUserRequest;
		$oNewUser->setFirstName('Test');
		$oNewUser->setLastName('User');
		$oNewUser->setEmail('TUser.codeception@acme.example');

		//@throws on failure
		$oCreatedUser=$oTeamClient->createUser($oNewUser);
		$this->assertInstanceOf(BrexSdk\API\Team\Model\UserResponse::class, $oCreatedUser);
		$this->assertNotNull( $oCreatedUser->getId());
		codecept_debug($oCreatedUser->getId());
    }
}

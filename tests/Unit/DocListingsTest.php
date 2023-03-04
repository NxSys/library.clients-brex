<?php
namespace Tests\Unit;

use Codeception\Attribute\Skip;

use NxSys\Library\Clients\Brex as BrexSdk;
use Http\Client\Common\Plugin as HttpPlugin;

use Monolog;
use Nyholm\Psr7\Uri;



class DocListingsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
		$this->BREX_TOKEN = getenv('BREX_TOKEN');

		$this->oHostPlugin =
			new \Http\Client\Common\Plugin\AddHostPlugin(
				new \Nyholm\Psr7\Uri(getenv('BREX_ENDPOINT')),
				['replace' => true]
		);

    }

    protected function _after()
    {
    }

    // tests
    public function testReadMeExample()
    {
		$oSDK=new BrexSdk\SDKHost;
		$oSDK->addHttpPlugin($this->oHostPlugin);

		//Let's get company details to start
		$oTeamClient=$oSDK->setAuthKey($this->BREX_TOKEN) #consider using a token vault
			->setupTeamClient();

		/** @var BrexSdk\API\Team\Client */
		$oTeamClient;

		//... OR
		//if you will be doing work across the API, use the follow convenience method
		$oTeamClient=$oSDK->setupAllClients()->getTeamClient();
		//etc...

		/** @var BrexSdk\API\Team\Model\CompanyResponse */
		$aCompanyDetails=$oTeamClient->getCompany();

		$sCompanyName=$aCompanyDetails->getLegalName();
		// ACME Corp, Inc.

		$this->assertStringContainsString('Nxs Systems Staging 01', $sCompanyName);

    }

	// #[Skip('this one is flaky')]
	public function testGettingStartedListing()
	{
		$oSDK=new BrexSdk\SDKHost;
		$oSDK->addHttpPlugin($this->oHostPlugin);


		//Let's get company details to start
		$oTeamClient=$oSDK->setAuthKey($this->BREX_TOKEN) #consider using a token vault
				->setupTeamClient();

		/** @var BrexSdk\API\Team\Client */
		$oTeamClient;

		//... OR
		//if you will be doing work across the API, use the follow convenience method
		$oTeamClient=$oSDK->setupAllClients()->getTeamClient();
		//etc...

		/** @var BrexSdk\API\Team\Model\CompanyResponse */
		$aCompanyDetails=$oTeamClient->getCompany();

		$sCompanyName=$aCompanyDetails->getLegalName();
		// ACME Corp, Inc.
		codecept_debug($sCompanyName);
		$this->assertStringContainsString('Nxs Systems Staging 01', $sCompanyName);
	}

	public function testUsecase_GettingTransactions()
	{
		$oSDK=new BrexSdk\SDKHost;
		$oSDK->addHttpPlugin($this->oHostPlugin);
		$oTransactionsClient=$oSDK->setAuthKey($this->BREX_TOKEN)->setupTransactionsClient();

		//---

		//this returns a page <https://developer.brex.com/docs/pagination>
		/** @var NxSys\Library\Clients\Brex\API\Transactions\Client $oTransactionsClient */
		$oPagedAccounts = $oTransactionsClient->listAccounts();
		$oAccounts=$oPagedAccounts->getItems(); //only first 100

		foreach ($oAccounts as $oAccount)
		{
			$oTransactions = $oTransactionsClient->listCashTransactions($oAccount->getId())->getItems();
			/** @var NxSys\Library\Clients\Brex\API\Transactions\Model\CashTransaction[] $oTransactions */
			codecept_debug($oTransactions);
		}
		//some more asserts
	}

	public function testUsingApi_GettingData()
	{
		//Let's get company details to start.
		/** @var BrexSdk\API\Team\Client $oTeamClient; */
		$oSdkHost=new BrexSdk\SDKHost;
		$oSdkHost->addHttpPlugin($this->oHostPlugin);

		$oTeamClient=$oSdkHost->setAuthKey($this->BREX_TOKEN)
				->setupTeamClient();


		/** @var BrexSdk\API\Team\Model\CompanyResponse */
		$aCompanyDetails=$oTeamClient->getCompany();

		$sCompanyName=$aCompanyDetails->getLegalName();
		codecept_debug($sCompanyName);
		$this->assertStringContainsString('Nxs Systems Staging 01', $sCompanyName);
	}

	public function testUsingApi_SettingLogging()
	{
		$this->markTestIncomplete('Monolog TBD');

		$oSdkHost=new BrexSdk\SDKHost;
		$oSdkHost->setAuthKey($this->BREX_TOKEN);

		$logger=new Monolog\Logger('brex-request');
		$logger->pushHandler(
				new Monolog\Handler\StreamHandler('api-trace.log', Monolog\Level::Debug)
		);

		$oSdkHost->addHttpPlugin(
				new HttpPlugin\LoggerPlugin($logger,
				new \Http\Message\Formatter\FullHttpMessageFormatter)
		);
	}

	public function testUsingApi_Stage()
	{
		$oSdkHost=new BrexSdk\SDKHost;
		$oSdkHost->setAuthKey($this->BREX_TOKEN);

		$oSdkHost->addHttpPlugin(
				new HttpPlugin\AddHostPlugin(new Uri('https://platform.staging.brexapps.com'),
				['replace' => true])
		);
	}
}
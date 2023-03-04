<?php


namespace Tests\Unit\Writers;

use NxSys\Library\Clients\Brex\API\Transactions\Model\CashAccount;
use NxSys\Library\Clients\Brex\API\Transactions\Model\PageCashAccount;
use NxSys\Library\Clients\Brex\SDKHost;
use NxSys\Library\Clients\Brex as BrexSDK;
use Tests\Support\UnitTester;

class TransactionsTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
		$BREX_TOKEN = getenv('BREX_TOKEN');

		$oHostPlugin =
			new \Http\Client\Common\Plugin\AddHostPlugin(
				new \Nyholm\Psr7\Uri(getenv('BREX_ENDPOINT')),
				['replace' => true]
		);
		$oSdkHost=new SDKHost;
		$oSdkHost->setAuthKey($BREX_TOKEN);
		$oSdkHost->addHttpPlugin($oHostPlugin);
		$oSdkHost->setupTransactionsClient();
		$this->oSdkHost=$oSdkHost;
    }

    // tests
    public function testHaveAtLeastOneAccount()
    {

		$oTransactionsClient = $this->oSdkHost->getTransactionsClient();

		//read accounts
		$oPagedAccounts = $oTransactionsClient->listAccounts();
		codecept_debug($oPagedAccounts);
		$oAccounts = $oPagedAccounts->getItems(); //only first 100
		codecept_debug($oAccounts);
		$this->assertGreaterThanOrEqual(1, count($oPagedAccounts->getItems()));
		$this->assertContainsOnlyInstancesOf(PageCashAccount::class, $oPagedAccounts);
		$this->assertGreaterThanOrEqual(1, count($oAccounts));
		$this->assertContainsOnlyInstancesOf(CashAccount::class, $oAccounts);
    }
}

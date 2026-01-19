<?php
namespace API;
use Codeception\Attribute\Group;
use Http\Message\Authentication\Bearer;
use NxSys\Library\Clients\Brex as BrexSdk;
use NxSys\Library\Clients\Brex\API;

class BasicTest extends \Codeception\Test\Unit
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
				new \Nyholm\Psr7\Uri('https://platform.staging.brexapps.com'),
				['replace' => true]
		);
		$oSDK=new BrexSdk\SDKHost;
		$oSDK->addHttpPlugin($this->oHostPlugin);

		$oSDK->setAuthKey($this->BREX_TOKEN); #consider using a token vault
		$this->oSDK=$oSDK;


	}

    protected function _after()
    {
		unset($this->oSDK);
    }

    // tests
    public function testApiServerConnection()
    {
		//'https://platform.brexapis.com' live
		$httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
		$this->assertInstanceOf(\Psr\Http\Client\ClientInterface::class, $httpClient);

		$uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()
			->createUri('https://platform.staging.brexapps.com/v2/users/me');

		$request = $httpClient->createRequest('GET', $uri);
		$response = $httpClient->sendRequest($request);

		$statusCode = $response->getStatusCode();

		$this->assertEquals(401, $statusCode, 'Server should not authenticate this, but should reply');
    }

    public function testApiAuthorization()
    {
		$httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
		$this->assertInstanceOf(\Psr\Http\Client\ClientInterface::class, $httpClient);

		$uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()
			->createUri('https://platform.staging.brexapps.com/v2/users/me');

		$request = $httpClient->createRequest('GET', $uri);
		$request=(new Bearer($this->BREX_TOKEN))->authenticate($request);
		$response = $httpClient->sendRequest($request);

		$statusCode = $response->getStatusCode();
		$this->assertEquals(200, $statusCode);
    }

    public function testApiKeyRequired()
    {
		$this->markTestIncomplete();

    }

	#[Group('writers', 'important')] // add groups in a single attribute
    public function testApiMultiClientSetup()
    {

		$this->oSDK->setupAllClients();
		$this->assertInstanceOf(BrexSdk\API\Team\Client::class,	$this->oSDK->getTeamClient());
		$this->assertInstanceOf(BrexSdk\API\Budgets\Client::class,	$this->oSDK->getBudgetsClient());
		$this->assertInstanceOf(BrexSdk\API\Expenses\Client::class,	$this->oSDK->getExpensesClient());
		$this->assertInstanceOf(BrexSdk\API\Payments\Client::class,	$this->oSDK->getPaymentsClient());
		$this->assertInstanceOf(BrexSdk\API\Transactions\Client::class,	$this->oSDK->getTransactionsClient());
		$this->assertInstanceOf(BrexSdk\API\Webhooks\Client::class,	$this->oSDK->getWebhooksClient());
		$this->assertInstanceOf(BrexSdk\API\Travel\Client::class,	$this->oSDK->getTravelClient());
		$this->assertInstanceOf(BrexSdk\API\Accounting\Client::class,	$this->oSDK->getTravelClient());
		$this->assertInstanceOf(BrexSdk\API\Fields\Client::class,	$this->oSDK->getTravelClient());
		$this->assertInstanceOf(BrexSdk\API\Onboarding\Client::class,	$this->oSDK->getTravelClient());
    }

    public function testApiTeamClientSetup()
	{

		$this->oSDK->setupTeamClient();
		$this->assertInstanceOf(BrexSdk\API\Team\Client::class, $this->oSDK->getTeamClient());
	}

    public function testApiBudgetsClientSetup()
	{

		$this->oSDK->setupBudgetsClient();
		$this->assertInstanceOf(BrexSdk\API\Budgets\Client::class, $this->oSDK->getBudgetsClient());
	}

    public function testApiExpensesClientSetup()
	{

		$this->oSDK->setupExpensesClient();
		$this->assertInstanceOf(BrexSdk\API\Expenses\Client::class, $this->oSDK->getExpensesClient());
	}

    public function testApiPaymentsClientSetup()
	{
		$this->oSDK->setupPaymentsClient();
		$this->assertInstanceOf(BrexSdk\API\Payments\Client::class,	$this->oSDK->getPaymentsClient());
	}

    public function testApiTransactionsClientSetup()
	{
		$this->oSDK->setupTransactionsClient();
		$this->assertInstanceOf(BrexSdk\API\Transactions\Client::class,	$this->oSDK->getTransactionsClient());
	}

    public function testApiWebhooksClientSetup()
	{
		$this->oSDK->setupWebhooksClient();
		$this->assertInstanceOf(BrexSdk\API\Webhooks\Client::class,	$this->oSDK->getWebhooksClient());
	}

	public function testApiTravelClientSetup()
	{
		$this->oSDK->setupTravelClient();
		$this->assertInstanceOf(BrexSdk\API\Travel\Client::class, $this->oSDK->getTravelClient());
	}

	public function testApiAccountingClientSetup()
	{
		$this->oSDK->setupAccountingClient();
		$this->assertInstanceOf(BrexSdk\API\Accounting\Client::class, $this->oSDK->getAccountingClient());
	}

	public function testApiFieldsClientSetup()
	{
		$this->oSDK->setupFieldsClient();
		$this->assertInstanceOf(BrexSdk\API\Fields\Client::class, $this->oSDK->getFieldsClient());
	}

	public function testApiOnboardingClientSetup()
	{
		$this->oSDK->setupOnboardingClient();
		$this->assertInstanceOf(BrexSdk\API\Onboarding\Client::class, $this->oSDK->getOnboardingClient());
	}


}
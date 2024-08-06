<?php
namespace NxSys\Library\Clients\Brex;

use NxSys\Library\Clients\Brex\API;

use Http\Discovery\HttpClientDiscovery;

use Http\Client\Common\Plugin as HttpPlugin;

use Http\Message\Authentication\Bearer;

use Psr\Http\Client\ClientInterface as PsrHttpClient;

class SDKHost
{
	public ?PsrHttpClient $oHttpClient=null;
	public array $aApiClients = [];

	/**
	 * Array of HttpPlugins
	 * @var HttpPlugin[]
	 */
	public array $aHttpPlugins=[];

	private $oAuthPlugin;

	public function setHttpClient(?PsrHttpClient $oPsrHttpClient): self
	{
		$this->oHttpClient = $oPsrHttpClient;
		return $this;
	}

	public function getHttpClient(): ?PsrHttpClient
	{
		return $this->oHttpClient;
	}


	/**
	 * Sets up all clients in a one-shot
	 * @param mixed $httpClient
	 * @param array $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return \NxSys\Library\Clients\Brex\SDKHost
	 */
	public function setupAllClients($httpClient = null, array $additionalPlugins = [],
		array $additionalNormalizers = []): self
	{
		$this->setupBudgetsClient($httpClient, $additionalPlugins, $additionalNormalizers);
		$this->setupExpensesClient($httpClient, $additionalPlugins, $additionalNormalizers);
		$this->setupPaymentsClient($httpClient, $additionalPlugins, $additionalNormalizers);
		$this->setupTeamClient($httpClient, $additionalPlugins, $additionalNormalizers);
		$this->setupTransactionsClient($httpClient, $additionalPlugins, $additionalNormalizers);
		$this->setupWebhooksClient($httpClient, $additionalPlugins, $additionalNormalizers);
		$this->setupTravelClient($httpClient, $additionalPlugins, $additionalNormalizers);

		return $this;
	}

	/**
	 *  Sets Up the Team client
	 *
	 * @param PsrHttpClient|null $httpClient
	 * @param HttpPlugin[] $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return API\Team\Client
	 */
	public function setupTeamClient($httpClient = null, array $additionalPlugins = [],
		array $additionalNormalizers = []): API\Team\Client
	{
		if(!$httpClient)
		{
			// might still be null tho...
			$httpClient = $this->getHttpClient();
		}
		$additionalPlugins = array_merge(
			$additionalPlugins,
			$this->getHttpPlugins(),
			[$this->getAuthPlugin()]
		);
		$this->aApiClients['team'] = API\Team\Client::create($httpClient, $additionalPlugins, $additionalNormalizers);
		return $this->aApiClients['team'];
	}

	public function getTeamClient(): API\Team\Client
	{
		return $this->aApiClients['team']??throw new Exception\SDKRuntimeException("Team client has not been setup yet.");
	}

	/**
	 *  Sets Up the Budgets client
	 *
	 * @param PsrHttpClient|null $httpClient
	 * @param HttpPlugin[] $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return API\Budgets\Client
	 */
	public function setupBudgetsClient($httpClient = null, array $additionalPlugins = [],
		array $additionalNormalizers = []): API\Budgets\Client
	{
		if(!$httpClient)
		{
			$httpClient = $this->getHttpClient();
		}
		$additionalPlugins = array_merge(
			$additionalPlugins,
			$this->getHttpPlugins(),
			[$this->getAuthPlugin()]
		);
		$this->aApiClients['budgets'] = API\Budgets\Client::create($httpClient, $additionalPlugins, $additionalNormalizers);
		return $this->aApiClients['budgets'];
	}
	public function getBudgetsClient(): API\Budgets\Client
	{
		return $this->aApiClients['budgets']??throw new Exception\SDKRuntimeException("Budget client has not been setup yet.");
	}

	/**
	 *  Sets Up the Expenses client
	 *
	 * @param PsrHttpClient|null $httpClient
	 * @param HttpPlugin[] $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return API\Expenses\Client
	 */
	public function setupExpensesClient($httpClient = null, array $additionalPlugins = [],
		array $additionalNormalizers = []): API\Expenses\Client
	{
		if(!$httpClient)
		{
			$httpClient = $this->getHttpClient();
		}
		$additionalPlugins = array_merge(
			$additionalPlugins,
			$this->getHttpPlugins(),
			[$this->getAuthPlugin()]
		);
		$this->aApiClients['expenses'] = API\Expenses\Client::create($httpClient, $additionalPlugins, $additionalNormalizers);
		return $this->aApiClients['expenses'];
	}

	public function getExpensesClient(): API\Expenses\Client
	{
		return $this->aApiClients['expenses']??throw new Exception\SDKRuntimeException("Expenses client has not been setup yet.");
	}

	/**
	 *  Sets Up the Payments client
	 *
	 * @param PsrHttpClient|null $httpClient
	 * @param HttpPlugin[] $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return API\Payments\Client
	 */
	public function setupPaymentsClient($httpClient = null, array $additionalPlugins = [],
		array $additionalNormalizers = []): API\Payments\Client
	{
		if(!$httpClient)
		{
			$httpClient = $this->getHttpClient();
		}
		$additionalPlugins = array_merge(
			$additionalPlugins,
			$this->getHttpPlugins(),
			[$this->getAuthPlugin()]
		);
		$this->aApiClients['payments'] = API\Payments\Client::create($httpClient, $additionalPlugins, $additionalNormalizers);
		return $this->aApiClients['payments'];
	}

	public function getPaymentsClient(): API\Payments\Client
	{
		return $this->aApiClients['payments']??throw new Exception\SDKRuntimeException("Payment client has not been setup yet.");
		;
	}

	/**
	 *  Sets Up the Transactions client
	 *
	 * @param PsrHttpClient|null $httpClient
	 * @param HttpPlugin[] $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return API\Transactions\Client
	 */
	public function setupTransactionsClient($httpClient = null, array $additionalPlugins = [],
		array $additionalNormalizers = []): API\Transactions\Client
	{
		if(!$httpClient)
		{
			$httpClient = $this->getHttpClient();
		}
		$additionalPlugins = array_merge(
			$additionalPlugins,
			$this->getHttpPlugins(),
			[$this->getAuthPlugin()]
		);
		$this->aApiClients['transactions']
			 = API\Transactions\Client::create($httpClient, $additionalPlugins, $additionalNormalizers);
		return $this->aApiClients['transactions'];
	}

	public function getTransactionsClient(): API\Transactions\Client
	{
		return $this->aApiClients['transactions']??throw new Exception\SDKRuntimeException("Transactions Client has not been setup yet.");
	}

	/**
	 *  Sets Up the Webhooks client
	 *
	 * @param PsrHttpClient|null $httpClient
	 * @param HttpPlugin[] $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return API\Webhooks\Client
	 */
	public function setupWebhooksClient($httpClient = null, array $additionalPlugins = [],
		array $additionalNormalizers = []): API\Webhooks\Client
	{
		if(!$httpClient)
		{
			$httpClient = $this->getHttpClient();
		}
		$additionalPlugins = array_merge(
			$additionalPlugins,
			$this->getHttpPlugins(),
			[$this->getAuthPlugin()]
		);
		$this->aApiClients['webhooks']
			 = API\Webhooks\Client::create($httpClient, $additionalPlugins, $additionalNormalizers);
		return $this->aApiClients['webhooks'];
	}

	public function getWebhooksClient(): API\Webhooks\Client
	{
		return $this->aApiClients['webhooks']??throw new Exception\SDKRuntimeException("Webhooks client has not been setup yet.");
	}

	/**
	 *  Sets up the Travel client
	 *
	 * @param PsrHttpClient|null $httpClient
	 * @param HttpPlugin[] $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return API\Travel\Client
	 */
	public function setupTravelClient($httpClient = null, array $additionalPlugins = [],
		array $additionalNormalizers = []): API\Travel\Client
	{
		if(!$httpClient)
		{
			$httpClient = $this->getHttpClient();
		}
		$additionalPlugins = array_merge(
			$additionalPlugins,
			$this->getHttpPlugins(),
			[$this->getAuthPlugin()]
		);
		$this->aApiClients['travel']
			 = API\Travel\Client::create($httpClient, $additionalPlugins, $additionalNormalizers);
		return $this->aApiClients['travel'];
	}

	public function getTravelClient(): API\Travel\Client
	{
		return $this->aApiClients['travel']??throw new Exception\SDKRuntimeException("Travel client has not been setup yet.");
	}

	/**
	 * We intend to be one way for that token
	 */
	private function getAuthPlugin(): HttpPlugin\AuthenticationPlugin
	{
		return $this->oAuthPlugin;
	}

	/**
	 * Load your Brex token here
	 *
	 * @var string $sBearerToken
	 * @return self
	 */
	public function setAuthKey(string $sBearerToken): self
	{
		$authenticationPlugin = new HttpPlugin\AuthenticationPlugin(new Bearer($sBearerToken));
		$this->oAuthPlugin = $authenticationPlugin;
		return $this;
	}


	/**
	 * Gets HttpPlugins
	 */
	public function getHttpPlugins(): array
	{
		return $this->aHttpPlugins;
	}

	/**
	 * Adds a HttpPlugin
	 */
	public function addHttpPlugin(HttpPlugin $oHttpPlugin): self
	{
		$this->aHttpPlugins[] = $oHttpPlugin;
		return $this;
	}

	/**
	 * clears Http Plugins
	 * @return void
	 */
	public function resetHttpPlugins(): void
	{
		$this->aHttpPlugins = [];
	}
}

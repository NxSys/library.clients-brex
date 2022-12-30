<?php
namespace NxSys\Library\Clients\Brex;

use NxSys\Library\Clients\Brex\API;

use Http\Discovery\HttpClientDiscovery;

use Http\Client\Common\Plugin as HttpPlugin;

use Http\Message\Authentication\Bearer;

use Psr\Http\Client\ClientInterface as PsrHttpClient;

class SDKHost
{
	public PsrHttpClient $oHttpClient=null;
	public array $aApiClients = [];

	/**
	 * Array of HttpPlugins
	 * @var HttpPlugin[]
	 */
	public array $aHttpPlugins;

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



	public function setupAllClients($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
	{
		$this->setupTeamClient($httpClient, $additionalPlugins, $additionalNormalizers);
	}

	/**
	 *  Sets Up the Team client
	 *
	 * @param PsrHttpClient|null $httpClient
	 * @param HttpPlugin[] $additionalPlugins
	 * @param array $additionalNormalizers
	 * @return void
	 */
	public function setupTeamClient($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
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
		$this->aApiClients['team'] = API\Team\Client::create($httpClient, $additionalPlugins, $additionalNormalizers);
		return $this->aApiClients['team'];
	}

	public function getTeamClient(): API\Team\Client
	{
		return $this->aApiClients['team'];
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
		return $this->aApiClients['budgets'];
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
		return $this->aApiClients['expenses'];
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
		return $this->aApiClients['payments'];
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
		return $this->aApiClients['transactions'];
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
		return $this->aApiClients['webhooks'];
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
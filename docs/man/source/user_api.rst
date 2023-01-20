
Using the API
=============


Brex Requirements
-------------------
https://developer.brex.com/docs/authentication/
https://developer.brex.com/docs/roles_permissions_scopes/
https://developer.brex.com/docs/checklist/

+--------------------------------------------+
| Up to 1000 requests in 60 seconds.         |
+--------------------------------------------+
| Up to 1000 transfers in 24 hours.          |
+--------------------------------------------+
| Up to 100 international wires in 24 hours. |
+--------------------------------------------+
| Up to 5000 cards created in 24 hours.      |
+--------------------------------------------+

What that looks like in the sdk
https://developer.brex.com/docs/pagination/
https://developer.brex.com/docs/idempotency/


Getting Data
-------------------
.. code-block:: php

	<?php
	use NxSys\Library\Clients\Brex as BrexSdk;

	$oSdkHost=new BrexSdk\SDKHost;

	//Let's get company details to start.
	/** @var BrexSdk\API\Team\Client $oTeamClient; */
	$oTeamClient=$oSdkHost->setAuthKey('BREX TOKEN')
		->setupTeamClient();


	/** @var BrexSdk\API\Team\Model\CompanyResponse */
	$aCompanyDetails=$oTeamClient->getCompany();

	$sCompanyName=$aCompanyDetails->getLegalName();
	// ACME Corp, Inc.


Putting Data
-------------------

.. code-block:: php

	<?php
	use NxSys\Library\Clients\Brex as BrexSdk;

	$oSdkHost=new BrexSdk\SDKHost;

	//Let's get company details to start
	/** @var BrexSdk\API\Team\Client $oTeamClient; */
	$oTeamClient=$oSdkHost->setAuthKey('BREX TOKEN')
		->setupTeamClient();


	$oNewUser=new BrexSdk\API\Team\Model\CreateUserRequest;
	$oNewUser->setFirstName('Test');
	$oNewUser->setLastName('User');
	$oNewUser->setEmail('TUser@acme.example');

	//@throws on failure
	$oCreatedUser=$oTeamClient->createUser($oNewUser);




Webhooks
-------------------

Plugins
-------------------

Adding Logging

.. code-block:: php

	<?php
	use NxSys\Library\Clients\Brex as BrexSdk;
	use Http\Client\Common\Plugin as HttpPlugin;
	use Monolog;

	$oSdkHost=new BrexSdk\SDKHost;
	$oSdkHost->setAuthKey($bxtoken);

	$logger=new Monolog\Logger('brex-request');
	$logger->pushHandler(
		new Monolog\Handler\StreamHandler('api-trace.log', Monolog\Level::Debug)
	);

	$oSdkHost->addHttpPlugin(
		new HttpPlugin\LoggerPlugin($logger,
		new \Http\Message\Formatter\FullHttpMessageFormatter)
	);

Using Staging

.. note::  ``Psr\Http\Message\UriInterface``

.. code-block:: php

	<?php
	use NxSys\Library\Clients\Brex as BrexSdk;
	use Http\Client\Common\Plugin as HttpPlugin;
	use Nyholm\Psr7\Uri;

	$oSdkHost=new BrexSdk\SDKHost;
	$oSdkHost->setAuthKey($bxtoken);

	$oSdkHost->addHttpPlugin(
		new HttpPlugin\AddHostPlugin(new Uri('https://platform.staging.brexapps.com'),
		['replace' => true])
	);
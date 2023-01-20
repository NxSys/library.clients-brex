
Getting Started
===============

Installation
------------
Install `nxsys/library.client-brex <https://packagist.org/packages/nxsys/library.clients-brex>`_ with `Composer <https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos>`_.

.. code-block::

	composer require nxsys/library.client-brex

And please don't forget

.. code-block::

	<?php
	require_once 'vendor/autoload.php';

Getting a Token From Brex
-------------------------
https://developer.brex.com/docs/authentication/

PSR-7 HTTP Client
-----------------
This library allows you to keep the http client library you may already
be using in your application. It does this through `service discovery <https://docs.php-http.org/en/latest/discovery.html>`_.
If you are not using an `PSR-7 aware HTTP client <https://docs.php-http.org/en/latest/message/message-factory.html>`_ you will need to `install one <https://packagist.org/providers/psr/http-factory-implementation>`_.

We have tested this against GuzzlePHP (via curl). Install the packages below.

.. code-block::

    composer require php-http/curl-client guzzlehttp/psr7 php-http/message

.. note:: If this is confusing please read https://docs.php-http.org/en/latest/httplug/users.html and don't hesitate to `chat with us <https://onx.zulipchat.com>`_!



Calling the API
----------------

.. code-block:: php

	<?php
	#if using composer use the autoloader
	require 'vendors\autoload.php';

	use NxSys\Library\Clients\Brex as BrexSdk;

	$oSDK=new BrexSdk\SDKHost;

	//Let's get company details to start
	$oTeamClient=$oSDK->setAuthKey('BREX TOKEN') #consider using a token vault
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


Background
==========

What is Brex?
-------------
`Brex <https://www.brex.com/>`_  is a fin-tech company that offers a variety of financial products. Including bank accounts, transfers, corporate cards, vendor management & bill pay, ERP integrations, and more.

What is this?
-------------
The Brex SDK for PHP is an installable composer package that allows an application to call on the `Brex API <https://developer.brex.com/>`_ through PHP.

Why is this?
------------
The `Brex API <https://developer.brex.com/>`_ allows you to do specific, custom, and bulk actions on your Brex account. It is also of a reasonably moderate size. It actually consists of 6 (relevant) different endpoints with a variety of entities and calls supported on each endpoint. This SDK allows you to call any portion of that API in a PHP runtime environment in a structured, object oriented way, without worrying about REST particulars or being concerned with a particular HTTP implementation.

How does this work?
-------------------
This SDK marshal's access to the entire API through a single host object. We leverage code generation through `Jane PHP <https://jane.readthedocs.io/en/latest/>`_  to consume the published OpenAPI specification of Brex's API. Further we're able to use `HTTPlug <http://httplug.io/>`_ to allow our generated code to support a HTTP request client you may already be using, through auto discovery. (A default implementation of `Symfony's HTTP Client <https://symfony.com/doc/current/http_client.html#psr-18-and-psr-17>`_ is suggested and is discussed here (:ref:`autoclient`), if you are not already using one)

Selected Use Cases
------------------

Pulling the Most Recent Transactions

.. code-block:: php

	<?php
	//...
	//this returns a page <https://developer.brex.com/docs/pagination>
	/** @var \NxSys\Library\Clients\Brex\API\Transactions\Client $oTransactionsClient */
	$oPagedAccounts = $oTransactionsClient->listAccounts();
	$oAccounts=$oPagedAccounts->getItems(); //only first 100

	foreach ($oAccounts as $oAccount)
	{
		$oTransactions = $oTransactionsClient->listCashTransactions($oAccount->getId())->getItems();
		/** @var \NxSys\Library\Clients\Brex\API\Transactions\Model\CashTransaction[] $oTransactions */
		print_r($oTransactions);
	}


Adding a User

.. code-block:: php

	<?php
	//...
	$oNewUser=new \NxSys\Library\Clients\Brex\API\Team\Model\CreateUserRequest;
	$oNewUser->setFirstName('Test');
	$oNewUser->setLastName('User');
	$oNewUser->setEmail('TUser.codeception@acme.example');

	//@throws on failure
	$oCreatedUser=$oTeamClient->createUser($oNewUser);

.. Locking a Users Card

Support
---------
If there's anything on your mind, dialogue is welcome.

- Chat: https://onx.zulipchat.com
- Issues: https://github.com/NxSys/library.clients-brex/issues
- Forum: https://github.com/NxSys/library.clients-brex/discussions

Project Governance
------------------
This project is primarily maintained by, but not sponsored by, `Nexus Systems, Inc <nxs.systems>`_. Absent a 2/3 decision by the project members writ large, final decisions are made by `Nexus Systems <oss@nxs.systems>`_.
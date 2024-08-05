
Building the Project
====================

Tool requirements:

* PHP 8+
* composer
* phing
* codeception

For Docs

* Apigen
* Sphinx

Misc

* Sonar-Analyzer

We use `scoop <https://scoop.sh>`_ for simplicity. (Powershell is optional, but helpful)


.. code-block:: pwsh-session

	Set-ExecutionPolicy RemoteSigned -Scope CurrentUser # Optional: Needed to run a remote script the first time
	irm get.scoop.sh | iex
	scoop install mingit
	scoop bucket add extras
	scoop bucket add versions
	scoop install php php-xdebug composer python
	# run `php --ini` to find where the you can make an ini file
	# create a new ext.ini file and insert
	#   extension = openssl
	#   extension = sodium
	#   extension = curl
	#   extension = mbstring
	#   extension = intl
	# close and continue
	composer global require phing/phing comcast/php-legal-licenses codeception/codeception apigen/apigen:^7.0@alpha humbug/box
	pip install -U sphinx

Get the project

.. code-block::

	composer create-project nxsys/library.clients-brex --stability dev


PHING and build.xml
-------------------
`Phing <https://www.phing.info/>`_ Is our build orchestration tool. You will use phing to run any tool required for developing on this project. Build settings are configured in `build.xml`.

Build Targets
-------------
.. code-block::

	Default target:
	-------------------------------------------------------------------------------
	dist-full          zip FULL _build dir structure
						- depends on: prepare-dist

	Main targets:
	-------------------------------------------------------------------------------
	QA                 Shortcut for `testcov,analyze`
						- depends on: testcov, analyze
	build              Shortcut for `testcov,docs,phar`
						- depends on: testcov, docs, phar
	classrefdocs       Creates class reference documentation with Apigen
	dist-full          zip FULL _build dir structure
						- depends on: prepare-dist
	dist-phar          zip phar for dist
						- depends on: prepare-dist
	docs               shortcut for `classrefdocs, manual`
						- depends on: classrefdocs, manual
	generate           Creates project skel. For first run only
	janegen            Generate code from Brex OpenAPI spec with JanePHP
	license-inventory  Licence Inventory Report
	manual             Compiles Sphinx docs for dirhtml, man, and htmlhelp
						- depends on: prepare
	phar               Creats Phar with Box
	prepare            Creates _build and runs `composer install`
						- depends on: license-inventory
	prepare-dist       shortcut for `build, phar, docs`
						- depends on: build
	testcov            Runs test suite wit code coverage reports

	Subtargets:
	-------------------------------------------------------------------------------
	analyze            Runs a Sonar analysis


Reproducible builds
^^^^^^^^^^^^^^^^^^^
If you update a composer package to add a feature or fix a bug, or otherwise run `composer update`, please be sure to commit the `composer.lock` file as well as `composer.josn`. This ensures that all vendor packages can be tested and released at the same time.


.. _code-generation:

Code Generation
-------------------
This SDK uses code generation provided by `JanePHP <https://jane.readthedocs.io/en/latest>`_ This allows us to rapidly create a great deal of scaffolding while still supporting Brex's whole API. From time to time Brex will make updates, and this SDK must be updated in kind. You must first download the new OpenAPI specs and then regenerate the API.

Pulling Down OpenAPI Specs
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
For each Brex API, you will need to download each OpenAPI file. Goto https://developer.brex.com and under "APIs" click on ___ API then the download button next to "Download OpenAPI specification". Download each file to their respective .json file in `.config/jane-gen`. (E.g. `.config/jane-gen/brex-budgets_1.0.json`). It is highly recommend to not only update a single API and to retrieve them all.

.. note:: We skip the Onboarding API and the Accounting API

Updating the API Code
^^^^^^^^^^^^^^^^^^^^^
To bring the library up to date with the live Brex API. You must run:

.. code-block::

	phing janegen

.. note:: This may take some time (10 min+)

Please ensure that you run the test suite and make required alterations to the SDK before committing the new API code.


Known Brex Idiosyncrasies
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

*No Known Issues At This Time*

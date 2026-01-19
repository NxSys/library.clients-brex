[![MIT License](https://img.shields.io/badge/License-MIT-green.svg?style=flat-square)](https://choosealicense.com/licenses/mit/)
| [![Packagist Version](https://img.shields.io/packagist/v/nxsys/library.clients-brex?style=flat-square&include_prereleases)](https://packagist.org/packages/nxsys/library.clients-brex)
| [![GitHub issues](https://img.shields.io/github/issues/nxsys/library.clients-brex?style=flat-square)](https://github.com/NxSys/library.clients-brex/labels/bug)
| [![GitHub issues](https://img.shields.io/github/issues-closed-raw/nxsys/library.clients-brex?style=flat-square)](https://github.com/NxSys/library.clients-brex/issues?q=is%3Aclosed+label%3Abug+)
| [![AppVeyor branch](https://img.shields.io/appveyor/build/NxSys/library-clients-brex/trunk?style=flat-square)](https://ci.appveyor.com/project/NxSys/library-clients-brex)
| [![Sonar Quality Gate](https://img.shields.io/sonar/quality_gate/NxSys_library.clients-brex?server=https%3A%2F%2Fsonarcloud.io&style=flat-square)](https://sonarcloud.io/summary/overall?id=NxSys_library.clients-brex)
| [![Sonar Tech Debt](https://img.shields.io/sonar/tech_debt/NxSys_library.clients-brex?server=http%3A%2F%2Fsonarcloud.io&style=flat-square)](https://sonarcloud.io/component_measures?metric=sqale_debt_ratio&id=NxSys_library.clients-brex)

# Brex SDK for PHP

<p style="text-align: center"><a href="https://bestpractices.coreinfrastructure.org/projects/6930"><img alt="CII Best Practices Summary" src="https://img.shields.io/cii/summary/6930?style=for-the-badge"></a></p>


<div align="center">
  <a href="https://github.com/NxSys/library.clients-brex/issues/new?assignees=&labels=bug&template=01_BUG_REPORT.md&title=bug%3A+">Report a Bug</a>
  ·
  <a href="https://github.com/NxSys/library.clients-brex/issues/new?assignees=&labels=enhancement&template=02_FEATURE_REQUEST.md&title=feat%3A+">Request a Feature</a>
  ·
  <a href="https://github.com/NxSys/library.clients-brex/issues/new?assignees=&labels=question&template=04_SUPPORT_QUESTION.md&title=support%3A+">Ask a Question</a>
  <br />
  <br />
</div>

This is an SDK to allow PHP applications to quickly use the Brex [REST API](https://developer.brex.com/) to accomplish all common banking tasks available from the API. Through [code generation](https://jane.readthedocs.io/en/latest) we currently support full API coverage.

You will, of course, [need to be a Brex client](https://www.brex.com/sales) to get any use from this library.

CAUTION: This is financial software. The nature of the Brex API means that most usage will involve dealing with highly sensitive financial data and/or money transfers. You are entirely responsible for ensuring that proper security measures are implemented to protect your property (money and information). Please observe the [LICENSE](LICENSE.txt) (and its *disclaimer*), and thoroughly understand [SECURITY](SECURITY.md) (and the limitations of this implementation).



## Getting Started

### Requirements
* [A Brex Account](https://www.brex.com/sales)
* [PHP 8.1](https://www.php.net/downloads.php)
* [Composer](https://getcomposer.org/doc/00-intro.md)
* A [library that implements PSR7](https://packagist.org/providers/psr/http-factory-implementation)

### Installation
Install `nxsys/library.client-brex` with composer.

```bash
composer require nxsys/library.client-brex
```
This library allows you to keep the http client library you may already
be using in your application. It does this through [service discovery](https://docs.php-http.org/en/latest/discovery.html).
If you are not using an [PSR-7 aware HTTP client](https://docs.php-http.org/en/latest/message/message-factory.html) you will need to [install one](https://packagist.org/providers/psr/http-factory-implementation).

We have tested this against [Symfony's HTTP Client](https://symfony.com/doc/current/http_client.html). Install the package below.

    composer require symfony/http-client

>If this is confusing please read https://docs.php-http.org/en/latest/httplug/users.html and don't hesitate to [chat with us](https://onx.zulipchat.com)!

## Usage/Examples

```php
<?php
#if using composer use the autoloader
require 'vendor\autoload.php';

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
```


## Documentation

- [User Manual](http://nxsys-library-clients-brex.readthedocs.io)
- [Class Reference](https://brex-client.apidoc.nxsys.org)
- [Brex API Reference](https://developer.brex.com/)


<details open="open">
<summary>FAQ</summary>

## FAQ

#### Can I use this securely?

READ [SECURITY](SECURITY.md)

#### How can I obtain a Brex token?

In your Brex dashboard. See https://developer.brex.com/docs/authentication/

</details>

## Feedback

The following communication channels are open:
- Chat: https://onx.zulipchat.com
- Issues: https://github.com/NxSys/library.clients-brex/issues
- Forum: https://github.com/NxSys/library.clients-brex/discussions
<!-- - Wiki: https://nxsys.assembla.com/spaces/library.client-brex/wiki -->
- Src: https://github.com/NxSys/library.clients-brex

If you have any feedback, please reach out to us at onx@nxs.systems

## Contributing

First off, thanks for taking the time to contribute! Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make will benefit everybody else and are **greatly appreciated**.

Please read [our contribution guidelines](CONTRIBUTING.md), and thank you for being involved!

Please adhere to this project's [code of conduct](CODE_OF_CONDUCT.md).


## Used By

This project is used by the following project:

- [CLI client for Brex](https://github.com/NxSys/applications.brex-cli) (as a reference implementation)

## Security

This library attempts to follow good practices of security, but 100% security cannot be assured.
This library is provided **"as is"** and without any **warranty**. Use at your own risk.

_For more information and to report security issues, please refer to our [security documentation](SECURITY.md)._

## License (MIT)

Copyright (c) 2023-2026 Nexus Systems, Inc. Any rights not expressly granted herein are reserved.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
associated documentation files (the "Software"), to deal in the Software without restriction,
including without limitation the rights to use, copy, modify, merge, publish, distribute,
sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or
substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING
BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

See [LICENSE](LICENSE.txt) for more information and third party notices.

## Authors

- Open Nexus Group onx@nxs.systems

## Acknowledgements

 - [Brex](https://developer.brex.com/)
 - [Jane](https://jane.readthedocs.io/en/latest)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)
 - [Write the Docs: Documentation Guide](https://www.writethedocs.org/guide/)

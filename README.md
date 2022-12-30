[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/) | LIBIO | ISSUES OPEN | ISSUES SOLVED | BUILDS | SONAR QG

# Brex SDK for PHP

<div align="center">
  <a href="https://github.com/NxSys/library.clients-brex/issues/new?assignees=&labels=bug&template=01_BUG_REPORT.md&title=bug%3A+">Report a Bug</a>
  ·
  <a href="https://github.com/NxSys/library.clients-brex/issues/new?assignees=&labels=enhancement&template=02_FEATURE_REQUEST.md&title=feat%3A+">Request a Feature</a>
  .
  <a href="https://github.com/NxSys/library.clients-brex/issues/new?assignees=&labels=question&template=04_SUPPORT_QUESTION.md&title=support%3A+">Ask a Question</a>
  <br />
  <br />
</div>

This is a SDK to allow PHP projects to quickly use the Brex REST API <URL> to accomplish all common banking tasks available from the API. Through [code generation](https://jane.readthedocs.io/en/latest) we currently support full API coverage.

You will, of course, need to be a Brex client to get any use from this library.

CAUTION: This is financial software. The nature of the Brex API means that most usage will involve dealing with highly sensitive financial data and money transfers. You are entirely responsible for ensuring that proper security measures are implemented to protect all data. Please observe the [LICENSE](LICENSE.txt) (and its *disclaimer*) and thoroughly understand [SECURITY](SECURITY.md) (and the limitations of this implementation).



## Getting Started

### Requirements
* [A Brex Account](https://www.brex.com/sales)
* PHP 8.1
* Composer
* A [library that implements PSR7](https://packagist.org/providers/psr/http-factory-implementation)

### Installation
Install `nxsys/library.client-brex` with composer.

```bash
composer require nxsys/library.client-brex
```
This library allows you to keep the http client library you may already
be using in your application. It does this through HTTP DISCOVERY DOCS.
If you are not using an HTTP CLIENT you will need to install one.

We have tested this against GuzzlePHP. Install the PKG PKG and PKG below.

    composer require php-http/curl-client guzzlehttp/psr7 php-http/message
@SEE FAQ DOCS & https://docs.php-http.org/en/latest/httplug/users.html
## Usage/Examples

```php
<?php
#if using composer use the autoloader
require 'vendors\autoload.php';

use NxSys\Library\Clients\Brex\SdkClient;
use NxSys\Library\Clients\Brex\API as BrexApi;

$oSDK=new SdkClient('BREX TOKEN'); #consider using a token vault

//Initializes Endpoints
$oSDK->setupClient();

//Lets get company details to start
$oTeamClient=$oSDK->getTeamClient();

/** @var BrexApi\Team\Model\CompanyResponse */
$aCompanyDetails=$oTeamClient->getCompany();

$sCompanyName=$aCompanyDetails->getLegalName();
// ACME Corp, Inc.
```


## Documentation

- [User Manual](http://nxsys-library-clients-brex.readthedocs.io/)
- [Class Reference](https://APIGENHOST?)
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

Please adhere to this project's `code of conduct`.


## Used By

This project is used by the following project:

- [CLI client for Brex](https://github.com/NxSys/applications.brex-cli) (as a reference implementation)

## Security

This library follows good practices of security, but 100% security cannot be assured.
This library is provided **"as is"** without any **warranty**. Use at your own risk.

_For more information and to report security issues, please refer to our [security documentation](SECURITY.md)._

## License (MIT)

Copyright (c) 2023 Nexus Systems, Inc. Any rights not expressly granted herein are reserved.

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

See [LICENSE](LICENSE.txt) for more information.

## Authors

- Open Nexus Group onx@nxs.systems


## Appendix

Any additional information goes here


## Acknowledgements

 - [Brex](https://developer.brex.com/)
 - [Jane](https://jane.readthedocs.io/en/latest)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)

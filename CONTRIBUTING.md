# Contributing

When contributing to this repository, please first discuss the change you wish to make via issue, email, or any other method with the owners of this repository before making a change.
Please note we have a [code of conduct](CODE_OF_CONDUCT.md), please follow it in all your interactions with the project.

## Development environment setup


To set up a development environment, please follow these steps:

0. (Optional-ish) Get a Brex API key. Without this key, you will not be able to test your code. We may still accept simple patches however.

1. Install `composer`. https://getcomposer.org/doc/00-intro.md

2. Install `phing`. https://www.phing.info/guide/chunkhtml/ch03s02.html

2. Obtain the code and install packages

   ```sh
   composer create-project nxsys/library.clients-brex --stability dev
   ```

## Tests and Builds

### Testing and Testing Implications!
> ⚠️ If you are a "[Brex Client](https://developer.brex.com/docs/checklist/)", there is no sandbox. You are running tests against your own account. Contact Brex's support if you want them to setup a new sandbox account for you.

You must set `BREX_TOKEN` and `BREX_ENDPOINT` in your environment before running tests.

``` sh
	set BREX_TOKEN=3a6a5c7b4747e5f5a577
	set BREX_ENDPOINT=https://platform.brexapis.com
	phing testcov
```
> To get code coverage reports, you should also install Xdebug and ensure coverage reporting is [enabled] (https://xdebug.org/docs/all_settings#mode).

* Tests that modify account data are skipped by default. If you wish to run these separately:

``` sh
	 codecept -c .config\codeception.yml run Unit -g writers
```
We encourage you to contribute by adding even more unit tests.

### Release Builds


#### Reproducible builds

If you update a composer package to add a feature or fix a bug, or otherwise run `composer update` please be sure to commit the `composer.lock` file as well as `composer.josn`. This ensures that all vendor packages can be tested and released at the same time.


## Issues and feature requests

You've found a bug in the source code, a mistake in the documentation or maybe you'd like a new feature? You can help us by [submitting an issue on GitHub](https://github.com/NxSys/library.clients-brex/issues). Before you create an issue, make sure to search the issue archive -- your issue may have already been addressed!

Please try to create bug reports that are:

- _Reproducible._ Include steps to reproduce the problem.
- _Specific._ Include as much detail as possible: which version, what environment, etc.
- _Unique._ Do not duplicate existing opened issues.
- _Scoped to a Single Bug._ One bug per report.

**Even better: Submit a pull request with a fix or new feature!**

### How to submit a Pull Request

1. Search our repository for open or closed
   [Pull Requests](https://github.com/NxSys/library.clients-brex/pulls)
   that relate to your submission. You don't want to duplicate effort.
2. Fork the project
3. Create your feature branch (`git checkout -b feat/amazing_feature`)
4. Commit your changes (`git commit -m 'feat: add amazing_feature'`) This project uses [conventional commits](https://www.conventionalcommits.org), so please follow the specification in your commit messages.
5. Push to the branch (`git push origin feat/amazing_feature`)
6. [Open a Pull Request](https://github.com/NxSys/library.clients-brex/compare?expand=1)

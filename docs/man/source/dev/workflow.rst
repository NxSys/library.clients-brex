
Workflow
========

Issues
-------------------
You've found a bug in the source code, a mistake in the documentation, or maybe you'd like a new feature. You can help us by `submitting an issue on GitHub <https://github.com/NxSys/library.clients-brex/issues>`_. But before you create a new issue, please make sure to search the issue archive first -- your issue may have already been addressed!

Please try to create bug reports that are:

- *Reproducible*. Include steps to reproduce the problem.
- *Specific.* Include as much detail as possible: which version, what environment, etc.
- *Unique.* Do not duplicate existing opened issues.
- *Scoped to a Single Bug.* One bug per report.

**Even better: Submit a pull request with a fix or new feature!**

On DCOs and Sign-offs
---------------------
This project uses `Developer Certificate of Origin <https://developercertificate.org/>`_. The reasons to do so are `various and sundry <https://bssw.io/items/the-developer-certificate-of-origin>`_, and we ultimately believe they are a easy way to assure license integrity from the project and copyright compliance from developers.

Compliance is simple and consists of making commit messages like so:

.. code-block::

	This is the commit message

	Signed-off-by: First M. Last <first.last@someurl.org>

Branches
-------------------
resync
^^^^^^
Tests
-------------------
Our test suite is built with `Codeception <https://codeception.com/docs/UnitTests>`_ and run by `Appveyor <https://ci.appveyor.com/project/NxSys/library-clients-brex>`_.

.. note::
	If you are a `Brex Client <https://developer.brex.com/docs/checklist/>`_, there is no sandbox. You are running tests against your own account. Contact Brex's support if you want them to setup a new sandbox account for you.

Environment variables are use to configure your brex token and production vs staging endpoints. You must set `BREX_TOKEN` and `BREX_ENDPOINT` in your environment before running tests.

.. code-block::

	set BREX_TOKEN=<your token>
	set BREX_ENDPOINT=https://platform.brexapis.com
	phing testcov

.. note::
	To produce code coverage reports, you should also install Xdebug and ensure coverage reporting is `enabled <https://xdebug.org/docs/all_settings#mode>`_.

Tests that modify account data are skipped by default. If you wish to run these separately:


.. code-block::

	 codecept -c .config\codeception.yml run Unit -g writers

.. warning::
	Tests marked as *writers* could run amok over your account. Please request a sandbox account from Brex before running these tests. *You have been warned.*

We encourage you to contribute by adding even more unit tests.

Pull Requests
-------------------
1. Search our repository for open or closed
   `Pull Requests <https://github.com/NxSys/library.clients-brex/pulls>`_
   that relate to your submission, *first*. You don't want to duplicate efforts.
2. Fork the project
3. Create your feature branch (`git checkout -b feat/amazing_feature`)
4. Commit your changes (`git commit -m 'feat: add amazing_feature'`) This project uses `conventional commits <https://www.conventionalcommits.org>`_, so please follow the specification in your commit messages.
5. Push to the branch (`git push origin feat/amazing_feature`)
6. `Open a Pull Request <https://github.com/NxSys/library.clients-brex/compare?expand=1>`_

Release Builds
-------------------
Builds are automatically built via CI with `Appveyor <https://ci.appveyor.com/project/NxSys/library-clients-brex>`_

Reproducible builds
^^^^^^^^^^^^^^^^^^^
If you update a composer package to add a feature or fix a bug, or otherwise run `composer update`; please, be sure to commit the `composer.lock` file as well as `composer.josn`. This ensures that all vendor packages can be tested and released at the same time.
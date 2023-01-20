Unit Testing
=============
On Testing and Live Financial Data
--------------------------------------
.. warning:: If you are a `Brex Client <https://developer.brex.com/docs/checklist/>`_, there is no sandbox. You are running tests against your own account!

Test Organization
-------------------
* Tests that read account data are disabled
* Tests that modify account data do not exist [#f1]_

Creating Tests
-------------------
https://codeception.com/docs/UnitTests

.. rubric:: Footnotes

.. [#f1] These tests are not published here to prevent any possible way this library could "run roughshod" over your account in an automated fashion. Running tests recklessly could cause your business financial damage!
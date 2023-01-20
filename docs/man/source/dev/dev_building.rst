
Building the Project
====================

Tool requirements:


PHING and build.xml
-------------------
https://www.phing.info/

Build Targets
-------------
.. code-block::

		Default target:
	-------------------------------------------------------------------------------
	dist-full           - depends on: prepare-dist

	Main targets:
	-------------------------------------------------------------------------------
	license-inventory  ==>Licence Inventory Report

	Subtargets:
	-------------------------------------------------------------------------------
	analyze
	build               - depends on: janegen
	classrefdocs
	dist-full           - depends on: prepare-dist
	dist-phar           - depends on: prepare-dist
	docs                - depends on: classrefdocs, manual
	generate
	janegen
	manual              - depends on: prepare
	phar
	prepare             - depends on: license-inventory
	prepare-dist        - depends on: build, phar, docs

.. _code-generation:

Reproducible builds
^^^^^^^^^^^^^^^^^^^

Code Generation
-------------------

`code generation <https://jane.readthedocs.io/en/latest>`_

Via PHING
^^^^^^^^^^^^^^^^^^^

Pulling Down OpenAPI Specs
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Using Jane
^^^^^^^^^^^^^^^^^^^
``phing janegen``

Known Brex Idiosyncrasies
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

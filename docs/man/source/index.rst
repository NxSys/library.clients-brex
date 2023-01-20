.. Brex SDK for PHP documentation master file, created by
   sphinx-quickstart on Wed Dec 28 21:57:27 2022.
   You can adapt this file completely to your liking, but it should at least
   contain the root `toctree` directive.

Brex SDK for PHP: User and Developer Manual
===========================================


Introduction
------------
This is an SDK to allow PHP applications to quickly use the Brex `REST API <https://developer.brex.com/>`_ to accomplish all common banking tasks available from the API. Through :ref:`code-generation` we currently support full API coverage.

You will, of course, `need to be a Brex client <https://www.brex.com/sales>`_ to get any use from this library.

.. warning::
	CAUTION: This is financial software. The nature of the Brex API means that most usage will involve dealing with highly sensitive financial data and/or money transfers. You are entirely responsible for ensuring that proper security measures are implemented to protect your property (money and information). Please observe the `LICENSE <https://github.com/NxSys/library.clients-brex/blob/main/LICENSE.txt>`_ (and its *disclaimer*), and thoroughly understand :ref:`security_warning` (and the limitations of this implementation).

License
-------
This SDK provided to you under the `MIT License <https://github.com/NxSys/library.clients-brex/blob/main/LICENSE.txt>`_. You generally permitted to deal in this software without restriction. Please refer to the file above for the full license text.

`Copyright (c) 2023 Nexus Systems, Inc. Any rights not expressly granted herein are reserved.`


.. toctree::
   :maxdepth: 1
   :caption: User Manual:
   :glob:

   about
   getting-started/*
   user*

.. toctree::
   :maxdepth: 1
   :caption: Developer Manual:
   :glob:

   dev/dev*


Indices and tables
==================

* :ref:`genindex`
* :ref:`search`
.. * :ref:`modindex`

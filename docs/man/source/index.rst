.. Brex SDK for PHP documentation master file, created by
   sphinx-quickstart on Wed Dec 28 21:57:27 2022.
   You can adapt this file completely to your liking, but it should at least
   contain the root `toctree` directive.

Brex SDK for PHP: User and Developer Manual
===========================================


Introduction
------------
This is an (unofficial) SDK that allows PHP applications to quickly use the Brex `REST API <https://developer.brex.com/>`_ to accomplish all common banking tasks available from the API. Through :ref:`code-generation` we currently support full API coverage.

You will `need to be a Brex client <https://www.brex.com/sales>`_ to get any use from this library.

.. warning::
	This is financial software and the nature of the Brex API means that the majority of use will involve dealing with highly sensitive financial data and/or money transfers. You are completely  responsible for ensuring that proper security measures are implemented to protect your property (money and information). Please review the `LICENSE <https://github.com/NxSys/library.clients-brex/blob/main/LICENSE.txt>`_ (and its *disclaimer*), and thoroughly understand :ref:`security_warning` and the limitations of this implementation.

License
-------
This SDK provided to you under the `MIT License <https://github.com/NxSys/library.clients-brex/blob/main/LICENSE.txt>`_. and all usage of this software is determined and defined by the terms of this license. Please refer to the file above for the full license text.

*Copyright (c) 2024 Nexus Systems, Inc. Any rights not expressly granted herein are reserved.*

*"Brex" is a registered trademark of Brex, Inc. Use of the Brex API is subject to the* `Brex Access Agreement <https://www.brex.com/legal/developer-portal>`_.

User Manual
------------
.. toctree::
   :maxdepth: 1
   :glob:

   user/about
   getting-started/*
   user/*

Developer Manual
----------------
.. toctree::
   :maxdepth: 1
   :glob:

   dev/*

.. _support:

Support
=======

The following communication channels are open:

* Chat: https://onx.zulipchat.com
* Issues: https://github.com/NxSys/library.clients-brex/issues
* Forum: https://github.com/NxSys/library.clients-brex/discussions

.. <!-- - Wiki: https://nxsys.assembla.com/spaces/library.client-brex/wiki -->

If you have any additional feedback, or commercial inquiries, please reach out to us at onx@nxs.systems.

Indices and tables
==================

* :ref:`genindex`
* :ref:`search`

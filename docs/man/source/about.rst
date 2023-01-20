
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
This SDK can marshal access to the entire API through a single host object. We're able to leverage code generation through `Jane PHP <https://jane.readthedocs.io/en/latest/>`_  to consume the published OpenAPI specification of Brex's API. Further we're able to use `HTTPlug <http://httplug.io/>`_ to allow our generated code to support a HTTP request client you may already be using, through auto discovery. (A default implementation is discussed if are not already using one)

Selected Use Cases
------------------

Pulling the Most Recent Transactions

Adding a User

Locking a Users Card

Support
---------
If there's anything on your mind, dialogue is welcome.

- Chat: https://onx.zulipchat.com
- Issues: https://github.com/NxSys/library.clients-brex/issues
- Forum: https://github.com/NxSys/library.clients-brex/discussions

Project Governance
------------------
This project is primarily maintained by, but not sponsored by, `Nexus Systems, Inc <nxs.systems>`_. Absent a 2/3 decision by the project members writ large, final decisions are made by `Nexus Systems <oss@nxs.systems>`_.
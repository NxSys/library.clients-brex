


.. _security_warning:

An Admonishment Regarding :index:`Security`
===========================================

Operational :index:`Risks`
---------------------------
As stated in the README. This software's purpose is to touch your *company's* money. It can read your transactions, add users to your account, and create expense cards. This is *inherently risky and sensitive*. Additionally this library is a point-to-point tool and has no access control of any kind. Moreover this is open source and freely available software. It is therefore impossible for the authors to make assurances about your security without investigating your unique environment. It is incumbent upon you, dear developer, to make well considered and careful judgments about exactly if, and how, you implement this software. While standing firmly on our disclaimer, we wish you Godspeed.

:index:`Mitigation`
-------------------
Universal Recommendations
	* Don't take chances with user access.
	* Don't needlessly expose login interfaces and tokens.
	* Check your statements and logs regularly.
	* Investigate unusual activity.

.. attention:: Prompt action may prevent a minor incident from turning in to a serious one!

* Use secure channels whenever possible.

.. centered:: BE SURE YOU'RE SECURE

Data in transit
^^^^^^^^^^^^^^^
Data that passes through this library is processed in memory and communicated over the internet. By design, this SDK communicates with only hosts owned by Brex, Inc. e.g. ``platform.brexapis.com`` et. al.

Commercially reasonable :index:`protection` of your data in transit should consist of a web application firewall between your application host and the network connecting to Brex (the Internet for example). With that in place, you can then begin to monitor and mitigate various HTTP and SSL risks and perform the auditing of your application traffic.

Data at rest
^^^^^^^^^^^^^
By design, this library does not perform caching or data storage of any sort. Considering the workload this library enables, it's very likely that your application will. It's necessary to ensure that your application handles data appropriately and securely when using this library.

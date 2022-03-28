.. title:: Index

===========
Basic Usage
===========

Setup client

.. code-block:: php
    
    require 'vendor/autoload.php';
    
    use Onetoweb\Salesupply\Client;
    
    // params
    $username = 'username';
    $password = 'password';
    
    // get client
    $client = new Client($username, $password);

===============
Usage Endpoints
===============

* `Activity <activity.rst>`_
* `CarrierAccount <carrieraccount.rst>`_
* `Country <country.rst>`_
* `Culture <culture.rst>`_
* `Currency <currency.rst>`_
* `Customer <customer.rst>`_
* `ExchangeRate <exchangerate.rst>`_
* `Order <order.rst>`_
* `Product <product.rst>`_
* `ShopOwner <shopowner.rst>`_
* `Shop <shop.rst>`_
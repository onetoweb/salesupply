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
* `Email <email.rst>`_
* `Employee <employee.rst>`_
* `ExchangeRate <exchangerate.rst>`_
* `File <file.rst>`_
* `Order <order.rst>`_
* `OrderStatus <orderstatus.rst>`_
* `Parcel <parcel.rst>`_
* `Payment <payment.rst>`_
* `Product <product.rst>`_
* `Report <report.rst>`_
* `ShopOwner <shopowner.rst>`_
* `Shop <shop.rst>`_
* `System <system.rst>`_
* `VatTariff <vattariff.rst>`_

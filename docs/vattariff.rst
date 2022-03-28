.. title:: VatTariff endpoint

`Back to index <index.rst>`_

==================
VatTariff endpoint
==================

.. contents::
    :local:


Get vat tariffs
```````````````

.. code-block:: php
    
    $shopId = 42;
    $vatTariffs = $client->vatTariff->list($shopId);

.. title:: Parcel endpoint

`Back to index <index.rst>`_

===============
Parcel endpoint
===============

.. contents::
    :local:


Get parcels
```````````

.. code-block:: php
    
    $parcels = $client->parcel->list($shopId, [
        'fromDateChanged' => '1-1-2022',
        'untilDateChanged' => '1-1-2023',
        'parcelStatusId' => 42,
        'carrierAccountId' => 42,
        'pageSize' => 100,
        'pageNumber' => 1
    ]);

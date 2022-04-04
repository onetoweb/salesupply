.. title:: Ticket endpoint

`Back to index <index.rst>`_

===============
Ticket endpoint
===============

.. contents::
    :local:


Get tickets from shop
`````````````````````

.. code-block:: php
    
    $shopId = 42;
    $tickets = $client->ticket->list($shopId, [
        'fromDateChanged' => '1-1-2022',
        'untilDateChanged' => '1-1-2023',
        'mainStatusId' => 42,
        'mainStatusBaseStatusId' => 42,
        'pageSize' => 100,
        'pageNumber' => 1
    ]);


Get tickets statuses from shop
``````````````````````````````

.. code-block:: php
    
    $shopId = 42;
    $statuses = $client->ticket->statuses($shopId);


Get tickets types from shop
```````````````````````````

.. code-block:: php
    
    $shopId = 42;
    $types = $client->ticket->types($shopId);

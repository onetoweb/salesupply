.. title:: OrderStatus endpoint

`Back to index <index.rst>`_

====================
OrderStatus endpoint
====================

.. contents::
    :local:


Get base order statuses
```````````````````````

.. code-block:: php
    
    $baseOrderStatuses = $client->orderStatus->base();


Get order status types
``````````````````````

.. code-block:: php
    
    $orderStatusTypes = $client->orderStatus->types();


Get shop order statuses
```````````````````````

.. code-block:: php
    
    $shopId = 42;
    $orderStatuses = $client->orderStatus->listShop($shopId);


Get shop owner order statuses
`````````````````````````````

.. code-block:: php
    
    $shopOwnerId = 42;
    $orderStatuses = $client->orderStatus->listOwner($shopOwnerId);


Get order status
````````````````

.. code-block:: php
    
    $id = 42;
    $orderStatuses = $client->orderStatus->get($id);



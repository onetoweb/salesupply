.. title:: Order endpoint

`Back to index <index.rst>`_

==============
Order endpoint
==============

.. contents::
    :local:


Get orders
``````````

.. code-block:: php
    
    $shopId = 42;
    $orders = $client->order->list($shopId, [
        'fromDateChanged' => '1-1-2022',
        'untilDateChanged' => '1-1-2023',
        'mainStatusId' => 1,
        'mainStatusBaseStatusId' => 1,
        'emailAddress' => 'info@example.com',
        'pageSize' => 100,
        'pageNumber' => 1
    ]);


Get order
`````````

.. code-block:: php
    
    $id = 42;
    $orders = $client->order->get($id);


Get order by code
`````````````````

.. code-block:: php
    
    $shopId = 42;
    $orderCode = 'order_code';
    $order = $client->order->getByCode($shopId, $orderCode);


Get order by external order key
```````````````````````````````

.. code-block:: php
    
    $shopId = 42;
    $externalOrderKey = 'external_order_key';
    $order = $client->order->getExternalOrderKey($shopId, $externalOrderKey);


Create order
````````````

.. code-block:: php
    
    $shopId = 42;
    $order = $client->order->create($shopId, [
        'OrderCode' => 'sample string 1',
        'CurrencyId' => 1,
        'CurrencyCode' => 'EUR',
        'OrderTotalIncVat' => 25,
        'OrderTotalExVat' => 26,
        'CustomerReference' => 'sample string 2',
        "ShopNote" => 'sample string 3',
        'Date' => '2022-03-22T13:22:59.1768905+01:00',
        'OrderRows' => [
            [
                'Sequence' => 1,
                'ItemQuantity' => 1,
                'ProductName' => 'sample string 1',
                'ProductCode' => 'sample string 2',
                'ProductDescription' => 'sample string 3',
                'ItemPriceExVat' => 100,
                'ItemPriceIncVat' => 121,
                'RowDiscountExVat' => 0,
                'RowDiscountIncVat' => 0,
                'Vatperc' => 21
            ], [
                'Sequence' => 2,
                'ItemQuantity' => 2,
                'ProductName' => 'sample string 1',
                'ProductCode' => 'sample string 2',
                'ProductDescription' => 'sample string 3',
                'ItemPriceExVat' => 100,
                'ItemPriceIncVat' => 121,
                'RowDiscountExVat' => 0,
                'RowDiscountIncVat' => 0,
                'Vatperc' => 21
            ]
        ],
        'BillToContact' => [
            'FullName' => 'sample string 1',
            'CompanyName' => 'sample string 2',
            'StreetAddress' => 'sample string 3',
            'StreetAddressNumber' => 'sample string 4',
            'StreetAddressExtension' => 'sample string 5',
            'PostalCode' => 'sample string 6',
            'City' => 'sample string 7',
            'CountryId' => 1,
            'CountryCode' => 'NL',
            'CountryName' => 'Netherlands',
            'EMail' => 'info@example.com',
            'Phone' => 'sample string 8',
        ],
        'ShipToContact' => [
            'FullName' => 'sample string 1',
            'CompanyName' => 'sample string 2',
            'StreetAddress' => 'sample string 3',
            'StreetAddressNumber' => 'sample string 4',
            'StreetAddressExtension' => 'sample string 5',
            'PostalCode' => 'sample string 6',
            'City' => 'sample string 7',
            'CountryId' => 1,
            'CountryCode' => 'NL',
            'CountryName' => 'Netherlands',
            'EMail' => 'info@example.com',
            'Phone' => 'sample string 8',
        ],
    ]);


Update order
````````````

.. code-block:: php
    
    $id = 42;
    $shopId = 42;
    $client->order->update([
        'Id' => $id,
        'ShopId' => $shopId,
        'OrderCode' => 'sample string 1',
        'CurrencyId' => 1,
        'CurrencyCode' => 'EUR',
        'OrderTotalIncVat' => 25,
        'OrderTotalExVat' => 26,
        'CustomerReference' => 'sample string 2',
        "ShopNote" => 'sample string 3',
        'Date' => '2022-03-22T13:22:59.1768905+01:00',
        'OrderRows' => [
            [
                'Sequence' => 1,
                'ItemQuantity' => 1,
                'ProductName' => 'sample string 1',
                'ProductCode' => 'sample string 2',
                'ProductDescription' => 'sample string 3',
                'ItemPriceExVat' => 100,
                'ItemPriceIncVat' => 121,
                'RowDiscountExVat' => 0,
                'RowDiscountIncVat' => 0,
                'Vatperc' => 21
            ], [
                'Sequence' => 2,
                'ItemQuantity' => 2,
                'ProductName' => 'sample string 1',
                'ProductCode' => 'sample string 2',
                'ProductDescription' => 'sample string 3',
                'ItemPriceExVat' => 100,
                'ItemPriceIncVat' => 121,
                'RowDiscountExVat' => 0,
                'RowDiscountIncVat' => 0,
                'Vatperc' => 21
            ]
        ],
        'BillToContact' => [
            'FullName' => 'sample string 1',
            'CompanyName' => 'sample string 2',
            'StreetAddress' => 'sample string 3',
            'StreetAddressNumber' => 'sample string 4',
            'StreetAddressExtension' => 'sample string 5',
            'PostalCode' => 'sample string 6',
            'City' => 'sample string 7',
            'CountryId' => 1,
            'CountryCode' => 'NL',
            'CountryName' => 'Netherlands',
            'EMail' => 'info@example.com',
            'Phone' => 'sample string 8',
        ],
        'ShipToContact' => [
            'FullName' => 'sample string 1',
            'CompanyName' => 'sample string 2',
            'StreetAddress' => 'sample string 3',
            'StreetAddressNumber' => 'sample string 4',
            'StreetAddressExtension' => 'sample string 5',
            'PostalCode' => 'sample string 6',
            'City' => 'sample string 7',
            'CountryId' => 1,
            'CountryCode' => 'NL',
            'CountryName' => 'Netherlands',
            'EMail' => 'info@example.com',
            'Phone' => 'sample string 8',
        ],
    ]);


Delete order
````````````

.. code-block:: php
    
    $id = 42;
    $client->order->delete($id);


Get order rows
``````````````

.. code-block:: php
    
    $id = 42;
    $orderRows = $client->order->rows($id);


Add order row
`````````````

.. code-block:: php
    
    $orderId = 42;
    $client->order->addRow($orderId, [
        'Sequence' => 3,
        'ItemQuantity' => 3,
        'ProductName' => 'sample string 1',
        'ProductCode' => 'sample string 2',
        'ProductDescription' => 'sample string 3',
        'ItemPriceExVat' => 100,
        'ItemPriceIncVat' => 121,
        'RowDiscountExVat' => 0,
        'RowDiscountIncVat' => 0,
        'Vatperc' => 21
    ]);


Update order row
````````````````

.. code-block:: php
    
    $id = 42;
    $orderId = 42;
    $client->order->updateRow($orderId, [
        'Id' => $id,
        'Sequence' => 3,
        'ItemQuantity' => 3,
        'ProductName' => 'sample string 1',
        'ProductCode' => 'sample string 2',
        'ProductDescription' => 'sample string 3',
        'ItemPriceExVat' => 100,
        'ItemPriceIncVat' => 121,
        'RowDiscountExVat' => 0,
        'RowDiscountIncVat' => 0,
        'Vatperc' => 21
    ]);

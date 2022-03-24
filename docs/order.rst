.. title:: Order endpoint

`Back to index <index.rst>`_

==============
Order endpoint
==============

Get Orders

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

.. code-block:: php
    
    $id = 42;
    $orders = $client->order->get($id);


Get order rows

.. code-block:: php
    
    $id = 18618326;
    $orderRows = $client->order->rows($id);

Create order

.. code-block:: php
    
    $shopId = 42;
    $order = $client->order->create($shopId, [
        'OrderCode' => 'sample string 1',
        'CurrencyId' => 1,
        'CurrencyCode' => 'EUR',
        'OrderTotalIncVat' => 25,
        'OrderTotalExVat' => 26,
        'CustomerReference' => 'sample string 2',
        'Date' => '2022-03-22T13:22:59.1768905+01:00',
        'OrderRows' => [
            [
                'Sequence' => 1,
                'ItemQuantity' => 1,
                'ProductName' => 'sample string 1',
                'ProductCode' => 'sample string 2',
                'ItemPriceExVat' => 100,
                'ItemPriceIncVat' => 121,
                'RowDiscountExVat' => 0,
                'RowDiscountIncVat' => 0,
                'Vatperc' => 21
            ], [
                'Sequence' => 1,
                'ItemQuantity' => 2,
                'ProductName' => 'sample string 1',
                'ProductCode' => 'sample string 2',
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

.. code-block:: php
    
    $id = 42;
    $client->order->delete($id);
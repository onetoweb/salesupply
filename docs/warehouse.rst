.. title:: Warehouse endpoint

`Back to index <index.rst>`_

==================
Warehouse endpoint
==================

.. contents::
    :local:


Get warehouses
``````````````

.. code-block:: php
    
    $warehouses = $client->warehouse->list();


Create warehouse
````````````````

.. code-block:: php
    
    $shopOwnerId = 42;
    $warehouse = $client->warehouse->create([
        'ShopOwnerId' => $shopOwnerId,
        'Name' => 'sample string 1',
        'Enabled' => true,
        'WarehouseType' => 1,
        'GenerateShippingLabel' => true,
        'GeneratePicklist' => true,
        'GenerateReturnShippingLabel' => true,
        'Priority' => 1,
        'CanPick' => true,
        'Address' => [
            'CompanyName' => 'sample string 2',
            'Address' => 'sample string 3',
            'Address2' => 'sample string 4',
            'StreetAddress' => 'sample string 5',
            'StreetAddressNumber' => 'sample string 6',
            'StreetAddressExtension' => 'sample string 7',
            'PostalCode' => 'sample string 8',
            'City' => 'sample string 9',
            'CountryId' => 1,
            'CountryCode' => 'sample string 10',
            'CountryName' => null,
            'EMail' => 'sample string 11',
            'Phone' => 'sample string 12',
        ],
    ]);


Update warehouse
````````````````

.. code-block:: php
    
    $id = 42;
    $shopOwnerId = 42;
    $client->warehouse->update([
        'Id' => $id,
        'ShopOwnerId' => $shopOwnerId,
        'Name' => 'sample string 1',
        'Enabled' => true,
        'WarehouseType' => 1,
        'GenerateShippingLabel' => true,
        'GeneratePicklist' => true,
        'GenerateReturnShippingLabel' => true,
        'Priority' => 1,
        'CanPick' => true,
        'Address' => [
            'CompanyName' => 'sample string 2',
            'Address' => 'sample string 3',
            'Address2' => 'sample string 4',
            'StreetAddress' => 'sample string 5',
            'StreetAddressNumber' => 'sample string 6',
            'StreetAddressExtension' => 'sample string 7',
            'PostalCode' => 'sample string 8',
            'City' => 'sample string 9',
            'CountryId' => 1,
            'CountryCode' => 'sample string 10',
            'CountryName' => null,
            'EMail' => 'sample string 11',
            'Phone' => 'sample string 12',
        ],
    ]);


Delete warehouse
````````````````

.. code-block:: php
    
    $id = 42;
    $client->warehouse->delete($id);

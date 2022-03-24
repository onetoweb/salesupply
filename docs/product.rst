.. title:: Product endpoint

`Back to index <index.rst>`_

================
Product endpoint
================

Get products

.. code-block:: php
    
    $shopGroupId = 42;
    $products = $client->product->list($shopGroupId, [
        'changedAfter' => '1-1-2022',
        'search' => 'search for',
        'published' => true,
        'pageSize' => 1000,
        'pageNumber' => 1,
    ]);

Get product by id

.. code-block:: php
    
    $id = 42;
    $product = $client->product->get($id);

Get product stock per location

.. code-block:: php
    
    $id = 42;
    $stockPerLocation = $client->product->stockPerLocation($id);

Create product

.. code-block:: php
    
    $shopGroupId = 42;
    $product = $client->product->create([
        'SyncProductGroupsOnSave' => true,
        'SyncPropertiesOnSave' => true,
        'OrderComment' => 'sample string 3',
        'SyncEnabled' => true,
        'ShopGroupId' => $shopGroupId,
        'Note' => 'sample string 6',
        'RefCode' => 'sample string 7',
        'KeepStock' => true,
        'IsShippable' => true,
        'MinimumStock' => 12.0,
        'Published' => true,
        'Weight' => 1.0,
        'Height' => 1.0,
        'Length' => 1.0,
        'Width' => 1.0,
        'Diameter' => 1.0,
        'Volume' => 1.0,
        'PriceExVat' => 14.0,
        'OriginCountryId' => 1,
        'OriginCountryCode' => 'NL',
        'Code' => 'sample string 17',
        'Name' => 'sample string 18',
        'Hscode' => 'sample string 19',
        'EAN' => 'sample string 20',
        'Type' => 21
    ]);

Update product

.. code-block:: php
    
    $id = 42;
    $shopGroupId = 42;
    $client->product->update([
        'Id' => $id,
        'SyncProductGroupsOnSave' => true,
        'SyncPropertiesOnSave' => true,
        'OrderComment' => 'sample string 3',
        'SyncEnabled' => true,
        'ShopGroupId' => $shopGroupId,
        'Note' => 'sample string 6',
        'RefCode' => 'sample string 7',
        'KeepStock' => true,
        'IsShippable' => true,
        'MinimumStock' => 12.0,
        'Published' => true,
        'Weight' => 1.0,
        'Height' => 1.0,
        'Length' => 1.0,
        'Width' => 1.0,
        'Diameter' => 1.0,
        'Volume' => 1.0,
        'PriceExVat' => 14.0,
        'OriginCountryId' => 1,
        'OriginCountryCode' => 'NL',
        'Code' => 'sample string 17',
        'Name' => 'sample string 18',
        'Hscode' => 'sample string 19',
        'EAN' => 'sample string 20',
        'Type' => 21
    ]);

Delete product

.. code-block:: php
    
    $id = 42;
    $client->product->delete($id);

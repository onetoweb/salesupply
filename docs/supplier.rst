.. title:: Supplier endpoint

`Back to index <index.rst>`_

=================
Supplier endpoint
=================

.. contents::
    :local:


Get suppliers
`````````````

.. code-block:: php
    
    $suppliers = $client->supplier->list();


Get supplier
````````````

.. code-block:: php
    
    $id = 42;
    $supplier = $client->supplier->get($id);


Create supplier
```````````````

.. code-block:: php
    
    $shopOwnerId = 42;
    $supplier = $client->supplier->create([
        'ShopOwnerId' => $shopOwnerId,
        'PersonTitle' => 'sample string 1',
        'FirstName' => 'sample string 2',
        'MiddleName' => 'sample string 3',
        'LastNamePrefix' => 'sample string 4',
        'LastName' => 'sample string 5',
        'PersonalNumber' => 'sample string 6',
        'FullName' => 'sample string 7',
        'CompanyName' => 'sample string 8',
        'EMail' => 'info@example.com',
        'ContactReference' => 'sample string 9'
        'MainAddress' => [
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
        ]
    ]);


Update supplier
```````````````

.. code-block:: php
    
    $id = 42;
    $mainAddressId = 42;
    $shopOwnerId = 42;
    $client->supplier->update([
        'Id' => $id,
        'ShopOwnerId' => $shopOwnerId,
        'PersonTitle' => 'sample string 1',
        'FirstName' => 'sample string 2',
        'MiddleName' => 'sample string 3',
        'LastNamePrefix' => 'sample string 4',
        'LastName' => 'sample string 5',
        'PersonalNumber' => 'sample string 6',
        'FullName' => 'sample string 7',
        'CompanyName' => 'sample string 8',
        'EMail' => 'info@example.com',
        'ContactReference' => 'sample string 9',
        'MainAddress' => [
            'Id' => $mainAddressId,
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
       ]
    ]);


Delete supplier
```````````````

.. code-block:: php
    
    $id = 42;
    $client->supplier->delete($id);

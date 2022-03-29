.. title:: Customer endpoint

`Back to index <index.rst>`_

=================
Customer endpoint
=================

.. contents::
    :local:


Get customers fromw shop owner
``````````````````````````````

.. code-block:: php
    
    $shopOwnerId = 42;
    $customers = $client->customer->listOwners($shopOwnerId, [
        'fromDateChanged' => '1-1-2022',
        'untilDateChanged' => '1-1-2023',
        'pageSize' => 100,
        'pageNumber' => 1,
    ]);


Search customer
```````````````

.. code-block:: php
    
    $shopOwnerId = 42;
    $search = 'search for';
    $customer = $client->customer->search($shopOwnerId, $search);


Get customer by code
````````````````````

.. code-block:: php
    
    $shopOwnerId = 42;
    $customerCode = '42';
    $customer = $client->customer->getByCustomerCode($shopOwnerId, $customerCode);


Get customers
`````````````

.. code-block:: php
    
    $customers = $client->customer->list();


Get customer
````````````

.. code-block:: php
    
    $id  = 42;
    $customer = $client->customer->get($id);


Create customer
```````````````

.. code-block:: php
     
    $customer = $client->customer->create([
        'SyncShipToAddressOnSave' => true,
        'SyncBillToAddressOnSave' => true,
        'CustomerCode' => 'sample string 3',
        'ReceiveNewsLetter' => true,
        'CustomerGroupId' => 1,
        'BillToAddress' => [
            'VatNumber' => 'sample string 1',
            'FullName' => 'sample string 2',
            'DateOfBirth' => '2022-03-23T16:01:20.5665299+01:00',
            'Gender' => 'sample string 3',
            'PersonTitle' => 'sample string 4',
            'MiddleName' => 'sample string 5',
            'FirstName' => 'sample string 6',
            'LastName' => 'sample string 7',
            'LastNamePrefix' => 'sample string 8',
            'CompanyName' => 'sample string 10',
            'Address' => 'sample string 11',
            'Address2' => 'sample string 12',
            'StreetAddress' => 'sample string 13',
            'StreetAddressNumber' => 'sample string 14',
            'StreetAddressExtension' => 'sample string 15',
            'PostalCode' => 'sample string 16',
            'City' => 'sample string 17',
            'CountryId' => 1,
            'CountryCode' => 'sample string 18',
            'CountryName' => null,
            'EMail' => 'sample string 19',
            'Phone' => 'sample string 20',
            'Phone2' => 'sample string 21',
            'StateProvince' => 'sample string 22',
            'StateProvinceCode' => 'sample string 23'
        ],
        'ShipToAddress' => [
            'VatNumber' => 'sample string 1',
            'FullName' => 'sample string 2',
            'DateOfBirth' => '2022-03-23T16:01:20.5665299+01:00',
            'Gender' => 'sample string 3',
            'PersonTitle' => 'sample string 4',
            'MiddleName' => 'sample string 5',
            'FirstName' => 'sample string 6',
            'LastName' => 'sample string 7',
            'LastNamePrefix' => 'sample string 8',
            'CompanyName' => 'sample string 10',
            'Address' => 'sample string 11',
            'Address2' => 'sample string 12',
            'StreetAddress' => 'sample string 13',
            'StreetAddressNumber' => 'sample string 14',
            'StreetAddressExtension' => 'sample string 15',
            'PostalCode' => 'sample string 16',
            'City' => 'sample string 17',
            'CountryId' => 1,
            'CountryCode' => 'sample string 18',
            'CountryName' => null,
            'EMail' => 'sample string 19',
            'Phone' => 'sample string 20',
            'Phone2' => 'sample string 21',
            'StateProvince' => 'sample string 22',
            'StateProvinceCode' => 'sample string 23'
        ],
        'ShopOwnerId' => 1,
        'PersonTitle' => 'sample string 5',
        'FirstName' => 'sample string 6',
        'MiddleName' => 'sample string 7',
        'LastNamePrefix' => 'sample string 8',
        'LastName' => 'sample string 9',
        'CultureId' => 1,
        'PersonalNumber' => 'sample string 10',
        'ChangedTimestamp' => '2022-03-23T16:01:20.5665299+01:00',
        'FullName' => 'sample string 12',
        'CompanyName' => 'sample string 13',
        'EMail' => 'sample string 14',
        'ContactReference' => 'sample string 15'
    ]);


Update customer
```````````````

.. code-block:: php
    
    $client->customer->update([
        'Id' => 11,
        'SyncShipToAddressOnSave' => true,
        'SyncBillToAddressOnSave' => true,
        'CustomerCode' => 'sample string 3',
        'ReceiveNewsLetter' => true,
        'CustomerGroupId' => 1,
        'BillToAddress' => [
            'Id' => 9,
            'VatNumber' => 'sample string 1',
            'FullName' => 'sample string 2',
            'DateOfBirth' => '2022-03-23T16:11:29.5247564+01:00',
            'Gender' => 'sample string 3',
            'PersonTitle' => 'sample string 4',
            'MiddleName' => 'sample string 5',
            'FirstName' => 'sample string 6',
            'LastName' => 'sample string 7',
            'LastNamePrefix' => 'sample string 8',
            'CompanyName' => 'sample string 10',
            'Address' => 'sample string 11',
            'Address2' => 'sample string 12',
            'StreetAddress' => 'sample string 13',
            'StreetAddressNumber' => 'sample string 14',
            'StreetAddressExtension' => 'sample string 15',
            'PostalCode' => 'sample string 16',
            'City' => 'sample string 17',
            'CountryId' => 1,
            'CountryCode' => 'sample string 18',
            'CountryName' => null,
            'EMail' => 'sample string 19',
            'Phone' => 'sample string 20',
            'Phone2' => 'sample string 21',
            'StateProvince' => 'sample string 22',
            'StateProvinceCode' => 'sample string 23'
        ],
        'ShipToAddress' => [
            'Id' => 9,
            'VatNumber' => 'sample string 1',
            'FullName' => 'sample string 2',
            'DateOfBirth' => '2022-03-23T16:11:29.5247564+01:00',
            'Gender' => 'sample string 3',
            'PersonTitle' => 'sample string 4',
            'MiddleName' => 'sample string 5',
            'FirstName' => 'sample string 6',
            'LastName' => 'sample string 7',
            'LastNamePrefix' => 'sample string 8',
            'CompanyName' => 'sample string 10',
            'Address' => 'sample string 11',
            'Address2' => 'sample string 12',
            'StreetAddress' => 'sample string 13',
            'StreetAddressNumber' => 'sample string 14',
            'StreetAddressExtension' => 'sample string 15',
            'PostalCode' => 'sample string 16',
            'City' => 'sample string 17',
            'CountryId' => 1,
            'CountryCode' => 'sample string 18',
            'CountryName' => null,
            'EMail' => 'sample string 19',
            'Phone' => 'sample string 20',
            'Phone2' => 'sample string 21',
            'StateProvince' => 'sample string 22',
            'StateProvinceCode' => 'sample string 23'
        ],
        'ShopOwnerId' => 1,
        'PersonTitle' => 'sample string 5',
        'FirstName' => 'sample string 6',
        'MiddleName' => 'sample string 7',
        'LastNamePrefix' => 'sample string 8',
        'LastName' => 'sample string 9',
        'CultureId' => 1,
        'PersonalNumber' => 'sample string 10',
        'ChangedTimestamp' => '2022-03-23T16:11:29.5247564+01:00',
        'FullName' => 'sample string 12',
        'CompanyName' => 'sample string 13',
        'EMail' => 'sample string 14',
        'ContactReference' => 'sample string 15'
    ]);


Set if customer want to receive newsletter
``````````````````````````````````````````

.. code-block:: php
    
    $id  = 42;
    $customer = $client->customer->receiveNewsletter($id, true);


Delete customer
```````````````

.. code-block:: php
    
    $id = 42;
    $client->customer->delete($id);

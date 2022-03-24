.. title:: CarrierAccount endpoint

`Back to index <index.rst>`_

=======================
CarrierAccount endpoint
=======================

Get all carrier accounts

.. code-block:: php
    
    $shopOwnerId = 42;
    $carrierAccounts = $client->carrierAccount->listAll($shopOwnerId);

Get carrier accounts by shop

.. code-block:: php
    
    $shopId = 42;
    $carrierAccounts = $client->carrierAccount->listShop($shopId);

Create carrier account

.. code-block:: php
    
    $carrierAccount = $client->carrierAccount->create([
        'ShopOwnerId' => 1,
        'Parameters' => [
            [
                'Key' => 'sample string 1',
                'Value' => 'sample string 2'
            ],
            [
                'Key' => 'sample string 1',
                'Value' => 'sample string 2'
            ]
        ],
        'ShippingLabelTemplateId' => 1,
        'ReturnShippingLabelTemplateId' => 1,
        'DefaultGoodsDescription' => 'sample string 2',
        'CreateTimestamp' => '2022-03-23T15:07:03.1081395+01:00',
        'ChangeTimestamp' => '2022-03-23T15:07:03.1081395+01:00',
        'AppModuleDefinitionId' => 5,
        'Name' => 'sample string 6',
        'Enabled' => true
    ]);

Update carrier account

.. code-block:: php
    
    $carrierAccount = $client->carrierAccount->update([
        'ShopOwnerId' => 1,
        'Parameters' => [
            [
                'Key' => 'sample string 1',
                'Value' => 'sample string 2'
            ],
            [
                'Key' => 'sample string 1',
                'Value' => 'sample string 2'
            ]
        ],
        'ShippingLabelTemplateId' => 1,
        'ReturnShippingLabelTemplateId' => 1,
        'DefaultGoodsDescription' => 'sample string 2',
        'CreateTimestamp' => '2022-03-23T15:07:03.1081395+01:00',
        'ChangeTimestamp' => '2022-03-23T15:07:03.1081395+01:00',
        'Id' => 4,
        'AppModuleDefinitionId' => 5,
        'Name' => 'sample string 6',
        'Enabled' => true
    ]);

Delete carrier account

.. code-block:: php
    
    $id = 42;
    $client->carrierAccount->delete($id);

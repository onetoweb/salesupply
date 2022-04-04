.. title:: Shipment endpoint

`Back to index <index.rst>`_

=================
Shipment endpoint
=================

.. contents::
    :local:


Get shipments
`````````````

.. code-block:: php
    
    $shopId = 42;
    $shipments = $client->shipment->listShop($shopId, [
        'fromDateChanged' => '1-1-2022',
        'untilDateChanged' => '1-1-2023',
        'pageSize' => 100,
        'pageNumber' => 1
    ]);


Get shipment
````````````

.. code-block:: php
    
    $id = 42;
    $shipment = $client->shipment->get($id);


Create shipment
```````````````

.. code-block:: php
    
    $orderId = 42;
    $orderRowId = 42;
    $warehouseId = 42;
    $shipment = $client->shipment->create([
        'OrderId' => $orderId,
        'WarehouseId' => $warehouseId,
        'OrderRows' => [
            $orderRowId
        ],
        'ShippingCode' => 'sample string 1',
        'PreferredShipDate' => '2022-04-04T15:39:09.2210372+02:00',
        'GeneratePickList' => true,
        'GeneratePackingSlip' => true,
        'PackingSlipTemplateId' => 1,
        'CarrierAccountId' => 1,
        'CashOnDeliveryPayment' => 1,
    ]);


Update shipment
```````````````

.. code-block:: php
    
    $id = 42;
    $orderId = 42;
    $orderRowId = 42;
    $warehouseId = 42;
    $shipment = $client->shipment->update([
        'Id' => $id,
        'OrderId' => $orderId,
        'WarehouseId' => $warehouseId,
        'OrderRows' => [
            $orderRowId
        ],
        'ShippingCode' => 'sample string 1',
        'PreferredShipDate' => '2022-04-04T15:39:09.2210372+02:00',
        'GeneratePickList' => true,
        'GeneratePackingSlip' => true,
        'PackingSlipTemplateId' => 1,
        'CarrierAccountId' => 1,
        'CashOnDeliveryPayment' => 1,
    ]);


Delete shipment
```````````````

.. code-block:: php
    
    $id = 42;
    $client->shipment->get($id);

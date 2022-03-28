.. title:: Payment endpoint

`Back to index <index.rst>`_

================
Payment endpoint
================

.. contents::
    :local:


Get payments types
``````````````````

.. code-block:: php
    
    $shopId = 42;
    $types = $client->payment->types($shopId);


Delete payment
``````````````

.. code-block:: php
    
    $id = 42;
    $client->payment->delete($id);

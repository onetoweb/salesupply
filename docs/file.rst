.. title:: File endpoint

`Back to index <index.rst>`_

=============
File endpoint
=============

.. contents::
    :local:


Get file
````````

.. code-block:: php
    
    $id = 42;
    $file = $client->file->get($id);


Get file meta data
``````````````````

.. code-block:: php
    
    $id = 42;
    $metaData = $client->file->metaData($id);



Stream file
```````````

.. code-block:: php
    
    $id = 42;
    $file = $client->file->stream($id);


Create file
```````````

.. code-block:: php
    
    $shopId = 42;
    $shopOwnerId = 42;
    $file = $client->file->create([
        'Filename' => 'lorem.txt',
        'FileType' => '1100',
        'Base64Data' => 'bG9yZW0gaXBzdW0=',
        'ShopOwnerId' => $shopOwnerId,
        'ShopId' => $shopId,
    ]);




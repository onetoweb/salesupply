.. title:: TransportCategory endpoint

`Back to index <index.rst>`_

==========================
TransportCategory endpoint
==========================

.. contents::
    :local:


Get transport categories
````````````````````````

.. code-block:: php
    
    $transportCategories = $client->transportCategory->list();


Get transport category
``````````````````````

.. code-block:: php
    
    $id = 42;
    $transportCategory = $client->transportCategory->get($id);

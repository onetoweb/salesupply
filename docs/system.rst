.. title:: System endpoint

`Back to index <index.rst>`_

===============
System endpoint
===============

.. contents::
    :local:


Get current user info
`````````````````````

.. code-block:: php
    
    $me = $client->system->me();


Get user shops
``````````````

.. code-block:: php
    
    $shops = $client->system->meShops();


Get app modules
```````````````

.. code-block:: php
    
    $appModules = $client->system->appModules();


Get app modules feature
```````````````````````

.. code-block:: php
    
    $feature = 'Order integration';
    $appModuleFeature = $client->system->appModuleFeature($feature);


Get app modules features
````````````````````````

.. code-block:: php
    
    $appModuleFeatures = $client->system->appModuleFeatures();


Get version
```````````

.. code-block:: php
    
    $version = $client->system->version();


Get Time
````````

.. code-block:: php
    
    $time = $client->system->time();


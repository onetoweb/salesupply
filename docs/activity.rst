.. title:: Activity endpoint

`Back to index <index.rst>`_

=================
Activity endpoint
=================

.. contents::
    :local:


Get activity categories
```````````````````````

.. code-block:: php
    
    $categories = $client->activity->categories();


Get activities
``````````````

.. code-block:: php
    
    $activities = $client->activity->list([
        'fromDate' => '1-1-2022',
        'tillDate' => '1-1-2023',
        'pageNumber' => 1
    ]);


Create activity
```````````````

.. code-block:: php
    
    $activity = $client->activity->create([
        'CategoryId' => 1,
        'ShopId' => 2,
        'CustomerId' => 1,
        'Hours' => 3,
        'Date' => '2022-03-23T11:28:41.4423046+01:00',
        'Subject' => 'sample string 5',
        'Comment' => 'sample string 6',
        'Billable' => true
    ]);


Update activity
```````````````

.. code-block:: php
    
    $id = 42;
    $activity = $client->activity->update($id, [
        'CategoryId' => 1,
        'ShopId' => 2,
        'CustomerId' => 1,
        'Hours' => 3,
        'Date' => '2022-03-23T13:03:56.9742025+01:00',
        'Subject' => 'sample string 5',
        'Comment' => 'sample string 6',
        'Billable' => true
    ]);


Delete activity
```````````````

.. code-block:: php
    
    $id = 42;
    $client->activity->delete($id);

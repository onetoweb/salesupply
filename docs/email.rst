.. title:: Email endpoint

`Back to index <index.rst>`_

==============
Email endpoint
==============

.. contents::
    :local:


Get emails
``````````

.. code-block:: php
    
    $shopId = 42;
    $emails = $client->email->list($shopId, [
        'fromDate' => '1-1-2022',
        'untilDate' => '1-1-2023',
        'mailboxId' => 42,
        'pageSize' => 100,
        'pageNumber' => 1
    ]);

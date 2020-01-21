
<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Factory;
$factory= new Factory();
$ReceiverQueue=$factory->create('ReceiverQueueRpcServer');
$ReceiverQueue->queueWait();
$ReceiverQueue->queueClose();


<?php

declare(strict_types=1);

use App\SayHelloWorkflow;
use Temporal\Client\GRPC\ServiceClient;
use Temporal\Client\WorkflowClient;

ini_set('display_errors', 'stderr');

require "vendor/autoload.php";

$client = new WorkflowClient(
    ServiceClient::create('temporal:7233'),
);

$workflowStub = $client->newWorkflowStub(SayHelloWorkflow::class);
$result = $workflowStub->sayHello('Temporal');

echo "Result: {$result}\n";

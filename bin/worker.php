<?php
declare(strict_types=1);

use App\GreetingActivity;
use App\SayHelloWorkflow;
use Temporal\WorkerFactory;

ini_set('display_errors', 'stderr');

require "vendor/autoload.php";

$factory = WorkerFactory::create();

$worker = $factory->newWorker();

// Register Workflows
$worker->registerWorkflowTypes(SayHelloWorkflow::class);

// Register Activities
$worker->registerActivity(GreetingActivity::class);

$factory->run();

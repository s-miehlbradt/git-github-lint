<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \Github\Client();
/** @var \Github\Api\PullRequest $prApi */
$prApi = $client->api('pr');
$prApi->commits('PurpleBooth', 'git-github-lint');


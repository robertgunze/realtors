<?php

$app->mount("/users", new \RealtorsApp\Controller\Provider\User());
$app->mount("/properties", new \RealtorsApp\Controller\Provider\Property());
$app->mount("/posts", new \RealtorsApp\Controller\Provider\Post());
$app->mount("/transactions", new \RealtorsApp\Controller\Provider\Transaction());

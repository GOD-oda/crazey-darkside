<?php

use Github\Client;

Route::get('/', function () {
    $client = new Client;

    // get all repositories of a spesific user
    $all_repositories = $client->api('user')->repositories('GOD-oda');

    // get the information of a spesific user
    $user_information = $client->api('user')->show('GOD-oda');

    return view('index', compact('user_information'));
});

<?php

Route::get('/', 'GitHubController@index');
Route::get('/register', 'GitHubController@register');

Route::get('status', 'GitHubController@status');
Route::get('skills', 'GitHubController@skills');
Route::get('equipment', 'GitHubController@equipment');
Route::get('title', 'GitHubController@title');



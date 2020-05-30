<?php

Route::post(config('autodeploy.routes.github'), 'AutoDeployController@githubDeploy');

Route::post(config('autodeploy.routes.bitbucket'), 'AutoDeployController@bitbucketDeploy');
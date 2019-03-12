<?php

Route::group([
    'middleware' => ['web', 'auth']
], function () {

    Route::group([
        'namespace' => 'App\Modules\Bosslike\Controllers',

    ], function () {
        Route::get('profile', 'ProfileController@index')->name('profile');

        Route::delete('ok-user/delete/{id}', 'OkController@delete')->name('ok-user.delete');

        Route::get('task/new', 'NewTaskController@create')->name('task.create');
        Route::get('task/speed/{social}/{service}', 'NewTaskController@getTaskSpeed')->name('task.speed');
        Route::get('task/new/services/{socialId}', 'NewTaskController@getServicesAjax');
        Route::post('task/store', 'NewTaskController@store')->name('task.store');

        Route::get('tasks/my', 'MyTasksController@index')->name('tasks.my');
        Route::get('tasks/all', 'TasksController@index')->name('tasks.all');
        Route::get('tasks/check/{id}', 'TasksController@check')->name('tasks.check');
        Route::put('task/update/{id}', 'MyTasksController@updateAjax');
        Route::delete('task/delete/{id}', 'MyTasksController@delete')->name('task.delete');

    });
});

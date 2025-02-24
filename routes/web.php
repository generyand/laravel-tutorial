<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    $jobs = Job::all();

    return view('jobs', $jobs);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    if (!$job) {
        abort(404);
    }

    return view('job', [
        'job' => $job
    ]);
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'greeting' => 'Hello!',
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'location' => 'Remote',
                'salary' => '$100,000 - $120,000'
            ],
            [
                'id' => 2,
                'title' => 'Full Stack Developer',
                'location' => 'Remote',
                'salary' => '$100,000 - $120,000'
            ],
            [
                'id' => 3,
                'title' => 'Backend Developer',
                'location' => 'Remote',
                'salary' => '$100,000 - $120,000'
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'location' => 'Remote',
                'salary' => '$100,000 - $120,000'
            ],
            [
                'id' => 2,
                'title' => 'Full Stack Developer',
                'location' => 'Remote',
                'salary' => '$100,000 - $120,000'
            ],
            [
                'id' => 3,
                'title' => 'Backend Developer',
                'location' => 'Remote',
                'salary' => '$100,000 - $120,000'
            ],
        ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    if (!$job) {
        abort(404);
    }

    return view('job', [
        'job' => $job
    ]);
});
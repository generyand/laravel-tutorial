<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array {
        return [
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
    }

    public static function find(int $id): array {
        $job = Arr::first(self::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
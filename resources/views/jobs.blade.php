<x-layout>
    <x-slot:heading>Jobs Page</x-slot>
    <ul class="list-disc">
        @foreach ($jobs as $job)
            <li class="mb-4">
                <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a>
                <p>{{ $job['location'] }}</p>
                <p>{{ $job['salary'] }}</p>
            </li>
        @endforeach
    </ul>
</x-layout>
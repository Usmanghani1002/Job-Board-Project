<x-layout>
<x-page-heading> Search Results </x-page-heading>

<div class="space-y-6 mt-6">
    @foreach ($jobs as $job)
        <x-job-card-wide :$job />
    @endforeach

    @if ($jobs->isEmpty())
        <p> No jobs found. </p>

        <a href="/jobs" class="text-blue-500"> View all jobs </a>

    @endif
    
</div>

</x-layout>
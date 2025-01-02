@props(['job'])

<x-panel class="flex flex-col justify-between text-center">
            
    <div class="self-start">{{$job->employer->name}}</div>

    <div class="py-8 space-y-2">
        <h2 class="group-hover:text-blue-600 text-xl font-bold transition duration-300">
            <a href="/jobs/{{$job->id}}" >
                {{$job->title}}
            </a>
        </h2>
        <p class="text-sm text-gray-400">{{$job->type}}</p>
        <p class="mt-4">Salary: {{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center">
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tags :$tag size="small">Backend</x-tags>
            @endforeach     
        </div>
    
        <x-employer-logo :employer="$job->employer" :width="42"/>
    </div>


</x-panel>

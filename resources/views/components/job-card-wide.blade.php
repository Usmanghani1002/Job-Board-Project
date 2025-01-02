@props(['job'])

<x-panel class="flex gap-x-6">
    
        <div>
            <x-employer-logo :employer="$job->employer" :width="100"/>
        </div>

        <div class="flex-1 flex flex-col">
                <a href="/jobs/{{$job['id']}}" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>
                <h2 class="font-bold text-xl pt-1 group-hover:text-blue-600 transition duration-300">
                    <a href="/jobs/{{($job->id)}}">
                        {{$job->title}}
                    </a>
                </h2>
                <p class="text-sm text-gray-400 mt-auto">{{$job->type}} - Salary: {{$job->salary}} Per Year</p> 
        </div>

        
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tags :$tag />
            @endforeach 
        </div>
  
</x-panel>


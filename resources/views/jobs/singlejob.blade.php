<x-layout>
<x-page-heading> Job Details </x-page-heading>
<div class="flex flex-col md:flex-row gap-x-6">
    
    <div class="flex-1 flex flex-col">
       
        <div>
            <x-employer-logo :employer="$job->employer" :width="80"/>
        </div>
   
        <div class="flex-1">
            <h2 class="font-bold text-3xl pt-1 group-hover:text-blue-600 transition duration-300 mb-6 mt-5">
                <a href="/jobs/{{ Str::slug($job->title) }}">
                    {{$job->title}}
                </a>
            </h2>

            
            <img src="https://demo.flawlessthemes.com/espyjobspro/wp-content/uploads/2022/06/listing-hero-image-3.jpg" alt="" class="rounded-md w-full mb-5" width="100">
        </div>

        
        <div class="pt-10 pb-10">
            <span class="leading-7">{!! nl2br($job->description)!!}</span>
        </div>

        <h2 class="text-2xl font-bold"> Requirements</h2>
        <div class="space-x-1 mt-5">
                @foreach ($job->tags as $tag)
                    <x-tags :$tag />
                @endforeach 
        </div>
    </div>

    
    <div class="bg-white/10 p-8 backdrop-blur-lg shadow-lg border border-white/30 rounded-lg w-full md:w-1/3">  
        <div class="flex items-center">
            <div class="flex-1">
                <x-employer-logo :employer="$job->employer" :width="50"/>
            </div>
            <div class="px-5 flex-1">
                <h3 class="text-xl font-bold uppercase">{{$job->employer->name}}</h3>
                <a href="{{$job->url}}" class="text-sm text-blue-500 block">{{$job->url}}</a>
            </div>
        </div>
        <x-forms.divider />
        <div class="space-y-6">
            <div class="flex items-center justify-between">
                <p class="text-md font-light">Job Type</p>
                <p class="text-lg text-gray-400 font-bold">{{$job->type}}</p>
            </div>
            
            <div class="flex items-center justify-between">
                <p class="text-md font-light">Salary</p>
                <p class="text-lg text-gray-400 font-bold">{{$job->salary}}</p>
            </div>

            <div class="flex items-center justify-between">
                <p class="text-md font-light">Location</p>
                <p class="text-lg text-gray-400 font-bold">{{$job->location}}</p>
            </div>

            <div class="flex items-center justify-between">
                <p class="text-md font-light">Job Posted</p>
                <p class="text-lg text-gray-400 font-bold">{{ $job->created_at->format('jS M Y') }}</p>
            </div>

            <div class="flex items-center justify-between">
                <p class="text-md font-light">Expiration date</p>
                <p class="text-lg text-gray-400 font-bold">16th June 2025</p>
            </div>

            <div class=pt-4>
                <a href="{{$job->url}}" class="bg-blue-500 text-white px-8 py-4 rounded-md block text-center">Apply Now</a>
            </div>
            
        </div>
</div>


</x-layout>
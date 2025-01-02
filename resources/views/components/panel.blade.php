@php
    $classes ="p-4 bg-gray-900/40 rounded-xl border border-transparent hover:border-blue-800 transition duration-300 group"    
@endphp

<div {{$attributes->merge(['class' => $classes])}}>
{{$slot}}
</div>

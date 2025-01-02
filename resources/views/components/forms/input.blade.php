@props(['label', 'name', 'type' => 'text'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'value' => old($name),
        // The 'rows' attribute is set only for textareas
        'rows' => 4
    ];
@endphp

<x-forms.field :$label :$name>
    @if($type === 'textarea')
        <textarea {{ $attributes->merge($defaults)->except('value') }}>{{ old($name) }}</textarea>
    @else
        <input type="{{ $type }}" {{ $attributes->merge($defaults) }}>
    @endif
</x-forms.field>

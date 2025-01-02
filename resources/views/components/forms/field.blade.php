@props(['label', 'name'])

<div>
    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div class="mt-1">
        {{ $slot }}

        <x-forms.errors :error="$errors->first($name)" />
    </div>
</div>


@props(['text' => null])

@if($text)
    <p class="text-xs text-zinc-500 dark:text-zinc-300 mt-1">{{ $text }}</p>
@endif

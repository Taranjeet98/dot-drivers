@props(['for' => null])

@if($for)
    @error($for)
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
    @enderror
@endif

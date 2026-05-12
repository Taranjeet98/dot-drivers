@props([
    'label' => null,
    'model' => null,
    'help' => null,
    'disabled' => false,
])

<div class="space-y-1">
    <label class="inline-flex items-center gap-2 cursor-pointer text-sm text-zinc-700 dark:text-zinc-200">
        <input
            type="checkbox"
            @if($model) wire:model.live="{{ $model }}" @endif
            @if($disabled) disabled @endif
            class="h-4 w-4 rounded border-zinc-300 dark:border-white/20 text-blue-600"
        />
        <span>{{ $label }}</span>
    </label>

    <x-form.help :text="$help" />
    <x-form.error :for="$model" />
</div>

@props([
    'label' => null,
    'model' => null,
    'rows' => 4,
    'placeholder' => '',
    'required' => false,
    'disabled' => false,
    'help' => null,
])

<div class="space-y-1">
    @if($label)
        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-200">
            {{ $label }} @if($required) <span class="text-red-500">*</span> @endif
        </label>
    @endif

    <textarea
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        @if($model) wire:model.defer="{{ $model }}" @endif
        @if($disabled) disabled @endif
        {{ $attributes->merge([
            'class' => 'w-full rounded-lg border border-zinc-200 dark:border-white/10 bg-white dark:bg-white/10
                        px-3 py-2 text-sm text-zinc-800 dark:text-white placeholder-zinc-400
                        focus:outline-none focus:ring-2 focus:ring-blue-500
                        disabled:opacity-60 disabled:cursor-not-allowed'
        ]) }}
    ></textarea>

    <x-form.help :text="$help" />
    <x-form.error :for="$model" />
</div>

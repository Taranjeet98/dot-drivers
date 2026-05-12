@props([
    'label' => null,
    'model' => null,
    'options' => [],      // ['C Corporation' => 'C Corporation', ...] OR ['c' => 'C Corp']
    'required' => false,
    'help' => null,
])

<div class="space-y-2">
    @if($label)
        <div class="text-sm font-medium text-zinc-700 dark:text-zinc-200">
            {{ $label }} @if($required) <span class="text-red-500">*</span> @endif
        </div>
    @endif

    <div class="flex flex-col sm:flex-row gap-4">
        @foreach($options as $value => $text)
            <label class="inline-flex items-center gap-2 cursor-pointer text-sm text-zinc-700 dark:text-zinc-200">
                <input
                    type="radio"
                    value="{{ $value }}"
                    @if($model) wire:model.live="{{ $model }}" @endif
                    class="h-4 w-4 text-blue-600 border-zinc-300 dark:border-white/20"
                />
                <span>{{ $text }}</span>
            </label>
        @endforeach
    </div>

    <x-form.help :text="$help" />
    <x-form.error :for="$model" />
</div>

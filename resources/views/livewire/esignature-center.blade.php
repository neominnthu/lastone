<div class="max-w-lg mx-auto mt-8 p-6 bg-white rounded shadow" aria-labelledby="esignature-heading">
    <h2 id="esignature-heading" tabindex="0" class="text-xl font-bold mb-4">{{ __('eSignature Center') }}</h2>
    <form wire:submit.prevent="submitSignature" aria-label="{{ __('Submit eSignature') }}">
        <div class="mb-4">
            <label for="signature" class="block text-gray-700">{{ __('Signature') }}</label>
            <textarea id="signature" wire:model="signature" class="w-full border rounded px-3 py-2" rows="3" required aria-required="true" aria-label="{{ __('Signature input') }}"></textarea>
        </div>
        <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded">{{ __('Submit') }}</button>
    </form>
    @if (session()->has('message'))
        <div role="alert" aria-live="polite" class="mt-4 p-2 bg-green-100 text-green-800 rounded">
            {{ session('message') }}
        </div>
    @endif
</div>

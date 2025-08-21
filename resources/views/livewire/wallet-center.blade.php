<div>
    {{-- Do your work, then step back. --}}
<div>
    <h2 id="wallet-heading" tabindex="0">{{ __('Wallet Balance') }}</h2>
    <div role="status" aria-live="polite" class="p-4 bg-gray-100 rounded">
        <span>{{ __('Your balance:') }}</span>
        <strong>{{ number_format($balance, 2) }}</strong>
    </div>
</div>

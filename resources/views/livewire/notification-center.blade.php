<div class="max-w-md mx-auto mt-8 p-4 bg-white rounded shadow" aria-labelledby="notification-heading">
    <h2 class="text-lg font-bold mb-2" id="notification-heading" tabindex="0">{{ __('Notifications') }}</h2>
    <ul aria-labelledby="notification-heading">
        @foreach($notifications as $note)
            <li class="mb-2 p-2 rounded"
                @if($note['type'] === 'success')
                    style="background-color: #d1fae5; color: #065f46;"
                @elseif($note['type'] === 'error')
                    style="background-color: #fee2e2; color: #991b1b;"
                @elseif($note['type'] === 'warning')
                    style="background-color: #fef3c7; color: #92400e;"
                @else
                    style="background-color: #bfdbfe; color: #1e3a8a;"
                @endif
                role="status" aria-live="polite">
                {{ __($note['message']) }}
            </li>
        @endforeach
    </ul>
</div>

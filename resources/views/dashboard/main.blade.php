@extends('layouts.app')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <livewire:wallet-center />
        <livewire:notification-center />
        <livewire:esignature-center />
        <livewire:pos-checkout />
    </div>
@endsection

<?php

namespace App\Livewire;

use Livewire\Component;

class NotificationCenter extends Component
{
    public $notifications = [];

    public function mount()
    {
        // Demo notifications, can be replaced with database-driven notifications
        $this->notifications = [
            ['message' => 'Welcome to the CCTV Master Portal!', 'type' => 'info'],
            ['message' => 'Your last order was delivered.', 'type' => 'success'],
            ['message' => 'Payment failed for invoice #123.', 'type' => 'error'],
            ['message' => 'Warranty expiring soon.', 'type' => 'warning'],
        ];
    }

    public function render()
    {
        return view('livewire.notification-center');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;

class OrdersTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.orders-table', [
            'orders' => Order::with('orderLines')
                ->latest()
                ->paginate(10)
        ]);
    }
}

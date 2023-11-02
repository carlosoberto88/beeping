<?php

namespace App\Console\Commands;

use App\Models\OrderLine;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CalculateOrderCost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:calculate-cost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calcula el costo total de todas las órdenes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return null
     */
    public function handle()
    {
        $totalCost = OrderLine::join('products', 'order_lines.product_id', '=', 'products.id')
            ->selectRaw('SUM(order_lines.qty * products.cost) as total_cost')
            ->pluck('total_cost')
            ->first();

        Log::info("El costo total de todas las órdenes es: $totalCost");
        $this->info("El costo total de todas las órdenes es: $totalCost");
    }
}

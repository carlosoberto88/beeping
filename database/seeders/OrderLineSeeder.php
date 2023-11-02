<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderLine;

class OrderLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderLine::factory(20)->create();
    }
}

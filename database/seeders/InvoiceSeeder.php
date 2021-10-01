<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        invoice::create([
            'number' =>1
        ]);
        
    }
}

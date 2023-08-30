<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethod = [
            [
                'name' => "Dana",
                'number_account' => "12345678966",
                'owner_name' => "BAZNAS",
                'category' => "E-WALLET"
            ],
            [
                'name' => "Bank Mandiri",
                'number_account' => "12345678966",
                'owner_name' => "BAZNAS",
                'category' => "BANK TRANSFER"
            ]
        ];

        collect($paymentMethod)->each(function ($m) {
            PaymentMethod::create($m);
        });
    }
}

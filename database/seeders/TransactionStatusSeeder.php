<?php

namespace Database\Seeders;

use App\Models\TransactionStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactionStatus = [
            [
                "name" => "CASH_ON_AMIL",
                "description" => "mustahik membayar ke amil zakat"
            ],
            [
                "name" => "CASH_ON_BAZNAS",
                "description" => "dana mustahik sudah di transfer ke baznas"
            ],
            [
                "name" => "WAITING_PAYMENT",
                "description" => "menunggu pembayaran zakat"
            ],
        ];

        collect($transactionStatus)->each(function ($m) {
            TransactionStatus::create($m);
        });
    }
}

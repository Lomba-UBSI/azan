<?php

namespace Database\Seeders;

use App\Models\TransactionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactionType = [
            [
                "name" => "zakat mal",
                "category" => "zakat",
                'image' => 'public\assets\images\mal.png'
            ],
            [
                "name" => "zakat penghasilan",
                "category" => "zakat",
                'image' => 'public\assets\images\penghasilan.png'
            ],
            [
                "name" => "zakat pertanian",
                "category" => "zakat",
                'image' => 'public\assets\images\pertanian.png'
            ],
            [
                "name" => "zakat fitrah",
                "category" => "zakat",
                'image' => 'public\assets\images\zakat fitrah.png'
            ],
            [
                "name" => "bayar fidyah",
                "category" => "fidyah",
                'image' => 'public\assets\images\bayar fidyah.png'
            ],
            [
                "name" => "donasi",
                "category" => "donasi",
                'image' => 'public\assets\images\bayar fidyah.png'
            ],
        ];

        collect($transactionType)->each(function ($tt) {
            TransactionType::create($tt);
        });
    }
}

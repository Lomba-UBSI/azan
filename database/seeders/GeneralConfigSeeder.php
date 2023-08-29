<?php

namespace Database\Seeders;

use App\Models\GeneralConfig;
use Illuminate\Database\Seeder;

class GeneralConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generalConfig = [
            [
                'code' => 'HARGA_EMAS',
                'value' => '1000000'
            ]
        ];

        collect($generalConfig)->each(function ($gc) {
            GeneralConfig::create($gc);
        });
    }
}

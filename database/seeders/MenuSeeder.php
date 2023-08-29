<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = [
            [
                "name" => 'beranda',
                "route" => 'beranda.index',
            ],
            [
                "name" => 'zakat',
                "type" => 'dropdown',
                "route" => 'zakat',
            ],
            [
                "name" => 'zakat mal',
                "route" => 'zakat.mal',
                "parent_id" => 2,
            ],
            [
                "name" => 'zakat fitrah',
                "route" => 'zakat.fitrah',
                "parent_id" => 2,
            ]
        ];

        collect($menu)->each(function ($m) {
            Menu::create($m);
        });
    }
}

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
                "route" => 'zakat.index',
            ],
            // [
            //     "name" => 'bayar fidyah',
            //     "route" => 'fidyah.index',
            // ],
            // [
            //     "name" => 'donasi',
            //     "route" => 'donasi.index',
            // ],
            // [
            //     "name" => 'distribusi',
            //     "route" => 'distribusi.index',
            // ],
        ];

        collect($menu)->each(function ($m) {
            Menu::create($m);
        });
    }
}

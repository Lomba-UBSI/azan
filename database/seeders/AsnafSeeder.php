<?php

namespace Database\Seeders;

use App\Models\Asnaf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsnafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asnaf = [
            [
                'name' => 'fakir',
                'description' => 'mereka yang hampir tidak memiliki apa-apa sehingga tidak mampu memenuhi kebutuhan pokok hidup.'
            ],
            [
                'name' => 'miskin',
                'description' => 'mereka yang memiliki harta namun tidak cukup untuk memenuhi kebutuhan dasar kehidupan.'
            ],
            [
                'name' => 'amil',
                'description' => 'mereka yang mengumpulkan dan mendistribusikan zakat.'
            ],
            [
                'name' => 'mualaf',
                'description' => 'mereka yang baru masuk Islam dan membutuhkan bantuan untuk menguatkan dalam tauhid dan syariah.'
            ],
            [
                'name' => 'riqab',
                'description' => 'budak atau hamba sahaya yang ingin memerdekakan dirinya.'
            ],
            [
                'name' => 'gharimin',
                'description' => 'mereka yang berhutang untuk kebutuhan hidup dalam mempertahankan jiwa dan izzahnya.'
            ],
            [
                'name' => 'fisabillilah',
                'description' => 'mereka yang berjuang di jalan Allah dalam bentuk kegiatan dakwah, jihad dan sebagainya.'
            ],
            [
                'name' => 'ibnusabil',
                'description' => 'mereka yang kehabisan biaya di perjalanan dalam ketaatan kepada Allah.'
            ],
        ];
        collect($asnaf)->each(function ($m) {
            Asnaf::create($m);
        });
    }
}

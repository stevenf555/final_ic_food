<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients') -> insert([
            [
                'name' => "Bawang Merah",
                'image' => "bawangMerah.jpg"
            ],
            [
                'name' => "Bawang Putih",
                'image' => "bawangPutih.jpg"
            ],
            [
                'name' => "Cabai Rawit",
                'image' => "cabaiRawit.jpg"
            ],
            [
                'name' => "Tomat",
                'image' => "tomat.jpg"
            ],
            [
                'name' => "Telur",
                'image' => "telur.jpg"
            ],
            [
                'name' => "Kecap Manis",
                'image' => "kecapManis.jpg"
            ],
            [
                'name' => "Garam",
                'image' => "garam.jpg"
            ],
            [
                'name' => "Telur",
                'image' => "telur.jpg"
            ],
            [
                'name' => "Minyak Goreng",
                'image' => "minyakGoreng.jpg"
            ],
            [
                'name' => "Bawang Bombay",
                'image' => "bawangBombay.jpg"
            ],
            [
                'name' => "Kunyit",
                'image' => "kunyit.jpg"
            ],
            [
                'name' => "Daun Jeruk",
                'image' => "daunJeruk.jpg"
            ],
            [
                'name' => "Cengkeh",
                'image' => "cengkeh.jpg"
            ],
            [
                'name' => "Wijen",
                'image' => "wijen.jpg"
            ],
            [
                'name' => "Kencur",
                'image' => "kencur.jpg"
            ],
            [
                'name' => "Lengkuas",
                'image' => "lengkuas.jpg"
            ],
            [
                'name' => "Jeruk Nipis",
                'image' => "jerukNipis.jpg"
            ],
            [
                'name' => "Daun Salam",
                'image' => "daunSalam.jpg"
            ],
            [
                'name' => "Serai",
                'image' => "serai.jpg"
            ],
            [
                'name' => "Kayu Manis",
                'image' => "kayuManis.jpg"
            ],
            [
                'name' => "Asam Jawa",
                'image' => "asamJawa.jpg"
            ],
            [
                'name' => "Serai",
                'image' => "serai.jpg"
            ],
            [
                'name' => "Lada Hitam",
                'image' => "ladaHitam.jpg"
            ],
            [
                'name' => "Merica",
                'image' => "merica.jpg"
            ],
            [
                'name' => "Daging",
                'image' => "daging.jpg"
            ],
            [
                'name' => "Ikan",
                'image' => "ikan.jpg"
            ],
            [
                'name' => "Ayam",
                'image' => "ayam.jpg"
            ],
        ]);
    }
}

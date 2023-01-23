<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food') -> insert([
            [
                'name' => "Mie Aceh",
                'city' => "Aceh",
                'durationCook' => "30",
                'difficultyCook' => "Medium",
                'image' => "mieAceh.jpg",
                'description' => "Mie Aceh merupakan makanan khas daerah provinsi Aceh yang menggunakan mie kuning tebal, aneka bumbu rempah dan potongan daging atau seafood seperti udang atau kepiting. Makanan khas Aceh ini umumnya dimasak dengan cara di goreng, tumis dan juga rebus."
            ],
            [
                'name' => "Rendang",
                'city' => "Sumatera Barat",
                'durationCook' => "50",
                'difficultyCook' => "Hard",
                'image' => "rendang.jpg",
                'description' => "Makanan yang satu ini nih, yang pernah dinobatkan sebagai makanan paling enak di dunia. Rendang merupakan makanan khas Sumatera Barat yang terbuat dari daging sapi dengan santan dan rempah-rempah yang dimasak dalam waktu lama. "
            ],
            [
                'name' => "Kerak Telor",
                'city' => "DKI Jakarta",
                'durationCook' => "20",
                'difficultyCook' => "Easy",
                'image' => "kerakTelor.jpg",
                'description' => "Makanan khas daerah DKI Jakarta ini sering ditemukan ketika ada festival, seperti saat Pekan Raya Jakarta. Makanan khas Betawi ini terbuat dari beras ketan, telur ayam/bebek, ebi yang ditaburi bawang goreng dan kelapa sangrai. "
            ],
            [
                'name' => "Karedok",
                'city' => "Jawa Barat",
                'durationCook' => "40",
                'difficultyCook' => "Medium",
                'image' => "karedok.jpg",
                'description' => "Karedok merupakan makanan khas daerah Jawa Barat yang terbuat dari berbagai sayuran mentah seperti kacang panjang, tauge, kol, mentimun dan daun kemangi yang disiram dengan saus kacang."
            ],
            [
                'name' => "Lumpia",
                'city' => "Jawa Tengah",
                'durationCook' => "40",
                'difficultyCook' => "Hard",
                'image' => "lumpia.jpg",
                'description' => "Lumpia adalah makanan khas daerah Jawa Tengah khususnya di Kota Semarang. Lumpia seringkali dijadikan oleh-oleh ketika berkunjung ke kota Semarang. Lumpia sendiri punya berbagai macam isian, mulai dari ayam, telur ikan, sayur hingga udang."
            ],
            [
                'name' => "Gudeg",
                'city' => "Yogyakarta",
                'durationCook' => "50",
                'difficultyCook' => "Hard",
                'image' => "gudeg.jpeg",
                'description' => "Nasi Gudeg merupakan olahan yang terbuat dari nangka muda yang dimasak dengan santan. Nasi Gudeg juga biasanya disajikan dengan lauk seperti ayam, telur, tahu/tempe bacem dan sambel goreng krecek."
            ],
            [
                'name' => "Rujak Cingur",
                'city' => "Jawa Timur",
                'durationCook' => "50",
                'difficultyCook' => "Hard",
                'image' => "rujakCingur.jpeg",
                'description' => "Rujak Cingur ini berbeda dengan rujak pada umumnya. Rujak Cingur menggunakan Cingur alias mulut sapi yang disajikan bersama sayuran dengan bumbu kacang siram dari petis udang, gula merah, dan ditaburi bawang goreng serta pisang klutuk."
            ],
            [
                'name' => "Ayam Betutu",
                'city' => "Bali",
                'durationCook' => "120",
                'difficultyCook' => "Hard",
                'image' => "ayamBetutu.jpg",
                'description' => "Ayam Betutu sendiri merupakan olahan ayam dengan bumbu betutu, bumbu khas bali yang terdiri dari daun jeruk, sereh, salam, dan rempah lain yang membuat citarasa Ayam Betutu menjadi lezat."
            ],
            [
                'name' => "Ayam Taliwang",
                'city' => "Nusa Tenggara Barat",
                'durationCook' => "100",
                'difficultyCook' => "Hard",
                'image' => "ayamTaliwang.jpg",
                'description' => "Ayam Taliwang merupakan makanan khas Lombok, Nusa Tenggara Barat yang berbahan dasar Ayam dengan bumbu cabai merah, bawang merah, bawang putih dan lainnya. Ayam Taliwang biasanya disajikan bersama dengan nasi hangat dan sayur pelengkap seperti plecing kangkung."
            ],
            [
                'name' => "Soto Banjar",
                'city' => "Kalimantan Selatan",
                'durationCook' => "100",
                'difficultyCook' => "Medium",
                'image' => "sotoBanjar.jpg",
                'description' => "Soto Banjar adalah jenis soto khas Suku Banjar yang berasal dari Kalimantan Selatan. Soto Banjar merupakan soto berkuah bening dengan rempah-rempah seperti pala, kayu manis, cengkeh yang ditaburi suwiran ayam, perkedel kentang dan telur rebus. Uniknya, Soto Banjar dinikmati dengan ketupat sebagai karbohidrat utamanya. "
            ],
            [
                'name' => "Bubur Manado",
                'city' => "Sulawesi Utara",
                'durationCook' => "50",
                'difficultyCook' => "Hard",
                'image' => "buburManado.jpg",
                'description' => "Bubur Manado atau Tinutan adalah makanan khas Sulawesi Utara yang sangat populer. Makanan ini berasal dari daerah Kota Manado. Dalam penyajiannya, Bubur Manado dicampur dengan berbagai jenis sayuran seperti kangkung dan bayam bersamaan dengan lauk ikan cakalang serta sambal roa."
            ],
            [
                'name' => "Sop Konro",
                'city' => "Sulawesi Selatan",
                'durationCook' => "120",
                'difficultyCook' => "Hard",
                'image' => "sopKonro.jpg",
                'description' => "Sop Konro merupakan olahan sop daging iga sapi dengan ciri khas kuah berwarna coklat yang berasal dari rempah-rempah yang lezat dan menyegarkan."
            ],
            [
                'name' => "Sate Bandeng",
                'city' => "Banten",
                'durationCook' => "100",
                'difficultyCook' => "Hard",
                'image' => "sateBandeng.jpg",
                'description' => "Sate Bandeng memiliki ukuran yang jumbo dan bertekstur lembut mirip dengan otak-otak. Dalam prosesnya, sate bandeng diolah dengan memisahkan duri dan daging ikan, dihancurkan, diberi rempah, dimasukan kembali ke dalam kulit ikan dan dimasak hingga matang sehingga sate bandeng lebih mudah untuk disantap."
            ],
            [
                'name' => "Mie Gomak",
                'city' => "Sumatera Utara",
                'durationCook' => "70",
                'difficultyCook' => "Medium",
                'image' => "mieGomak.jpg",
                'description' => "Mi gomak adalah masakan khas Batak berupa mi lidi rebus berkuah santan bumbu kuning. Mi gomak biasanya disantap saat sarapan. Rasa mi gomak bakal lebih nikmat dan otentik kalau menggunakan andaliman, merica khas Batak."
            ],
            [
                'name' => "Mie Bangka",
                'city' => "Bangka Belitung",
                'durationCook' => "40",
                'difficultyCook' => "Medium",
                'image' => "mieBangka.jpg",
                'description' => "Mie Bangka adalah makanan khas Kepulauan Bangka Belitung yang sangat populer. Nggak hanya di tempat asalnya, bahkan merambah sampai ke kota besar lainnya. Menu Mie Bangka ini terbuat dari mie ditambahkan potongan daging dan disiram dengan kuah bening."
            ],
            [
                'name' => "Palumara",
                'city' => "Sulawesi Tengah",
                'durationCook' => "40",
                'difficultyCook' => "Hard",
                'image' => "palumara.jpg",
                'description' => "Palumara, makanan khas Sulawesi Tengah yang merupakan sup ikan dengan citara pedas dan asam. Palumara biasanya menggunakan ikan kembung atau ikan bandeng yang dimasak dengan aneka rempah-rempah."
            ],
        ]);
    }
}

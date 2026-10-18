<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Nasi Ayam Geprek',
                'category' => 'Makanan',
                'cook_time' => 40,
                'image' => 'nasiayamgeprek.jpg',
                'ingredients' => "2 piring nasi putih hangat\n300 gr ayam fillet, potong sesuai selera\n5 sdm tepung terigu\n2 sdm tepung maizena\n1 butir telur, kocok\n1 sdt garam\n1/2 sdt merica bubuk\nMinyak goreng secukupnya\nSambal geprek: 10 buah cabai rawit, 3 buah cabai merah, 3 siung bawang putih, 1/2 sdt garam, 1/2 sdt gula",
                'steps' => "Lumuri ayam dengan garam dan merica, diamkan 10 menit.\nCampur tepung terigu dan maizena, celupkan ayam ke telur kocok lalu gulingkan di campuran tepung.\nGoreng ayam dalam minyak panas hingga keemasan dan renyah, angkat dan tiriskan.\nUleg kasar cabai rawit, cabai merah, bawang putih, garam, dan gula untuk membuat sambal.\nTaruh ayam goreng di atas sambal, lalu geprek (tekan) hingga agak pecah dan bumbu menempel.\nSajikan di atas nasi hangat bersama lalapan.",
            ],
            [
                'name' => 'Nasi Goreng Bakso',
                'category' => 'Makanan',
                'cook_time' => 20,
                'image' => 'nasigorengbakso.jpg',
                'ingredients' => "2 piring nasi putih dingin\n8 butir bakso sapi, iris tipis\n1 butir telur\n3 siung bawang putih\n4 siung bawang merah\n3 buah cabai merah\n2 sdm kecap manis\n1 sdt garam\n3 sdm minyak goreng\nDaun bawang dan bawang goreng untuk taburan",
                'steps' => "Haluskan bawang putih, bawang merah, dan cabai merah.\nPanaskan minyak, tumis bumbu halus hingga harum.\nMasukkan irisan bakso, aduk hingga sedikit kecokelatan.\nGeser bumbu ke pinggir wajan, orak-arik telur hingga matang.\nMasukkan nasi, kecap manis, dan garam, aduk rata hingga bumbu meresap.\nTaburi daun bawang dan bawang goreng, sajikan hangat.",
            ],
            [
                'name' => 'Rendang Daging Sapi',
                'category' => 'Makanan',
                'cook_time' => 180,
                'image' => 'rendang.jpg',
                'ingredients' => "1 kg daging sapi\n1 butir kelapa (ambil santannya)\n8 siung bawang merah\n5 siung bawang putih\n10 buah cabai merah\n3 cm lengkuas\n2 batang serai\n5 lembar daun jeruk\n1 lembar daun kunyit\n2 buah asam kandis\n3 cm jahe\n3 butir kemiri\n1 sdt ketumbar\n1 sdt garam",
                'steps' => "Haluskan bawang merah, bawang putih, cabai, lengkuas, jahe, kemiri, dan ketumbar.\nCampur daging, bumbu halus, serai, daun jeruk, daun kunyit, asam kandis, dan santan dalam panci.\nMasak dengan api kecil sambil sesekali diaduk.\nLanjutkan hingga santan menyusut dan bumbu mengering kehitaman.\nAngkat dan sajikan bersama nasi hangat.",
            ],
            [
                'name' => 'Bakso Telur',
                'category' => 'Makanan',
                'cook_time' => 60,
                'image' => 'baksotelur.jpg',
                'ingredients' => "300 gr daging sapi giling\n100 gr tepung tapioka\n4 siung bawang putih, haluskan\n1 sdt garam\n1/2 sdt merica bubuk\n6 butir telur puyuh atau 3 butir telur ayam rebus, kupas\n1 liter kaldu sapi\nMi kuning, sawi, dan bawang goreng untuk pelengkap",
                'steps' => "Campur daging giling, tepung tapioka, bawang putih, garam, dan merica hingga adonan kalis.\nAmbil sedikit adonan, pipihkan di telapak tangan, taruh telur rebus di tengahnya, lalu bulatkan dan tutup rapat.\nRebus bakso dalam air mendidih hingga mengapung, angkat dan tiriskan.\nPanaskan kaldu sapi, masukkan bakso telur dan masak 5 menit.\nSajikan dengan mi, sawi, dan taburan bawang goreng.",
            ],
            [
                'name' => 'Bakso Urat',
                'category' => 'Makanan',
                'cook_time' => 75,
                'image' => 'baksourat.jpg',
                'ingredients' => "300 gr daging sapi giling\n150 gr urat sapi, cincang kasar\n100 gr tepung tapioka\n5 siung bawang putih, haluskan\n1 sdt garam\n1/2 sdt merica bubuk\n1 butir putih telur\n1 liter kaldu sapi\nMi, sawi, dan bawang goreng untuk pelengkap",
                'steps' => "Rebus urat sapi hingga empuk, tiriskan lalu cincang kasar.\nCampur daging giling, urat, tepung tapioka, bawang putih, garam, merica, dan putih telur hingga kalis.\nBentuk adonan bulat-bulat dengan tangan atau sendok.\nRebus dalam air mendidih hingga bakso mengapung, lalu tiriskan.\nPanaskan kaldu sapi dan masukkan bakso urat.\nSajikan dengan mi, sawi, dan bawang goreng.",
            ],
            [
                'name' => 'Pindang Patin',
                'category' => 'Makanan',
                'cook_time' => 45,
                'image' => 'pindangpatin.jpg',
                'ingredients' => "500 gr ikan patin, potong-potong\n1 liter air\n5 siung bawang merah\n3 siung bawang putih\n3 cm kunyit\n2 cm jahe\n2 batang serai, memarkan\n3 lembar daun salam\n5 buah cabai rawit\n2 buah tomat, potong\n1 buah nanas muda, potong (opsional)\nDaun kemangi\n1 sdt garam, 1 sdt gula, 1 buah jeruk nipis",
                'steps' => "Lumuri ikan patin dengan jeruk nipis dan sedikit garam, diamkan 10 menit.\nHaluskan bawang merah, bawang putih, kunyit, dan jahe.\nTumis bumbu halus bersama serai dan daun salam hingga harum.\nTuang air, didihkan, lalu masukkan potongan ikan patin.\nTambahkan cabai rawit, tomat, nanas, garam, dan gula, masak hingga ikan matang.\nTambahkan daun kemangi, sajikan hangat dengan nasi putih.",
            ],
            [
                'name' => 'Es Dogan',
                'category' => 'Minuman',
                'cook_time' => 15,
                'image' => 'dogan.jpg',
                'ingredients' => "1 butir kelapa muda, kerok dagingnya\n200 ml air kelapa muda\n3 sdm sirup merah atau gula cair\n4 sdm susu kental manis\nEs serut atau es batu secukupnya\nBuah nangka atau selasih (opsional)",
                'steps' => "Kerok daging kelapa muda dan siapkan air kelapanya.\nMasukkan daging kelapa ke dalam gelas.\nTuang air kelapa, sirup, dan susu kental manis.\nTambahkan es serut atau es batu.\nAduk perlahan dan sajikan dingin.",
            ],
            [
                'name' => 'Es Cendol Dawet',
                'category' => 'Minuman',
                'cook_time' => 25,
                'image' => 'escendoldawet.jpg',
                'ingredients' => "100 gr cendol hijau\n200 ml santan\n100 gr gula merah\n1 lembar daun pandan\nEs batu secukupnya\nSejumput garam",
                'steps' => "Rebus gula merah dengan daun pandan dan sedikit air, lalu saring.\nMasak santan dengan garam hingga mendidih, dinginkan.\nSiapkan cendol dalam gelas.\nTuang santan dan sirup gula merah.\nTambahkan es batu dan sajikan dingin.",
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}

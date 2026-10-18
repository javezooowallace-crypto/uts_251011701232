# UTS Rekayasa Web - Portal Resep Masakan (NIM akhir 2)

Tabel: `recipes` (id, name, ingredients, steps, cook_time, image, category)

Folder ini berisi **file aplikasi saja** (tanpa `vendor/`). Tempelkan ke proyek Laravel baru.

## Langkah

1. Buat proyek Laravel baru (ganti NIM dengan NIM kamu):

   ```bash
   composer create-project laravel/laravel UTS_NIM
   ```

2. Buat database `db_uts_nim` di MySQL (ganti nim dengan NIM kamu), lalu edit `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_uts_nim
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. Salin semua isi folder ini ke dalam proyek Laravel, timpa file yang sama
   (`routes/web.php`, `database/seeders/DatabaseSeeder.php`):

   - `app/Models/Recipe.php`
   - `app/Http/Controllers/RecipeController.php`
   - `database/migrations/2026_10_18_000000_create_recipes_table.php`
   - `database/seeders/RecipeSeeder.php` dan `DatabaseSeeder.php`
   - `routes/web.php`
   - `resources/views/` (layouts, home, recipes)
   - `public/assets/images/` (8 gambar resep)

4. Salin Bootstrap yang sudah didownload ke:

   ```
   public/Bootstrap/css/bootstrap.min.css
   public/Bootstrap/js/bootstrap.bundle.min.js
   ```

5. Jalankan:

   ```bash
   php artisan migrate:fresh --seed
   php artisan serve
   ```

   Buka http://127.0.0.1:8000

## Halaman

| URL | Fungsi |
| --- | --- |
| `/` | Beranda + 3 resep pilihan |
| `/recipes` | Daftar resep (card + filter kategori) |
| `/recipes/{id}` | Detail resep (bahan dan langkah) |

## Catatan

- Gambar di `public/assets/images/` adalah gambar placeholder. Ganti dengan foto asli
  dengan nama file yang sama, atau ubah kolom `image` di `RecipeSeeder.php`.
- Upload ke GitHub dengan nama `UTS_NAMA_NIM_KODEKELAS`.

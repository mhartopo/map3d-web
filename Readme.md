### Cara menjalankan aplikasi

Persiapan:
- Install PHP 7.2.x
- Intall MySQL atau MariaDB
- Install [Composer](https://getcomposer.org/doc/00-intro.md#installation-windows)

Cara menjalankan:
- Buat database dengan nama map3d
- copy .env.example ke .env , bisa menggunakan command `cp .env.example .env`
- Install dependecy yang dibutuhkan dengan `composer install`, tunggu sampai proses selesai
- Generate key dengan `php artisan key:generate`
- Migrate tabel yang dibutuhkan dengan `php artisan migrate`
- (opsional) Seed data dummy dengan menjalankan `php artisan db:seed`
- Buka http://localhost:8000

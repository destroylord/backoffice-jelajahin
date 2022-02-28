### Jelajahin Backoffice

#### *Konfigurasi*

1. Ambil source dengan open terminal seperti ini ``git clone git@github.com:destroylord/backoffice-jelajahin.git``
2. Masih tetap diterminal, Sekarang install composer dengan mengetikkan ``composer install && composer update --ignore-platform-reqs``
3. Kemudian anda membuat file .env seperti ini ``cp .env.example .env``
4. Buatlah nama database pada PMA(phpMyAdmin) kemudian setting file .env ``DB_DATABASE={sesuaikan dengan nama database yang anda buat}``
5. Kemudian anda generate key dengan ketikkan perintah pada terminal seperti ini ``php artisan key:generate``
6. Migrate semua database dengan perintah ``php artisan migrate``
7. Terakhir jalankan aplikasi ``php artisan serve``


**NOTE:** Gunakan versi [PHP8](https://www.php.net/downloads "PHP8")

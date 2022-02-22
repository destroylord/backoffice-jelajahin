### Jelajahin Backoffice

#### Konfigurasi

1. Ambil source dengan open terminal seperti ini ``git clone git@github.com:destroylord/backoffice-jelajahin.git``
2. Kemudian anda membuat file .env seperti ini ``cp .env.example .env``
3. Buatlah nama database pada PMA(phpMyAdmin) kemudian setting file .env ``DB_DATABASE={sesuaikan dengan nama database yang anda buat}``
4. Kemudian anda generate key dengan ketikkan perintah pada terminal seperti ini ``php artisan key:generate``
5. Migrate semua database dengan perintah ``php artisan migrate``
6. Terakhir jalankan aplikasi ``php artisan serve``


**NOTE:** Gunakan versi [PHP8](http://example.com/ "PHP8")

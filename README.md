# Konfigurasi
Setelah mendownload project ini dari github, lakukan setting database dengan cara
membuka file .env dan sesuaikan konfigurasi database anda. Contoh

```php
DB_DATABASE=surat
DB_USERNAME=root
DB_PASSWORD=passwordmysqlanda
```

# Migrasi Database
Lakukan migrate untuk meng generate tabel, dengan menjalankan perintah dibawah ini
```bash
php artisan migrate --seed
```

Untuk menjalankan aplikasi, lakukan dengan perintah 

```bash
php artisan serve
```
Lalu akses http://localhost:8000 via browser 

# Pengguna
Untuk masuk ke halaman admin login dengan menggunakan
username : admin
password : 123456
Akun Admin :
Email : admin@admin.com
Password : 12345678

Akun User : Bisa diregister sendiri
Atau
Email : fiona@gmail.com
Password : 12345678

Cara run :
1. Jika download zip silahkan "Extract File"
2. Nyalakan Xampp Apache dan MySQL
3. Buat database di phpmyadmin dengan nama : bookingdb
4. Buka terminal
5. ketik "Composer install"
6. Ketik "cp .env.example .env"
7. Pada file .env isi DB_DATABASE dengan "bookingdb"
8. Pada file .env isi DB_USERNAME dengan "root"
9. Ketik "php artisan migrate" pada terminal
10. Ketik "php artisan db:seed" pada terminal
11. Ketik "php artisan serve" pada terminal
12. Tekan link yang diberikan contoh : http://127.0.0.1:8000


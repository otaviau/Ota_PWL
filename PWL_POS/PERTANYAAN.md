<b>NAMA: OTAVIA ULANDARI <br>
NIM: 244107020053 <br>
KELAS: TI2F</b>
<br>
<br>
1.Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?
<br>
<b>Jawab:</b> APP_KEY berfungsi sebagai kunci enkripsi utama Laravel yang digunakan untuk mengamankan data seperti session, cookie, dan proses enkripsi lainnya.
<br>
<br>
2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?
<br>
<b>Jawab:</b> Nilai APP_KEY digenerate menggunakan perintah: php artisan key:generate.
<br>
<br>
3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?
<br>
<b>Jawab:</b> Secara default terdapat 3 file migrasi, yaitu untuk tabel users, password reset tokens, dan failed jobs.
<br>
<br>
4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut?
<br>
<b>Jawab:</b> $table->timestamps(); berfungsi untuk membuat kolom created_at dan updated_at.
<br>
<br>
5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?
<br>
<b>Jawab:</b> $table->id(); menghasilkan tipe data bigint unsigned yang menjadi primary key dan auto increment.
<br>
<br>
6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ?
<br>
<b>Jawab:</b> $table->id(); membuat kolom bernama id, sedangkan $table->id('level_id'); membuat primary key dengan nama level_id.
<br>
<br>
7. Pada migration, Fungsi ->unique() digunakan untuk apa?
<br>
<b>Jawab:</b> ->unique() digunakan untuk memberi batasan agar nilai pada kolom tidak boleh sama (unik).
<br>
<br>
8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ?
<br>
<b>Jawab:</b> Karena level_id pada m_level bertipe unsigned big integer (primary key), maka pada m_user harus menggunakan unsignedBigInteger agar tipe data sama untuk relasi foreign key.
<br>
<br>
9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');?
<br>
<b>Jawab:</b> Class Hash digunakan untuk mengenkripsi password. Hash::make('1234'); berarti mengubah password menjadi bentuk hash sebelum disimpan ke database.
<br>
<br>
10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?
<br>
<b>Jawab:</b> Tanda tanya (?) digunakan sebagai parameter binding untuk mencegah SQL injection dan menggantikan nilai secara aman pada query.
<br>
<br>
11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = ‘m_user’; dan protected $primaryKey = ‘user_id’; ?
<br>
<b>Jawab:</b> protected $table = 'm_user'; untuk menentukan nama tabel yang digunakan model, dan protected $primaryKey = 'user_id'; untuk menentukan primary key karena tidak menggunakan default id.
<br>
<br>
12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke
database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan
<br>
<b>Jawab:</b> Eloquent ORM lebih mudah digunakan karena berbasis object, sintaks lebih sederhana, dan mendukung relasi antar tabel dengan lebih rapi.
<br>
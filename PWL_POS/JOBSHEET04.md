<b>NAMA: OTAVIA ULANDARI <br>
NIM: 244107020053 <br>
KELAS: TI2F</b>
<br>
<h3>JOBSHEET 04</h3>
<br>
Hasil dari praktikum 01:
Sebelum diubah:
![PRAKTIKUM 01](screnshoot/js4/p1_1.png)
Setelah menghapus array password:
![PRAKTIKUM 01](screnshoot/js4/p1_2.png)
<br>
Hasil dari praktikum 02.1:
![PRAKTIKUM 02.1](screnshoot/js4/p2_1_1.png)
Ketiga kode pada josheet praktikum 2.1.1 sama-sama bertujuan melakukan query pada model di Laravel.
`UserModel::firstWhere('level_id', 1)` benar dan langsung mengambil data pertama dengan `level_id = 1`.
`UserModel::where('level_id', 1)->firstWhere()` salah karena `firstWhere()` harus memiliki parameter.
`UserModel::where(1)` juga salah karena `where()` harus berisi nama kolom dan nilai.
<br>
![PRAKTIKUM 02.1](screnshoot/js4/p2_1_2.png)
Kode pada langkah ke 2 yang menghasilkan view di atas, memanggil metode `findOr` pada model Laravel untuk mencari data User dengan ID = 1, tetapi hanya mengambil kolom `username` dan `nama`. Jika data dengan ID tersebut tidak ditemukan, maka fungsi callback akan dijalankan yang memanggil `abort(404)` sehingga aplikasi mengembalikan HTTP 404 (Not Found). Seperti hasil yang diberikan oleh langkah ke 10:
![PRAKTIKUM 02.1](screnshoot/js4/p2_1_3.png)
<br>
Hasil dari praktikum 2.2:
![PRAKTIKUM 02.2](screnshoot/js4/p2_2_1.png)
![PRAKTIKUM 02.2](screnshoot/js4/p2_2_2.png)
Kesimpulan pada praktikum 2.2 adalah: `findOrFail(1)` mencari data User berdasarkan primary key (ID = 1) dan akan otomatis melempar exception jika data tidak ditemukan.
`firstOrFail()` digunakan setelah query `where`, sehingga ia mengambil record pertama yang cocok dengan kondisi `username = 'manager9'`. Jika tidak ada data yang cocok, keduanya akan melempar ModelNotFoundException yang biasanya otomatis menjadi HTTP 404 di Laravel seperti gambar ke 2 di atas.

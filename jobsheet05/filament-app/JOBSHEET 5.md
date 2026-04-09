# Laporan Filament

**Nama:** Otavia Ulandari  
**NIM:** 244107020053  
**Kelas:** TI2F  

---

## Hasil Install Filament
![Install Filament](screnshoot/installfilament.png)

## Hasil Dashboard Filament
![Dashboard Filament](screnshoot/dashboardfilament.png)

## Hasil Resource User
![Resource Filament](screnshoot/resourcefilament.png)

## Hasil Form Create User
![Create User Filament](screnshoot/createuserfillament.png)

## Hasil Menampilkan Data / List User
![Show List User Filament](screnshoot/userlist.png)

## Hasil Mengubah Icon Menu User
![Change Icon User Filament](screnshoot/changeicon.png)

---

## I. Analisis & Diskusi

### 1. Mengapa Filament dapat membuat CRUD tanpa banyak coding?
Filament memungkinkan pembuatan CRUD secara cepat karena menyediakan resource, form, dan table otomatis berdasarkan model Laravel. Dengan adanya komponen siap pakai dan konvensi standar Laravel, developer tidak perlu menulis banyak kode untuk operasi create, read, update, dan delete.

### 2. Apa perbedaan Form Schema dan Table Schema?
- **Form Schema:** digunakan untuk mengatur tampilan dan validasi form input saat menambah atau mengubah data.  
- **Table Schema:** digunakan untuk menampilkan data dalam bentuk tabel, termasuk fitur filter, sort, dan pagination.  

Secara sederhana, Form Schema berfokus pada input, sedangkan Table Schema berfokus pada output data.

### 3. Bagaimana jika kita ingin menambahkan validasi email unik?
Validasi email unik dapat ditambahkan dengan menggunakan rule `unique()` pada Form Schema. Dengan cara ini, sistem secara otomatis menolak email yang sudah terdaftar, sehingga mengurangi kesalahan input dan menjaga integritas data.

### 4. Mengapa password tidak perlu kita hash manual?
Pada Filament, field password telah dilengkapi dengan mekanisme hashing otomatis melalui mutator atau handler khusus. Developer tidak perlu menulis kode tambahan untuk mengamankan password, sehingga keamanan data pengguna tetap terjaga.

---

## Hasil View Menu Categories
![View Categories](screnshoot/categorieslistnone.png)

## Hasil View Form Categories
![Form Categories](screnshoot/categoriesform.png)

## Hasil View List Categories
![List Categories](screnshoot/categorieslist.png)

---

## J. Analisis & Diskusi

### 1. Mengapa kita perlu `$fillable`?
Properti `$fillable` pada Laravel digunakan untuk melindungi model dari mass assignment. Dengan mendefinisikan field yang boleh diisi secara massal, kita mencegah pengguna atau kode berbahaya menulis ke kolom yang sensitif, seperti `is_admin` atau `password`, sehingga keamanan data lebih terjamin.

### 2. Apa fungsi `$casts` pada Laravel?
`$casts` berfungsi untuk mengubah tipe data kolom secara otomatis ketika mengambil atau menyimpan data di model. Contohnya:  
- Kolom `is_active` di-cast menjadi boolean.  
- Kolom `published_at` di-cast menjadi datetime.  

Dengan ini, developer tidak perlu melakukan konversi manual saat membaca data dari database.

### 3. Apa perbedaan integer biasa dengan foreign key?
- **Integer biasa:** hanya menyimpan angka tanpa relasi khusus.  
- **Foreign key:** juga berupa integer, tetapi memiliki hubungan dengan primary key di tabel lain. Foreign key memastikan integritas referensial, sehingga data terkait tidak bisa sembarangan dihapus atau diubah tanpa menyesuaikan tabel yang berhubungan.

### 4. Bagaimana jika category dihapus tetapi masih ada post?
Jika category dihapus tetapi masih ada post yang terkait, akan terjadi pelanggaran integritas database. Laravel menawarkan beberapa opsi:  
- `onDelete('cascade')` → otomatis menghapus post terkait.  
- `onDelete('set null')` → kolom `category_id` pada post di-set null.  
- Tidak menetapkan aksi → akan muncul error, dan penghapusan category ditolak.
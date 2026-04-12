# Laporan Filament

**Nama:** Otavia Ulandari  
**NIM:** 244107020053  
**Kelas:** TI2F  

---

## Hasil Membuat Resource Post
![Membuat Resource Post](PraktikumPWL/screnshoot/js6/resourcepost.png)

## Hasil Membuat Text Input
![Membuat Text Input](PraktikumPWL/screnshoot/js6/textinputpost.png)

## Hasil Membuat Select yang Berelasi dengan Category
![Select - Category](PraktikumPWL/screnshoot/js6/selectcategories.png)

## Hasil Membuat Field Color Picker
![Membuat Field Color Picker](PraktikumPWL/screnshoot/js6/colorpicker.png)

## Hasil Membuat Markdown
![Membuat Markdown](PraktikumPWL/screnshoot/js6/markdown.png)

## Hasil Membuat Alternatif Markdown
![Alternatif Markdown](PraktikumPWL/screnshoot/js6/alternatifmarkdown.png)

## Hasil Membuat File Upload
![Membuat File Upload](PraktikumPWL/screnshoot/js6/fileupload.png)

## Hasil Membuat Tags
![Tags](PraktikumPWL/screnshoot/js6/tags.png)

## Hasil Membuat Check Box
![Check Box](PraktikumPWL/screnshoot/js6/checkbox.png)

## Hasil Membuat Date Picker
![Date Picker](PraktikumPWL/screnshoot/js6/datepickder.png)

## Hasil View List Post
![List Post](PraktikumPWL/screnshoot/js6/listpost.png)

Analisis Diskusi
1. Mengapa perlu storage:link
storage:link digunakan untuk menghubungkan folder penyimpanan (storage/app/public) ke folder publik (public/storage) agar file upload (misalnya gambar dari Filament) bisa diakses melalui browser.

2. Fungsi $casts untuk field JSON
$casts berfungsi mengubah data JSON di database menjadi array PHP secara otomatis, dan sebaliknya saat disimpan. Ini memudahkan pengolahan data tanpa perlu json_encode atau json_decode.

3. Mengapa menggunakan category.name bukan category_id
Karena category.name menampilkan data yang lebih jelas dan mudah dipahami (misalnya nama kategori), sedangkan category_id hanya berupa angka ID yang kurang informatif.

4. Perbedaan RichEditor dan MarkdownEditor
RichEditor adalah editor visual (WYSIWYG) yang mudah digunakan tanpa perlu syntax, sedangkan MarkdownEditor menggunakan format teks khusus (Markdown) yang lebih ringan tetapi memerlukan pemahaman penulisan syntax.



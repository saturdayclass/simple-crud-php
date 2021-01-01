<?php
  
  /* Ini adalah variable koneksi, yang digunakan untuk mengkoneksikan database ke halaman web kita.
    adapun beberapa parameter yang dibutuhkan untuk menjalankan koneksi dengan baik yaitu
    
    1. Host kita, jika teman-teman menggunakan xampp atau sejenisnya untuk menjalankan server maka teman-teman bisa tuliskan localhost
    2. Username phpmyadmin, jika teman-teman menggunakan xampp secara default username nya adalah root.
    3. Password, sedangkan untuk passwordnya adalah kosong secara default.
    4. Nama databases, disini saya membuat database bernama db_crud sebagai contoh. Jika teman-teman menggunakan database lain, sesuaikan juga nama database disini, nama table dan field yang ada dalam kodingan folder ini. Baik dalam file index.php maupun file lainya, yang membutuhkan field table teman-teman.
  */
  $koneksi = mysqli_connect('localhost', 'root', '', 'db_crud');

?>
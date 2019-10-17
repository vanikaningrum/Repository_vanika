<?php
//pembuka untuk memulai proses php
//deklarasi variabel
	/*
	syarat penulisan variabel di php :
	1.variabel tidak boleh diawali dengan angka
	2.varibel tidak boleh mengandung spasi
	3.variabel tidak boleh mengandung karakter khusus:
	* dan ^
	*/
	   $nama="andi";//deklarasi variabel nama
	   $umur="b17";//deklarasi variabel Umur 
	   $andi="Andi";//deklarasi variabel andi
	   $a=5;//deklarasi variabel a
	   $b=17.42;//deklarasi variabel b
	   $c="Saya sedang belajar PHP $b";//deklarasi variabel c
		
//mencetak atau menampilkan hasil deklarasi variabel
		
        echo $nama;
        //menampilkan sebuah string karena value deklarasinya string
					echo "<br>";//menampilkan break atau pindah baris
					
		echo $umur;//menampilkan sebuah string karena value deklarasinya string
					echo "<br>";//menampilkan break atau pindah baris
					
		echo $andi;// menampilkan Notice: Undefined variable: Andi, alasanya karena variabel php bersifat casesensitive
					echo "<br>";//menampilkan break atau pindah baris
					
		echo $a;//menampilkan sebuah string karena value deklarasinya integer
					echo "<br>";//menampilkan break atau pindah baris
					
		echo $b;//menampilkan sebuah string karena value deklarasinya float
					echo "<br>";//menampilkan break atau pindah baris
					
		echo $c;/*menampilkan  hasil string: Saya Sedang belajar PHP 5. ---Variabel dapat dikatakan sebagai inti dari sebuah bahasa pemograman. Karena melalui variabel inilah kita memanipulasi data inputan agar menjadi nilai yang diinginkan---*/
?><!--penutup proses php-->

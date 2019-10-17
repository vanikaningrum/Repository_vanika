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
		$hasil1= -3;//deklarasi variabel dengan value int
			$hasil2=3+5;//deklarasi variabel dengan value int + int
				$hasil3=8-4.5;//deklarsi variabel dengan value int - float
					$hasil4=2*5;//deklarasi variabel dengan value int x int
						$hasil5=3+8/5-3;//deklarasi variabel dengan value int+int dibagi int-int
							$hasil6=10 % 4;// deklarsi variabel dengan value 10 % 4
/*
pencetakan atau penampilan  hasil 
 var_dump berguna untuk mengecek tipe data output
*/
				echo "\$hasil1:"; var_dump($hasil1); // hasil = int(-3)
						echo "<br \>";//break atau pindah baris
				echo "\$hasil2:"; var_dump($hasil2); // hasil = int(8)
						echo "<br \>";//break atau pindah baris
				echo "\$hasil3:"; var_dump($hasil3); // hasil = float(3.5)
						echo "<br \>";//break atau pindah baris
				echo "\$hasil4:"; var_dump($hasil4); // hasil = int(10)
						echo "<br \>";//break atau pindah baris
				echo "\$hasil5:"; var_dump($hasil5); // hasil = float(1.6)
						echo "<br \>";//break atau pindah baris
				echo "\$hasil6:"; var_dump($hasil6); // hasil = int(2)
?><!--penutup proses php-->

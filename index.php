<?php 

// Hari 1 | Tugas Pendalaman OOP PHP
// Pada tugas atau latihan kali ini, kita akan membuat game sederhana dengan menggunakan konsep OOP pada PHP.

// Pada game ini terdapat elang dan harimau. Mereka bisa saling serang. Dimana ketika elang menyerang, maka darah dari harimau akan berkurang. Begitupun sebaliknya.

// Buatlah 2 class utama (Hewan dan Fight), namun kedua kelas tersebut tidak bisa diinstansiasi.

// Kemudian buatlah kelas Elang dan Harimau, dimana kelas tersebut dapat menggunakan seluruh property dan method yang ada di kelas Hewan dan Fight. Dan kelas Elang dan Harimau ini dapat diinstansiai.

// Adapun property yang ada di kelas Hewan adalah nama, darah dengan nilai default 50, jumlahKaki, dan keahlian.

// Sedangkan property yang ada di kelas Fight adalah attackPower, defencePower.

// Ketika Elang diinstansiasi, maka jumlahKaki bernilai 2, dan keahlian bernilai "terbang tinggi", attackPower = 10 , deffencePower = 5 ;

// Ketika Harimau diintansiasi, maka jumlahKaki bernilai 4, dan keahlian bernilai "lari cepat" , attackPower = 7 , deffencePower = 8 ;

$hewan = [["nama" => "harimau"],["nama" => "elang"]];



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h1>game sederhana dengan menggunakan konsep OOP pada PHP</h1>
 	<hr>
 	<ul>
 		<?php foreach ($hewan as $hwn): ?>
		<li>
 			<a href="Fight.php?nama=<?= $hwn["nama"] ?> ">Fight <?= $hwn["nama"] ?></a>
 		</li>
		<?php endforeach ?>
 		
 	</ul>
	
 	
 </body>
 </html>
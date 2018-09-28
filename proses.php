<?php
error_reporting(0);
	$usseer=$_POST['username'];
	$pass=$_POST['password'];

	$user= array("user" => "sepvina",
					"password" => "1998");

	if(isset($_POST["submit"])){
		if($usseer==$user['user'] && $pass==$user['password']){
			echo "LOGIN".$usseer."Berhasilll<br><br>";

			echo "<form method='POST'>
					<input type='checkbox' name='hobi[]'' value='Bersepeda'> Bersepeda <br><br>
					<input type='checkbox' name='hobi[]' value='Nonton'> Nonton <br><br>
					<input type='checkbox' name='hobi[]' value='Makan'> Makan <br><br>
					<input type='checkbox' name='hobi[]' value='Futsal'> Futsal <br><br>
					<input type='checkbox' name='hobi[]' value='Berenang'> Berenang <br><br>
					<input type='checkbox' name='hobi[]' value='Ngegame'> Ngegame <br><br>
					<input type='checkbox' name='hobi[]' value='Lari dari Kenyataan'> Lari dari Kenyataan <br><br>
					<input type='submit' name='submit2'>
			</form>";
		}
		else{
			echo "USERNAME ATAU PASSWORD SALAH!!!!";
		}
		
	}
 ?>

<?php
 if(isset($_POST['submit2'])){
 	$data=$_POST['hobi'];
 	echo"Hobby :";
 	foreach ($data as $nilai) {
 		echo "$nilai,";

 		# code...
 	}

 	echo "<br>Gambar: <br>";
 }
?>

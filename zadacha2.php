<?php
	header('Content-type: text/html; charset=utf-8');
	$factorial = $_GET['c'];
	$output = 0;
	for($i=$factorial; $i>=1; $i--){
		$output = $output * $i;
		
	};

?>
<form action="zadacha1.php" method="GET">
<span class="text" >Введите число </span><input name="c" type="number"><br>

<input type="submit" value="Отправить" >
</form><br>
<div id='output'>

		<?php
			
			if (isset($_GET['c'])){
				echo '<h1>'.'factorial числа  '.$factorial.' = '. output.'</h1>';
			}
		
		?>


 </div>
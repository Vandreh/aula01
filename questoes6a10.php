QUESTAO 06

<?php 
	if(isset($_POST['media']) == true){

		$media = 0;
		$contar = count($_POST['media']);
		var_dump($contar);
		for($w=0; $w < $contar; $w++){
			$media = $media + $_POST['media'][$w];
			$resultado = ($media / $contar);
		}
	}
	
?>
<h1>A media dos valores é: </h1>
<label><input type="text" value="<?php echo $resultado;?>"></label>

<div class="container">
	<form method="POST" name="media">
		<h1>digite los 10 valores:</h1>
		valor 1: <input type="number" name="media[]" required></input><br>
		valor 2: <input type="number" name="media[]" required></input><br>
		valor 3: <input type="number" name="media[]" required></input><br>
		valor 4: <input type="number" name="media[]" required></input><br>
		valor 5: <input type="number" name="media[]" required></input><br>
		valor 6: <input type="number" name="media[]" required></input><br>
		valor 7: <input type="number" name="media[]" required></input><br>
		valor 8: <input type="number" name="media[]" required></input><br>
		valor 9: <input type="number" name="media[]" required></input><br>
		valor 10: <input type="number" name="media[]" required></input><br>
		<button type="submit">calcular media</button>
	</form>
</div>


QUESTAO 07
<?php 
$valor1 = 1;
$valor2 = 16;
$valor3 = 3;
$valor4 = 7;
$valor5 = 5;

if($valor1 > $valor2){$maior = $valor1;}else{$maior = $valor2;}
if($maior > $valor3){}else{$maior = $valor3;}
if($maior > $valor4){}else{$maior = $valor4;}
if($maior > $valor5){}else{$maior = $valor5;}
 echo "O maior numero é: ".$maior;

?>

<br>
QUESTAO 08
<br>
<?php 
$idades = array(18, 16, 19, 17, 55);

$maiores = 0;
$menores = 0;	
$contar8 = count($idades);

for($w=0; $w < $contar8; $w++){
	echo "pessoa numero: ".$w." e idade = ".$idades[$w]."<br>";
	if($idades[$w] > 18){$maiores++;}else{$menores++;}
}
?>
<h1> Existem <?php echo $maiores;?> pessoas maiores de idade e <?php echo $menores;?> pessoas menores de idade de total = <?php echo $contar8;?>.</h1>

<br>
QUESTAO 9
<br>
<?php

	$nomes = array("Joao", "Jose", "Rafael", "Maria", "Mirian", "Amanda");
	$invertida = array_reverse($nomes);

	for ($w=0; $w < count($nomes); $w++) { 
		
		echo "<h5>Nomes na ordem normal: ".$nomes[$w]."</h5>";
		
	}
	for ($w=0; $w < count($nomes); $w++) { 
		
		echo "<h5>Nomes na ordem invertida: ".$invertida[$w]."</h5>";
		
	}

?>	

<br>
QUESTAO 10
<br>
<?php
	$date = date("d/m/Y");
	echo $date;

	echo "<h3>Dia = ".date("d")."</h3>";
	echo "<h3>Mes = ".date("m")."</h3>";
	echo "<h3>Ano = ".date("Y")."</h3>";
?>

<?php
	function tipovalor($valor) {
		if(is_int($valor)){
			echo "o valor $valor é um inteiro";
		}else{
		echo "o valor $valor não é um inteiro";
		}
	}
	tipovalor(15);
	echo '<br>';
	tipovalor('Jungkook');
	echo '<br>';
	tipovalor('Namjoon');
	echo '<br>';
	tipovalor('Jin');
	echo '<br>';
	tipovalor('Hoseok');
	echo '<br>';
	tipovalor('Jimin');
	echo '<br>';
	tipovalor('Taehyung');
	echo '<br>';
	tipovalor('Yoongi');
	
?>
<?php
	function receba($nome1, $nome2){
		if(strlen($nome1) > strlen($nome2)){
			return ' O maior nome é: ' . $nome1;
	}else{
		return ' O maior nome é: ' . $nome2;
	}
}
	echo receba('Jungkook' , 'Jimin');
	echo '<br>';
	echo receba('Namjoon' , 'Taehyung');
	echo '<br>';
	echo receba('Jin' , 'Hoseok');
	echo '<br>';
	echo receba('Army' , 'Yoongi')
?>
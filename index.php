<?php
 $variavel = 198	;
 	//teste se esta vázia
 	if(empty($variavel)){
 		echo 'A variável está vazia';
 	}else{
 		echo"O valor da variável é: " .$variavel;
 	}

 $variavel1 = ['nome' => 'Pedro Luiz', 'endereco' => 'Av Taquara', 'telefone' =>'(51) 5151-51511'];
 	//teste se esta vázia
 	if(empty($variavel1)){
 		echo'</br>';
 		echo 'A variável está vazia';
 	}else{
 		echo'</br>';
 		echo'O valor da variável é: ';
 		print_r($variavel1);
 	}

 $variavel2 = "Romarinho"	;
 	//teste se esta vázia
 	if(empty($variavel2)){
 		echo'</br>';
 		echo 'A variável está vazia';
 	}else{
 		echo'</br>';
 		echo"O valor da variável é: " .$variavel2;
 	}
 	





?>
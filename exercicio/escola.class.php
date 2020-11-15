<?php

class notas{
	private $matricula;
	private $nome;
	private $nota1;
	private $nota2;
	private $nota3;

	public function visualizarmatricula(){
		return $this->matricula;
	} 

	public function inserirmatricula($matriculaq){
		 $this->matricula= $matriculaq;

	} 

	public function visualizarnome(){
		return $this->nome;
	} 

	public function inserirnome($nomeq){
		 $this->nome= $nomeq;

	} 

	public function visualizarnota1(){
		return $this->nota1;
	} 

	public function inserirnota1($nota1q){
		 $this->nota1= $nota1q;

	} 


	public function visualizarnota2(){
		return $this->nota2;
	} 

	public function inserirnota2($nota2q){
		 $this->nota2= $nota2q;

	} 


	public function visualizarnota3(){
		return $this->nota3;
	} 

	public function inserirnota3($nota3q){
		 $this->nota3= $nota3q;

	} 

 	public function vermedia(){
 	$n1= $this->nota1;
 	$n2= $this->nota2;
 	$n3= $this->nota3;

 	$media= ($n1*3.0)+($n2*3.5)+($n3*3.5);


 	if($media>= 70.0){

 		echo $media;
 		echo "Aluno Aprovado";
 	}

 	else{
 		echo $media;
 		echo "Aluno Reprovado";
 	}
}

}

?>
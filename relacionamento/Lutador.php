<?php 

class Lutador {
    // Atributos
    private $name = "";
    private $nacionalidade = "";
    private $idade;
    private $altura;
    private $peso;
    private $categoria = "";
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos
    public function apresentar() {

    }
    public function status() {

    }
    public function ganharLuta() {

    }
    public function perderLuta() {

    }
    public function empatarLuta() {

    }

    // Métodos Especiais 
    public function __construct() {

    }
	function getNacionalidade() {
		return $this->nacionalidade;
	}
	function setNacionalidade($nacionalidade): self {
		$this->nacionalidade = $nacionalidade;
		return $this;
	}
    function getIdade() {
        return $this->idade;
    }
    function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }
	function getDerrotas() {
		return $this->derrotas;
	}
	function setDerrotas($derrotas): self {
		$this->derrotas = $derrotas;
		return $this;
	}
}
?>
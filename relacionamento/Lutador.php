<?php 

class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    // Métodos
    public function apresentar() {
        echo "<p>-----------------------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador" + $this->getNome();
        echo "veio diretamente de " + $this->getNacionalidade();
        echo "tem " + $this->getIdade() + " anos e pesa " + $this->getPeso() = "KG";
        echo "<br>Ele tem " + $this->getVitorias() + " vitórias";
        echo $this->getDerrotas() + "derrotas e " + $this->getEmpates() + " empates";
    }
    public function status() {

    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    // Métodos Especiais 
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->peso = $pe;
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    function getNome() {
        return $this->nome;
    }
    function setName($nome) {
        $this->nome = $nome;
    }
	function getNacionalidade() {
		return $this->nacionalidade;
	}
	function setNacionalidade($na) {
		$this->nacionalidade = $na;
		return $this;
	}
    function getIdade() {
        return $this->idade;
    }
    function setIdade($id) {
        $this->idade = $id;
        return $this;
    }
    function getAltura() {
        return $this->altura;
    }
    function setAltura($al) {
        $this->altura = $al;
        return $this;
    }
    function getPeso() {
        return $this->peso;
    }
    function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }
    function getCategoria() {
        return $this->categoria;
    }
    function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    function getVitorias() {
        return $this->vitorias;
    }
    function setVitorias($vi) {
        $this->vitorias = $vi;
        return $this;
    }
	function getDerrotas() {
		return $this->derrotas;
	}
	function setDerrotas($derrotas): self {
		$this->derrotas = $derrotas;
		return $this;
	}
    function getEmpates() {
        return $this->empates;
    }
    function setEmpates($em) {
        $this->empates = $em;
    }
}
?>
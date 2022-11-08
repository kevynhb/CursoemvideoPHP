<?php 
require_once 'Lutador.php';

class Luta {
    // Atributos
    private $desafiado;
    private $desafiante;
    private$rounds;
    private $aprovado;

    // Métodos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() 
                && ($l1 != $l2)) {
            $this->aprovado = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar() {
        if ($this->aprovado) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2); // aleatorio de 0 até 2 

            switch($vencedor) {
                case 0: // Empate
                    echo "<p>Empatou!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // Desafiado vence
                    echo "<p>" . $this->desafiado->getNome() . " venceu</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // Desafiante vence
                    echo "<p>" . $this->desafiante->getNome() . " venceu<p/>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    // Métodos Especiais
    function getDesafiado() {
        return $this->desafiado;
    }
    function getDesafiante() {
        return $this->desafiante;
    }function getRounds() {
        return $this->rounds;
    }function getAprovado() {
        return $this->aprovado;
    }
    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }
}
?>
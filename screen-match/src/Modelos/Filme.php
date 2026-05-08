<?php

class Filme {
    private string $nome = 'Nome padrão';
    private int $anoLancamento = 2024;
    private string $genero = 'ação';
    private float $media;
    private array $notas = []; //usado apenas para a própria clss

    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $qntdNotas = count($this->notas);

        return $somaNotas / $qntdNotas;
    }

    /**
     * Método getter, para podermos ler o ano de lançamento
    */

    public function anoLancamento(): int { // getter - recuperador (getAnoLancamento ())
        return $this->anoLancamento;
    }

    /**
     * Método setter, para que possamos alterar o ano de lançamento
    */

    public function defineAnoLancamento(int $anoLancamento): void {
        $this->anoLancamento = $anoLancamento; // o $anoLancamento é definido dentro deste método, já que a propriedade é privada, que só pode ser alterada dentro dessa classe, e não exteriormente
    }

    // para os nomes:

    public function nome(): string { //getter
        return $this->nome;
    }

    public function defineNome(string $nome): void { //setter
        $this->nome = $nome;
    }

    //para o genero

    public function genero() { //getter - mostrar e passar o dado que é privado
        $this->$genero;
    }

    public function defineGenero(string $genero) { //setter - define uma novo valor 
        $this->genero = $genero;
    }
}

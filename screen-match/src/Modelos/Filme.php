<?php

class Filme {
    private float $media;
    private array $notas = []; //usado apenas para a própria clss

    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly Genero $genero
        ) { //método construct: chamado automaticamente quando um objeto é instanciado (não pode ter um tipo de retorno)
        $this->notas = []; // qualquer inicialização é colocado no construct
    } //readonly - são publicas para leituras e privadas para mudança (um só vez)

    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $qntdNotas = count($this->notas);

        return $somaNotas / $qntdNotas;
    }

    /*
    Método getter, para podermos ler o ano de lançamento

    public function anoLancamento(): int { // getter - recuperador (getAnoLancamento ())
        return $this->anoLancamento;
    }

    Método setter, para que possamos alterar o ano de lançamento

    public function defineAnoLancamento(int $anoLancamento): void {
        $this->anoLancamento = $anoLancamento; // o $anoLancamento é definido dentro deste método, já que a propriedade é privada, que só pode ser alterada dentro dessa classe, e não exteriormente
    }

    public function nome(): string {
        return $this->nome;
    }

    public function genero(): string {
        return $this->genero;
    }

    //-------------------------------------------------------------------------------------------------------------------------------------------------------------//

    para os nomes:

    public function nome(): string { //getter
        return $this->nome;
    }

    public function defineNome(string $nome): void { //setter
        $this->nome = $nome;
    }

    //para o genero

    public function genero(): string { //getter - mostrar e passar o dado que é privado
        return $this->$genero;
    }

    public function defineGenero(string $genero): void { //setter - define uma novo valor 
        $this->genero = $genero;
    }*/
}
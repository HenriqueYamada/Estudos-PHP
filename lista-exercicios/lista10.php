<?php

// 1) Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não;

enum Conta {
    case ContaCorrente;
    case Investimento;
    case ContaPoupanca;
    case Universitarias;
}

class ContaBancaria {
    public function possuiTaxa(): bool {
        return match($this) {
            Conta::ContaCorrente, Conta::Investimento => true,
            Conta::ContaPoupanca, Conta::Universitaria => false,
        };
    }
}
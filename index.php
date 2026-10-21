<?php

class Pessoa
{

    private string $nome;
    private int $idade;
    private int $cpf;

    public function __construct(
        string $nome,
        int $idade,
        int $cpf
    ) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
}

$pessoa01 = new pessoa('amanda', 17, 06397606279);

class produtos
{

    private string $nome;
    private int $preço;
    private int $categoria;
    private int $quantidade;

    public function __construct(
        string $nome,
        int $preço,
        int $quantidade,
        int $categoria,
    ) {
        $this->nome = $nome;
        $this->preço = $preço;
        $this->quantidade = $quantidade;
        $this->categoria = $categoria;
    }
    public function pegarNome()
    {
        return $this->nome;
    }
}

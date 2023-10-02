<?php

class Curso{
    private string $nome;
    private string $nivel;
    private string $modalidade;
    private float $duracao;

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome): self{
        $this->nome = $nome;

        return $this;
    }

    public function getNivel(): string{
        return $this->nivel;
    }

    public function setNivel(string $nivel): self{
        $this->nivel = $nivel;

        return $this;
    }

    public function getModalidade(): string{
        return $this->modalidade;
    }

    public function setModalidade(string $modalidade): self{
        $this->modalidade = $modalidade;

        return $this;
    }

    public function getDuracao(): float{
        return $this->duracao;
    }

    public function setDuracao(float $duracao): self{
        $this->duracao = $duracao;

        return $this;
    }
}

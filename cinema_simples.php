<?php

class Cliente {
    public $nome;
    public $idade;
    
}

class Cinema {
    private $op;
    private $valor = 0;
    private $quantidade;
    private $opcaoinfantil;
    private $opcaojuvenil;
    private $opcaoadulta;
    private $opcaolanchonete;

    public function __construct()
    {
        echo "Bem vindo ao Cinema do Zolin!\n";
        echo "Aqui só tem filmes campeões de bilheteria!\n";
        $cliente = new Cliente();
        echo "Digite o seu nome:\n";
        $cliente->nome = readline();
        echo "Digite a sua idade:\n";
        $cliente->idade = intval(readline());

        if ($cliente->idade <= 12) {
            $this->menuinfantil();
            $this->ingressos();
        } elseif ($cliente->idade > 12 && $cliente->idade < 18) {
            $this->menuinfantil();
            if ($this->valor == 0) {
                $this->menujuvenil();
            }
            $this->ingressos();
        } elseif ($cliente->idade >= 18) {
            $this->menuinfantil();
            if ($this->valor == 0) {
                $this->menujuvenil();
            }
            if ($this->valor == 0) {
                $this->menuadulto();
            }
            $this->ingressos();
        }

        echo "Deseja alguma comida ou bebida?\n";
        echo "Para ver a lanchonete digite 1 e para ir ao pagamento digite 0.\n";
        $this->op = intval(readline());

        while ($this->op == 1) {
            $this->lanchonete();

            echo "Para escolher outro item da lanchonete digite 1 e para finalizar a compra digite 0.\n";
            $this->op = intval(readline());
        }

        if ($this->quantidade == 1) {
            echo "O valor total foi " . $this->valor . " reais, bom filme pra você!\n";
        } elseif ($this->quantidade >= 2) {
            echo "O valor total foi " . $this->valor . " reais, bom filme pra vocês!\n";
        } elseif ($this->valor == 0) {
            echo "Você não escolheu nada, cai fora!\n";
        } elseif ($this->valor != 0 && $this->quantidade == 0) {
            echo "Bom lanche!\n";
        }
    }

    private function ingressos()
    {
        if ($this->valor != 0) {
            echo "Quanto ingressos deseja?\n";
            $this->quantidade = intval(readline());
            $this->valor = $this->valor * $this->quantidade;
        }
    }

    private function menuinfantil()
    {
        $precoA = array(25, 30, 35, 32, 23);

        echo "Olá, bem vindo à seção infantil!\n\n";
        echo "Escolha o filme que deseja assistir:\n\n";
        echo "1- Frozen 2 (25 reais)\n";
        echo "2- Toy Story 4 (30 reais)\n";
        echo "3- O rei leão (35 reais)\n";
        echo "4- Alice no país das maravilhas (32 reais)\n";
        echo "5- Minions (23 reais)\n";
        echo "6- Nenhuma das opções\n";

        echo "\n\n\n";

        $this->opcaoinfantil = intval(readline());

        switch ($this->opcaoinfantil) {
            case 1:
                $this->valor += $precoA[0];
                break;
            case 2:
                $this->valor += $precoA[1];
                break;
            case 3:
                $this->valor += $precoA[2];
                break;
            case 4:
                $this->valor += $precoA[3];
                break;
            case 5:
                $this->valor += $precoA[4];
                break;
            case 6:
                break;
            default:
                echo "Opção inválida.\n";
                break;
        }
    }

    private function menujuvenil()
    {
        $precoB = array(21, 30, 41, 32, 39);

        echo "Olá, bem vindo à seção juvenil!\n\n";
        echo "Escolha o filme que deseja assistir:\n\n";
        echo "1- Vingadores Ultimato (21 reais)\n";
        echo "2- Homem de ferro (30 reais)\n";
        echo "3- Jurassic Park (41 reais)\n";
        echo "4- Piratas do Caribe (32 reais)\n";
        echo "5- Homem Aranha (39 reais)\n";
        echo "6- Nenhuma das opções\n";

        echo "\n\n\n";

        $this->opcaojuvenil = intval(readline());

        switch ($this->opcaojuvenil) {
            case 1:
                $this->valor += $precoB[0];
                break;
            case 2:
                $this->valor += $precoB[1];
                break;
            case 3:
                $this->valor += $precoB[2];
                break;
            case 4:
                $this->valor += $precoB[3];
                break;
            case 5:
                $this->valor += $precoB[4];
                break;
            case 6:
                break;
            default:
                echo "Opção inválida.\n";
                break;
        }
    }

    private function menuadulto()
    {
        $precoC = array(40, 30, 35, 32, 38);

        echo "Olá, bem vindo à seção adulta!\n\n";
        echo "Escolha o filme que deseja assistir:\n\n";
        echo "1- Avatar (40 reais)\n";
        echo "2- Bohemian Rhapsody (30 reais)\n";
        echo "3- Titanic (35 reais)\n";
        echo "4- 2012 (32 reais)\n";
        echo "5- Dia da Independência (38 reais)\n";
        echo "6- Nenhuma das opções\n";

        echo "\n\n\n";

        $this->opcaoadulta = intval(readline());

        switch ($this->opcaoadulta) {
            case 1:
                $this->valor += $precoC[0];
                break;
            case 2:
                $this->valor += $precoC[1];
                break;
            case 3:
                $this->valor += $precoC[2];
                break;
            case 4:
                $this->valor += $precoC[3];
                break;
            case 5:
                $this->valor += $precoC[4];
                break;
            case 6:
                break;
            default:
                echo "Opção inválida.\n";
                break;
        }
    }

    private function lanchonete()
    {
        $precoD = array(56, 40, 25, 22, 20, 18, 15, 10, 12);

        echo "Bem vindo à lanchonete!\n";
        echo "Escolha alguma opção:\n\n";

        echo "1- Combo pipoca grande + refrigerante ou suco 1L (56 reais)\n";
        echo "2- Combo pipoca média + refrigerante ou suco 500ml (40 reais)\n";
        echo "3- Pipoca grande (25 reais)\n";
        echo "4- Pipoca média (22 reais)\n";
        echo "5- Pipoca pequena (20 reais)\n";
        echo "6- Refrigerante 1L (18 reais)\n";
        echo "7- Refrigerante 500ml (15 reais)\n";
        echo "8- Água (10 reais)\n";
        echo "9- Suco (12 reais)\n";
        echo "10- Nenhuma das opções\n";

        echo "\n\n\n";

        $this->opcaolanchonete = intval(readline());

        switch ($this->opcaolanchonete) {
            case 1:
                $this->valor += $precoD[0];
                break;
            case 2:
                $this->valor += $precoD[1];
                break;
            case 3:
                $this->valor += $precoD[2];
                break;
            case 4:
                $this->valor += $precoD[3];
                break;
            case 5:
                $this->valor += $precoD[4];
                break;
            case 6:
                $this->valor += $precoD[5];
                break;
            case 7:
                $this->valor += $precoD[6];
                break;
            case 8:
                $this->valor += $precoD[7];
                break;
            case 9:
                $this->valor += $precoD[8];
                break;
            case 10:
                break;
            default:
                echo "Opção inválida.\n";
                break;
        }
    }
}

$cinema = new Cinema();

?>
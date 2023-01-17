<?php
//Essa funciton recebe como parametro o banco de dados que quero conecatar;
function novaConexao($banco = 'curso_php')
{
    $servidor = '127.0.0.1:3306'; //Neste caso é melhor acessar pelo ip do localhost;
    /*
     * Obviamente não é o ideal passar o usuário e senha por aqui, seria num
     * arquivo separado, mas por enquanto, afins de conhecimento ficará aqui.
     */
    $usuario = 'root';
    $senha = ''; //Por padrão, a senha no mysql do xampp é vazia.
    //Criando uma nova conexão através de uma nova instância do mysqli.
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    //Uma forma simples de tratar o erro na conexão.
    if ($conexao->connect_error) {
        /**
         * Chegando aqui nenhuma passo será dado e volta para o browser
         * dando essa resposta do parâmetro, ele para tudo!
        */
        die('Erro: ' . $conexao->connect_error);

        //Outra forma de tratar:
        print('Erro: ' . $conexao->connect_error);
        exit();// Aqui para a execução;
    }
    //Sucesso da conexão:
    return $conexao;
}
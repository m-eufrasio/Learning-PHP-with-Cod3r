<?php

function newConnection($banco = 'curso_php')
{
    $server = '127.0.0.1:3306'; //Neste caso é melhor acessar pelo ip do localhost;
    /*
     * Obviamente não é o ideal passar o usuário e senha por aqui, seria num
     * arquivo separado, mas por enquanto, afins de conhecimento ficará aqui.
     */
    $user = 'root';
    $password = ''; //Por padrão, a senha no mysql do xampp é vazia.
    //Criando uma nova conexão através de uma nova instância do mysqli.
    try {
        //Passamos como parâmetro o nome do banco que usamos:
        $connection = new PDO("mysql:host=$server;dbname=$banco",
            $user, $password);
        return $connection;
    } catch(PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
}
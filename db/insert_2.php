<div class="titulo">Inserir Registro #02</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- Será verificado se existe algo dentro do array_post: -->
<?php

if (count(@$_POST) > 0) {

    $dados = $_POST;
    $erros = [];

    if (trim($dados['nome']) === "") {
        $erros["nome"] = "Nome é obrigatório <br>";
    }
    if (!isset($dados['nascimento'])) {
        $data = DateTime::createFromFormat(
            'd/m/Y', @$dados['nascimento']);

        if (!$data) {
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }
    if (!filter_var(@$dados['email'], FILTER_VALIDATE_EMAIL)) {
       $erros["nascimento"] = 'Email inválido <br>';
    }
    if (!filter_var(@$dados['site'], FILTER_VALIDATE_URL)) { //exige https.
       $erros["site"] = 'Site inválido <br>';
    }
    $filhosConfig = ['options' => ["min_range" => 0, "max_range"=> 10]];

    if (!filter_var(@$dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig
        && @$dados['filhos'] != 0)) {
       $erros["filhos"] = 'Quantidade de filhos inválida <br>';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var(@$dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
       $erros["salario"] = 'Salário inválido <br>';
    }

    if(!count($erros)) {
        //Entrando aqui, se chega no fluxo de inserção.
        require_once('conexao.php');

        $sql = "INSERT INTO cadastro
        (nome, nascimento, email, site, filhos, salario)
        VALUES (?, ?, ?, ?, ?, ?)";

        $connection = novaConexao();
        $stmt = $connection->prepare($sql);
        // Temos vários parâmetros:
        $params = [
            $dados['nome'],
            $dados ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'],
        ];
        //Passando os tipos de cada parâmetro, s de string, i de int e d de decimal (float);
        $stmt->bind_param("ssssid", ...$params);

        if ($stmt->execute()) { //Valida a execução.
            unset($dados);
        }
    }
}
?>

<form action="#" method="POST">
    <div class="row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text"
                class="form-control <?= @$erros['nome'] ? 'is-invalid' : '' ?>"
                id="nome"
                name="nome"
                placeholder="Nome"
                value=" <?= @$_POST['nome'] ?> ">
                <div class="invalid-feedback">
                    <?= $erros['nome'] ?>
                </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nome">Nascimento</label>
            <input type="text"
                class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>"
                id="nascimento"
                name="Nascimento"
                placeholder="Nascimento"
                value="<?= @$_POST['nascimento'] ?>">
                <div class="invalid-feedback">
                    <?= $erros['nascimento'] ?>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text"
                class="form-control <?= @$erros['email'] ? 'is-invalid' : '' ?>"
                id="email"
                name="E-mail"
                placeholder="E-mail"
                value="<?= @$_POST['email'] ?>">
                <div class="invalid-feedback">
                    <?= $erros['email'] ?>
                </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text"
                class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>"
                id="site"
                name="Site"
                placeholder="Site"
                value="<?= @$_POST['site'] ?>">
                <div class="invalid-feedback">
                    <?= $erros['site'] ?>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="text"
                class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>"
                id="filhos"
                name="Filhos"
                placeholder="Qtde de Filhos"
                value="<?= @$_POST['filhos'] ?>">
                <div class="invalid-feedback">
                    <?= $erros['filhos'] ?>
                </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text"
                class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>"
                id="salario"
                name="Salário"
                placeholder="Salário"
                value="<?= @$_POST['salario'] ?>">
                <div class="invalid-feedback">
                    <?= $erros['salario'] ?>
                </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>
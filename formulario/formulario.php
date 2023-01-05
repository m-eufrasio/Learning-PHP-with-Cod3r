<div class="titulo">Formulário</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<h2> <b>Cadastro</b> </h2>

<!-- Será verificado se existe algo dentro do array_post: -->
<?php

if (count(@$_POST) > 0) {

    $erros = [];

    //Essa função diz se foi passado algum parâmetro ou não.
    if (!filter_input(INPUT_POST, "nome")) {
        $erros["nome"] = "Nome é obrigatório <br>";
    }
    //Irá validar o nascimento.
    if (filter_input(INPUT_POST, "nascimento")) {
        //Esse método cria uma data formatada.
        $data = DateTime::createFromFormat('d/m/Y', @$_POST['nascimento']);
    }
    //Validar email:
    if (!filter_var(@$_POST['email'], FILTER_VALIDATE_EMAIL)) {
       $erros["nascimento"] = 'Email inválido <br>';
    }
    //Validar URL:
    if (!filter_var(@$_POST['site'], FILTER_VALIDATE_URL)) { //exige https.
       $erros["site"] = 'Site inválido <br>';
    }
    //Limite de quantos filhos pd ser inserido, um range.
    $filhosConfig = ['options' => ["min_range" => 0, "max_range"=> 10]];
    //Passando um limitante como terceiro parâmetro:
    if (!filter_var(@$_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig
        && @$_POST['filhoa'] != 0)) {
       $erros["filhos"] = 'Quantidade de filhos inválida <br>';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var(@$_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
       $erros["salario"] = 'Salário inválido <br>';
    }
/*
 * Existe algumas estratégias para verificar o nome, uma delas é usando isset.
 * 
*/   
}
?>

<?php foreach ($erros as $erro): ?>
    <!-- Uma forma de exibir os erros: -->
    <!-- <div class="alert alert-danger" role="alert">
        <?= ''//$erro ?>
    </div> -->
<?php endforeach ?>


<form action="#" method="POST">
    <div class="row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text"
                class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>"
                id="nome"
                name="nome"
                placeholder="Nome"
                value="<?= @$_POST['nome'] ?>">
                <div class="invalid-feedback">
                    <?= $erros['nome'] ?>
                </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nome">Nascimento</label>
            <input type="text" class="form-control"
                id="nascimento"
                name="Nascimento"
                placeholder="Nascimento"
                value="<?= @$_POST['nascimento'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control"
                id="email"
                name="E-mail"
                placeholder="E-mail"
                value="<?= @$_POST['email'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control"
                id="site"
                name="Site"
                placeholder="Site"
                value="<?= @$_POST['site'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="text" class="form-control"
                id="filhos"
                name="Filhos"
                placeholder="Qtde de Filhos"
                value="<?= @$_POST['filhos'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control"
                id="salario"
                name="Salário"
                placeholder="Salário"
                value="<?= @$_POST['salario'] ?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>
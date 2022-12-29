<div class="titulo">Formulário</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<h2>Cadastro</h2>
<form action="#" method="POST">
    <div class="row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text"class="form-control"
                id="nome"
                name="nome"
                placeholder="Nome"
                value="<?= $_POST['nome'] ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="nome">Nascimento</label>
            <input type="text" class="form-control"
                id="nascimento"
                name="Nascimento"
                placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control"
                id="email"
                name="E-mail"
                placeholder="E-mail"
                value="<?= $_POST['email'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control"
                id="site"
                name="Site"
                placeholder="Site"
                value="<?= $_POST['site'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="text" class="form-control"
                id="filhos"
                name="Filhos"
                placeholder="Qtde de Filhos"
                value="<?= $_POST['filhos'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control"
                id="salario"
                name="Salário"
                placeholder="Salário"
                value="<?= $_POST['salario'] ?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>
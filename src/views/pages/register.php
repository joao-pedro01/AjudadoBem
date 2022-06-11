<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Cadastro | Ajuda Do Bem</title>
    <link rel="shortcut icon" href="/AjudaDoBem/src/views/images/favicon.ico" type="image/x-icon">
    <script src="../js/cep.js"></script>
</head>
<body>
    <?php include_once dirname(__FILE__,4).'/src/controllers/navbar.php';?>
    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Por favor, preencha este formulário para criar uma conta.</p>
        <form action="/AjudaDoBem/src/models/register.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" name="name" placeholder="Ex: Gustavo Pereira Marques" class="form-control">
            </div>
            <div class="form-group">
                <label>Data Nascimento</label>
                <input type="date" name="datenasc" class="form-control">
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" placeholder="Digite o seu cpf sem -." class="ls-mask-cpf form-control">
            </div>
            <div class="form-group">
                <label>Cep:
                    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" class="ls-mask-cep form-control">
                </label>
                <label>Rua:
                    <input name="rua" type="text" id="rua" size="60" class="form-control" readonly>
                </label>
                <label>Bairro:
                    <input name="bairro" type="text" id="bairro" size="40" class="form-control" readonly>
                </label>
                <label>Cidade:
                    <input name="cidade" type="text" id="cidade" size="40" class="form-control" readonly>
                </label>
                <label>Estado:
                    <input name="uf" type="text" id="uf" size="2" class="form-control"  readonly>
                </label>
            </div>
            <div class="form-group">
                <label>Nome do usuário</label>
                <input type="text" name="username" placeholder="Ex: gustavo-pereira13" class="form-control">
            </div>
            <div class="form-group">
                <label>Celular</label>
                <input type="text" name="phone" placeholder="Digite o seu celular" class="ls-mask-phone9_with_ddd	 form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="seu@email.com" class="form-control">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" placeholder="Use uma senha segura" class="form-control" id="password_field">
                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
            </div>
            <div class="form-group">
                <label>Confirme a senha</label>
                <input type="password" name="confirmpassword" placeholder="Repita a senha acima" class="form-control" id="confirm_password_field">
                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#confirm_password_field" href="#"></a>
            </div>
            <div class="form-group">
                <label>Foto de perfil</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                
                    <input type="submit" value="Criar Conta" type="button" class="btn btn-success">
                    <input type="reset" value="Apagar Dados" type="button" class="btn btn-danger">
                
            </div>
            <p>Já tem uma conta? <a href="login.php">Entre aqui</a>.</p>
        </form>
        <form action="" class="ls-form ls-form-horizontal" data-ls-module="form">
  <label class="ls-label col-md-3">
    <b class="ls-label-text">Telefone</b>
    <input type="text" name="cel2" class="ls-mask-phone8_with_ddd" placeholder="(99) 9999-9999" >
  </label>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">CNPJ</b>
    <input type="text" name="cnpj" class="ls-mask-cnpj" placeholder="00.000.000/0000-00" >
  </label>

  <label class="ls-label col-md-3">
    <b class="ls-label-text">CPF</b>
    <input type="text" name="cpf" class="ls-mask-cpf" placeholder="000.000.000-00" >
  </label>
  <label class="ls-label col-md-2">
    <b class="ls-label-text">CEP</b>
    <input type="text" name="cep" class="ls-mask-cep" placeholder="00000-000" >
  </label>
</form>
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>
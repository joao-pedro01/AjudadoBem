<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login | Ajuda do Bem</title>
</head>
<body>
    <form action="../scripts/login.php" method="post">
        <div class="row">
            <div class="col-5">
                <input type="email" class="form-control" placeholder="Email (Obrigatório)" name=email><br>
                <input type="password" class="form-control" placeholder="Senha (Obrigatório)" name=password><br>
                <input type="text" class="form-control" placeholder="Nome (Obrigatório)" name=username><br>
                <input type="submit" value="Enviar">
            </div>
        </div>
    </form>
</body>
</html>
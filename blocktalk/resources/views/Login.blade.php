<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <form action="{{ route('login.do') }}" method="POST">
            @csrf

            <h2>Login</h2>
            <input type="email" name="email" id="email" required>
            <label for="email">Email</label>
            <br>
            <input type="password" name="senha" id="senha" required>
            <label for="senha">Senha</label>
            <button type="submit">entrar</button>
            <a href="/cadastro">cadastro</a>
        </form>

    </div>



    </form>
</body>
</html>
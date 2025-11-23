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
        <form action="{{ route('cadastro.store') }}" method="POST">
            @csrf

            <h1>cadastro</h1>
            
            <label for="nome" class="labelInput">Nome Completo</label>
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha" required>
            <br>
            <button type="submit">enviar</button>
            <a href="/login">login</a>
        </form>

    </div>
</body>
</html>
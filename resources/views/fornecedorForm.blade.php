<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <form action="{{url('/form')}}" method="POST">
    @csrf
    <div class="form-group">
            <input type="text" class="form-control" name="nome"  value="{{old('nome', isset($fornecedor) ? $fornecedor->nome : '')}}" placeholder="Nome" >
    </div>

    <div class="form-group">
            <input type="text" class="form-control" name="cnpj"  value="{{old('cnpj', isset($fornecedor) ? $fornecedor->cnpj : '')}}" placeholder="CNPJ">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="email"  value="{{old('email', isset($fornecedor) ? $fornecedor->email : '')}}"placeholder="Email">
    </div>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>
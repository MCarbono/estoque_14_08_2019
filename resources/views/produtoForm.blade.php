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
    <form action="{{url('/formProduto')}}" method="POST" >
    @csrf
    <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome">
    </div>

    <div class="form-group">
            <input type="text" class="form-control" name="descricao" placeholder="Descrição">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="preco" placeholder="Preço">
    </div>
    
    <select name="fornecedor_id">

    @foreach ($fornecedores as $fornecedor)
    <option {{isset($fornecedor) && $fornecedor->fornecedor_id == $fornecedor->id ? 'selected' : ''}} value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>

    @endforeach
    </select>
    <br><br><br>
    <button type="submit">Enviar</button>
    </form>


</body>
</html>
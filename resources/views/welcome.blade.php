<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cadastro de Pessoas</title>
    <style>
       .form-control{
        border: 3px solid black;
       } 

    </style>
  </head>
  <body>
    <h1>Cadastros de Pessoas</h1>

    <form>
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Nome:</b></label>
    <input type="text" class="form-control" name="nome" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Sobrenome:</b></label>
    <input type="text" class="form-control" name="sobrenome" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Email:</b></label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Telefone:</b></label>
    <input type="text" class="form-control" name="telefone" required>
  </div>
  <div class="form-group col-md-4">
      <label for="inputState"><b>Tipo de Documento</b></label>
      <select id="inputState" class="form-control">
        <option selected><b>Selecione...</b></option>
        <option>CPF</option>
        <option>CNPJ</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
<br><br>

 <div class = "container">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Numero de Documento</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($pessoas as $pessoa)
      <th scope="row">{{$pessoa->id}}</th>
      <td>{{$pessoa->nome}} {{$pessoa->sobrenome}}</td>
      <td>{{$pessoa->email}}</td>
      <td>{{$pessoa->telefone}}</td>
      <td>{{$pessoa->tipodoc}}</td>
      <td>{{$pessoa->numdoc}}</td>
      <td>
    <a href="{{ route('pessoas.edit', $pessoa->id)}}" class="btn btn-primary">Editar</a>
        <form action="{{ route('pessoas.destroy', $pessoa->id)}}" method="post">
         @csrf @method('DELETE')
          <button class="btn btn-danger" type="submit">Apagar<button>
        </form>
      </td>
    </tr>
    @endforeach
    </tr>
  </tbody>
</table>
 </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
include "../controller/UsuarioController.php";

$usuario = new UsuarioController();

if(!empty($_POST['id'])){
    $usuario->update($_POST);
    //header("location: UsuarioList.php");
  }

elseif(!empty($_POST)){
  $usuario->salvar($_POST);
  //header("location: UsuarioList.php");
}

if(!empty($_GET['id'])){
  $data = $usuario->buscar($_GET['id']);
}


//$conn->inserir("usuario", ["nome"=> "JuliaV", "telefone"=>"49 999954399"]);


?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="UsuarioForm.php" method="POST">
        <input type="hidden" name="id" value="<?php echo !empty($data->id)? $data->id: ""?>"/><br>
        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo !empty($data->nome)?$data->nome:""?>"/><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone" value="<?php echo !empty($data->telefone) ?$data->telefone: ""?>"/><br><br>
        <input type="submit" values="Salvar"/>
</form>
  </body>
</html>
<?php
   namespace Projeto\GamerMatch\View;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Atualizar.php'); 
    require_once('../Model/Usuario.php');
    require_once('../Control/UsuarioControl.php');

    use  Projeto\GamerMatch\Model\Usuario;
    use  Projeto\GamerMatch\Control\Control;
    use  Projeto\GamerMatch\DAO\Atualizar;
    use  Projeto\GamerMatch\DAO\Conexao;

    //session_start();
    //coletar o objeto
    //$clienteRecuperado = $_SESSION['cliente'];
    //$controle = new Control($clienteRecuperado);//para acessar metodos de atualização
    $atualizar  = new Atualizar();
    $conexao    = new Conexao();
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuario</title>
</head>
<body>
    <h1>Atualizar Usuario</h1>
    <form method="POST">

        <label>Código: </label>
        <input type="number" name="codigo" id="codigo"/>
        <br><br>
        <label>Escolha o campo que deseja atualizar: </label>
        <select name="campo" id="campo">
            <option value="nomeReal">Nome Real</option>
            <option value="nickName">NickName</option>
            <option value="dtDeNascimento">Data de Nascimento</option>
            <option value="nacionalidade">Nacionalidade</option>
            <option value="login">Login</option>
            <option value="senha">senha</option>
            <option value="tipo">Tipo</option>
            <option value="equipe_codigo">Equipe</option>
        </select>  
        <br><br>
        <label>Informe o novo dado</label>
        <input type="text" name="dado" id="dado"/>
        <br><br>
        <button  type="submit">Atualizar
            <?php
                $codigo = $_POST['codigo'];
                $campo = $_POST['campo'];
                $novoDado = $_POST['dado'];

                $resultado = $atualizar->atualizarUsuario($conexao, $codigo, $campo, $novoDado);
            ?>
        </button>
    </form>    
    <?php
        echo $resultado;


    ?>
        <br>
     <a href="../index.php"><button>Voltar</button></a>
</body>
</html>
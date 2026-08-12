<?php
    namespace Projeto\GamerMatch\View;
    require_once('../DAO/Cadastrar.php');
    require_once('../DAO/Conexao.php');
    require_once('../Model/Usuario.php');
    require_once('../Control/UsuarioControl.php');
    use  Projeto\GamerMatch\Model\Usuario;
    use  Projeto\GamerMatch\Control\Control;
    use  Projeto\GamerMatch\DAO\Conexao;
    use  Projeto\GamerMatch\DAO\cadastrar;

    $conexao  = new Conexao();
    $inserir  = new Cadastrar();
    $mensagem = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>
    <form method="POST">

        <label>Nome Real: </label>
        <input type="text" name="nome" id="nome"/><br><br>

        <label>Nick Name: </label>
        <input type="text" name="nickName" id="nickName"/><br><br>

        <label>Data de Nascimento: </label>
        <input type="date" name="dtDeNascimento" id="dtDeNascimento"/><br><br>

        <label>Nacionalidade: </label>
        <input type="text" name="nacionalidade" id="nacionalidade"/><br><br>

        <label>Equipe:</label>

        <select name="equipe_codigo" id="equipe_codigo" required>

        <option value="">Selecione uma opção</option>
        <option value="3">Team Liquid</option>
        <option value="4">Teste</option>

         </select>              <br><br>

        <label>Login: </label>
        <input type="text" name="login" id="login"/><br><br>

        <label>Senha: </label>
        <input type="text" name="senha" id="senha"/><br><br>
        
         <label>Tipo:</label>

        <select name="tipo" id="tipo" required>

        <option value="">Selecione uma opção</option>
        <option value="0">Usuario Comum</option>
        <option value="1">Administrador</option>

         </select>  <br><br>

        

   
        <button type="submit">Cadastrar
            <?php 
    
                // Coletando os dados
                if(isset($_POST['nome']))
                {
                    $nomeReal         = $_POST['nome'];
                    $nickName         = $_POST['nickName'];
                    $dtDeNascimento   = $_POST['dtDeNascimento'];
                    $nacionalidade    = $_POST['nacionalidade'];
                    $login            = $_POST['login'];
                    $senha            = $_POST['senha'];
                    $tipo             = $_POST['tipo'];
                    $equipe_codigo    = $_POST['equipe_codigo'];
                    
                    $mensagem = $inserir->cadastrarUsuario($conexao, $nomeReal, $nickName, $dtDeNascimento, $nacionalidade, $login, $senha, $tipo,$equipe_codigo);
                }
               
            ?> 
        </button>
    </form>
    <?php 
        if(isset($_POST['nome']))
        {
        echo $mensagem;
        }
        else
        {
            echo "Preencha os campos!";
        }
        
    ?>
    <a href="../index.php"><button>Voltar</button></a>
</body>
</html>

<!-- if ($usuario['tipo'] == 1) {
    // abre área administrativa
} else {
    // abre área normal
}

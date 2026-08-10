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
        <input type="text" name="dtDeNascimento" id="dtDeNascimento"/><br><br>

        <label>Nacionalidade: </label>
        <input type="text" name="nacionalidade" id="nacionalidade"/><br><br>

        <label>Equipe: </label>
        <select name="equipe_codigo">
            <option value="1">Equipe 1</option>
            <option value="2">Equipe 2</option>
            <option value="3">Equipe 3</option>
        </select>
        <input type="int" name="equipe" id="equipe"/><br><br>

        <label>Login: </label>
        <input type="text" name="login" id="login"/><br><br>

        <label>Senha: </label>
        <input type="text" name="senha" id="senha"/><br><br>
        
        <label>tipo: </label>
        <input type="boll" name="tipo" id="tipo"/><br><br>

        

   
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
                    $equipe           = $_POST['equipe'];
                    
                    $mensagem = $inserir->cadastrarUsuario($conexao, $nomeReal, $nickName, $dtDeNascimento, $nacionalidade, $login, $senha, $tipo,$equipe);
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

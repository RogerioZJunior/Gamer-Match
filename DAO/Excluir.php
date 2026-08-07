<?php
    namespace Projeto\GamerMatch\DAO;
    require_once('Conexao.php');
    use Projeto\GamerMatch\DAO\Conexao;

    class Excluir
    {
        function excluirUsuario(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn    = $conexao->conectar();
                $sql     = "delete from usuario where codigo = '$codigo'";
                $reusult = mysqli_query($conn, $sql);
                mysql_close($conn);

                if($reusult)
                {
                    return "<br><br>Excluido com sucesso!";
                }
                    return "<br><br>Não Excluido";
            }               
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do excluir usuario


        function excluirJogo(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn    = $conexao->conectar();
                $sql     = "delete from jogo where codigo = '$codigo'";
                $reusult = mysqli_query($conn, $sql);
                mysql_close($conn);

                if($reusult)
                {
                    return "<br><br>Excluido com sucesso!";
                }
                    return "<br><br>Não Excluido";
            }               
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do excluir jogo


        function excluirCampeonato(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn    = $conexao->conectar();
                $sql     = "delete from campeonato where codigo = '$codigo'";
                $reusult = mysqli_query($conn, $sql);
                mysql_close($conn);

                if($reusult)
                {
                    return "<br><br>Excluido com sucesso!";
                }
                    return "<br><br>Não Excluido";
            }               
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do excluir Campeonato


        function excluirPartida(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn    = $conexao->conectar();
                $sql     = "delete from partida where codigo = '$codigo'";
                $reusult = mysqli_query($conn, $sql);
                mysql_close($conn);

                if($reusult)
                {
                    return "<br><br>Excluido com sucesso!";
                }
                    return "<br><br>Não Excluido";
            }               
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do excluir partida


        function excluirEquipe(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn    = $conexao->conectar();
                $sql     = "delete from equipe where codigo = '$codigo'";
                $reusult = mysqli_query($conn, $sql);
                mysql_close($conn);

                if($reusult)
                {
                    return "<br><br>Excluido com sucesso!";
                }
                    return "<br><br>Não Excluido";
            }               
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do excluir equipe


    }//fim do excluir

?>
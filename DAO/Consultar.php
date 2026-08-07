<?php
    namespace Projeto\GamerMatch\DAO;
    require_once('Conexao.php');
    use Projeto\GamerMatch\DAO\Conexao;

    class Consultar
    {
        function consultarUsuario(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn = $conexao->conectar();//abre conexão
                $sql  = "select * from usuario where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo)
                    {
                        return '<br>Código: '.$dados['codigo'].
                               '<br>Nome Real: '.$dados['nomeReal'].
                               '<br>Nick Name: '.$dados['nickName']. 
                               '<br>Data de Nascimento: '.$dados['dtDeNascimento']. 
                               '<br>Nacionalidade: '.$dados['nacionalidade'].
                               '<br>Tipo de Usuário: '.$dados['Tipo'].
                               '<br>Equipe: '.$dados['equipe_codigo'];
                    }
                }
            }
            catch(Exception $erro)
            {
                echo "Algo deu errado <br><br> $erro";
            }
        }//fim do consultar usuário


        function consultarEquipe(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn = $conexao->conectar();//abre conexão
                $sql  = "select * from equipe where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo)
                    {
                        return '<br>Código: '.$dados['codigo'].
                               '<br>Nome da Equipe: '.$dados['nome'].
                               '<br>Abreviação: '.$dados['abreviacao']. 
                               '<br>País: '.$dados['dtDeNascimento']; 
                    }
                }
            }
            catch(Exception $erro)
            {
                echo "Algo deu errado <br><br> $erro";
            }
        }//fim do consultar equipe


        function consultarPartida(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn = $conexao->conectar();//abre conexão
                $sql  = "select * from partida where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo)
                    {
                        return '<br>Código: '.$dados['codigo'].
                               '<br>Resultado: '.$dados['resultado'].
                               '<br>Status da Partida: '.$dados['statuss']. 
                               '<br>Campeonato: '.$dados['campeonato_codigo']; 
                    }
                }
            }
            catch(Exception $erro)
            {
                echo "Algo deu errado <br><br> $erro";
            }
        }//fim do consultar partida


        function consultarCampeonato(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn = $conexao->conectar();//abre conexão
                $sql  = "select * from campeonato where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo)
                    {
                        return '<br>Código: '.$dados['codigo'].
                               '<br>Nome do Campeonato: '.$dados['nomeDoCampeonato'].
                               '<br>Data de Inicio: '.$dados['dataInicio']. 
                               '<br>Data de Encerramento: '.$dados['dataFim'].
                               '<br>Prémio: '.$dados['premio']. 
                               '<br>Jogo: '.$dados['jogo_codigo']; 
                    }
                }
            }
            catch(Exception $erro)
            {
                echo "Algo deu errado <br><br> $erro";
            }
        }//fim do consultar campeonato


        function consultarJogo(Conexao $conexao, int $codigo)
        {
            try
            {
                $conn = $conexao->conectar();//abre conexão
                $sql  = "select * from jogo where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo)
                    {
                        return '<br>Código: '.$dados['codigo'].
                               '<br>Nome do Jogo: '.$dados['nome'].
                               '<br>Desenvolvedora: '.$dados['desenvolvedora']. 
                               '<br>Gênero: '.$dados['genero'];
                    }
                }
            }
            catch(Exception $erro)
            {
                echo "Algo deu errado <br><br> $erro";
            }
        }//fim do consultar jogo


    }//fim do consultar

?> 
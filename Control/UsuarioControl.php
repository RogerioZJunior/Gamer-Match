<?php
    namespace Projeto\GamerMatch\Control;//conectar os arquivos
    require_once('../Model/Usuario.php');//acessar o conteudo do arquivo
    use Projeto\GamerMatch\Model\Usuario;//acessar e indicar a classe e seus metodos

    class Control{
        private Usuario $usuario;

        public function __construct(Usuario $usuario){
            $this->usuario = $usuario;//cadastrar usuario
        }//fim do contrutor

        //consultar
        public function consultarUsuario(): string
        {
            return "código: "                 .$this->usuario->codigo.
                   "<br>Nome Real:"           .$this->usuario->nomeReal.
                   "<br>nickName:"            .$this->usuario->nickName.
                   "<br>Data De Nascimento:"  .$this->usuario->dtDeNascimento.
                   "<br>Nacionalidade:"       .$this->usuario->nacionalidade.
                   "<br>Login:"               .$this->usuario->login.
                   "<br>Senha:"               .$this->usuario->senha.
                   "<br>Tipo de Usuário:"     .$this->usuario->tipo.
                   "<br>Equipe:"              .$this->usuario->equipe_codigo;
        }//fim do método

        public function atualizarNomeReal(string $nomeReal):string
        {
            $this->usuario->nomeReal = $nomeReal;
            return  "$nomeReal, atualizado com sucesso!";
        }// fim do nome Real

         public function atualizarEndereco(string $endereco):string
        {
        
            $this->cliente->endereco = $endereco;
            return "$endereco, atualizado com sucesso!";
        }//fim do endereço

          public function atualizarTelefone(string $telefone):string
        {
            $this->cliente->telefone = $telefone;
            return "$telefone, atualizado com sucesso!";  
        }//fim do telefone

        
          public function atualizarData(string $data):string
        {
                $this->cliente->data = $data;
                return "Data De Nascimento, atualizado com sucesso!";
        }//fim do Data

        public function excluir():int
        {
            $cod = $this->cliente->codigo; 
            $this->cliente->codigo            = 0;
            $this->cliente->nome              = "";
            $this->cliente->telefone          = "";
            $this->cliente->endereco          = "";
            $this->cliente->dataDeNascimento  = "";
            return 1;
        }// fim do excluir

    }//fim da classe Control
?>
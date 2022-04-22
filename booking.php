<?php
Class Booking{

    private $conexao;
    //CONEXAO
    public function __construct($dbname, $host, $user, $password){
        try {
            $this->conexao = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $password);
        } catch (PDOException $p) {
            echo "Erro com a base de dados.".$p->getMessage();
        }
        catch(Excepton $g){
            echo "Erro generico".$g->getMessage();
        }
    }

    
    //FAZER RESERVA
    public function reservar($nome, $telefone, $idade, $corte, $preco, $dia, $hora, $observ){
        $cmd = $this->conexao->prepare("SELECT `dia`, `hora` FROM `clientes` WHERE dia=:dia and hora = :hora");
        $cmd->bindValue(":dia",$dia);
        $cmd->bindValue(":hora",$hora);
        $cmd->execute();

        $row = $cmd->rowCount();

        if($row > 0){
            return false;
        }else{
            $cmd = $this->conexao->prepare("INSERT INTO `clientes`(`nome`, `telefone`, `idade`, `corte`, `preco`, `dia`, `hora`, `observ`) VALUES (:nome, :tel, :idade, :corte, :preco, :dia, :hora, :observ)");
            $cmd->bindValue(":nome",$nome);
            $cmd->bindValue(":tel",$telefone);
            $cmd->bindValue(":idade",$idade);
            $cmd->bindValue(":corte",$corte);
            $cmd->bindValue(":preco",$preco);
            $cmd->bindValue(":dia",$dia);
            $cmd->bindValue(":hora",$hora);
            $cmd->bindValue(":observ",$observ);
            $cmd->execute();

            return true;
        }
    }

    //VALIDAR NOME
    public function nomeVerif($nome){
        if(empty($nome)){
            return false;
        }elseif(preg_match('|^[\pL\s]+$|u', $nome)){
            return true;
        }else{
            return false;
        }

        // $nome = str_replace(" ", "", $name);
        // if(!ctype_alpha($nome)){
        //     return false;
        // }else{
        //     return true;
        // }
    }

    //VALIDAR TELEFONE
    public function telVerif($tel){
        $telefone = strval($tel);
        if(strlen($telefone) != 9){
            return false;
        }elseif(!is_numeric($telefone)){
            return false;
        }else{
            if(
            substr($telefone, 0, 2) === "82" || 
            substr($telefone, 0, 2) === "83" || 
            substr($telefone, 0, 2) === "84" || 
            substr($telefone, 0, 2) === "85" || 
            substr($telefone, 0, 2) === "86" || 
            substr($telefone, 0, 2) === "87"
            ){
                return true;
            }else{
                return false;
            }
        }
    }

    //VALIDAR IDADE
    public function idadeVerif($idade){
        if(!is_numeric($idade)){
            return false;
        }elseif($idade <=5 || $idade >=80){
            return false;
        }else{
            return true;
        }
    }

    //VALIDAR CORTE
    public function corteVerif($corte){
        if(empty($corte)){
            return false;
        }else{
            return true;
        }
    }

    //VALIDAR DATA
    public function dataVerif($dia){
        if(empty((int)$dia)){
            return false;
        }else{
            return true;
        }
    }

    //VALIDAR HORA
    public function horaVerif($hora){
        if(empty($hora)){
            return false;
        }else{
            return true;
        }
    }
}

?>
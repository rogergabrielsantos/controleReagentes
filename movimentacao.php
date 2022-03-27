<?php

class movimentacao{
            
    private $reagente;
    private $codReagente;
    private $quantidade;
    private $frasco;
    private $validade;
    private $DataEntrada;
    private $origem;
    private $codEstoque;
    private $estado;
     
    
    function getEstado() {
        return $this->estado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

         function getCodEstoque() {
         return $this->codEstoque;
     }

     function setCodEstoque($codEstoque) {
         $this->codEstoque = $codEstoque;
     }

         function __construct($reagente, $codReagente, $quantidade, $frasco, $validade, $DataEntrada, $origem, $estado) {
        $this->reagente = $reagente;
        $this->codReagente = $codReagente;
        $this->quantidade = $quantidade;
        $this->frasco = $frasco;
        $this->validade = $validade;
        $this->DataEntrada = $DataEntrada;
        $this->origem = $origem;
        $this->estado = $estado;
     
    }
    function getReagente() {
        return $this->reagente;
    }

    function getCodReagente() {
        return $this->codReagente;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getFrasco() {
        return $this->frasco;
    }

    function getValidade() {
        return $this->validade;
    }

    function getDataEntrada() {
        return $this->DataEntrada;
    }

    function getOrigem() {
        return $this->origem;
    }

   
    function setReagente($reagente) {
        $this->reagente = $reagente;
    }

    function setCodReagente($codReagente) {
        $this->codReagente = $codReagente;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setFrasco($frasco) {
        $this->frasco = $frasco;
    }

    function setValidade($validade) {
        $this->validade = $validade;
    }

     function setDataEntrada($DataEntrada) {
        $this->DataEntrada = $DataEntrada;
    }

    function setOrigem($origem) {
        $this->origem = $origem;
    }

 

 function insere($l) {
      $sql= mysqli_query($l,"INSERT INTO movimentacao (reagente, codReagente,quantidade,frasco,validade,dataEntrada,origem, estado) VALUES ('$this->reagente','$this->codReagente','$this->quantidade','$this->frasco','$this->validade','$this->DataEntrada','$this->origem','$this->estado')") or  die(mysqli_error_());
        //echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='saida.php';</script>");
    }
    
    function delete($cod,$l) {
       $sql= mysqli_query($l,"delete from movimentacao where cod='$cod'") or  die(mysqli_error_());  
     // echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='menu.php';</script>");   
    }
    
    function atualiza($cod,$l) {
       $sql= mysqli_query($l,"update movimentacao set reagente= '$this->reagente', estado = '$this->estado'  where codReagente='$cod'") or  die(mysqli_error_());  
        //  echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='clientesA.php';</script>");

         
    }
    
    function mostra($cod,$l) {
       $sql= mysqli_query($l,"select * from movimentacao where cod = '$cod'") or  die(mysqli_error_());  
        while($row =  mysqli_fetch_array($sql)) {
            $this->reagente = $row['reagente'];
            $this->codReagente = $row['codReagente'];
            $this->quantidade = $row['quantidade'];
            $this->frasco = $row['frasco'];
            $this->validade = $row['validade'];
            $this->DataEntrada= $row['dataEntrada'];
            $this->origem= $row['orgiem'];
            $this->estado = $row['estado'];
           
        }
    }
    
    function mostra2($l,$cod,$validade,$frasco) {
       $sql= mysqli_query($l,"select * from movimentacao where codReagente = '$cod' and validade = '$validade' and frasco = $frasco") or  die(mysqli_error_());  
        while($row =  mysqli_fetch_array($sql)) {
            $this->reagente = $row['reagente'];
            $this->codReagente = $row['codReagente'];
            $this->quantidade = $row['quantidade'];
            $this->frasco = $row['frasco'];
            $this->validade = $row['validade'];
            $this->DataEntrada= $row['dataEntrada'];
            $this->origem= $row['orgiem'];
             $this->estado = $row['estado'];
           
        }
    }
     function mostra3($l,$ini,$final,$movimento) {
       $sql= mysqli_query($l,"select * from movimentacao where dataEntrada >= '$ini' and dataEntrada <= '$final' and origem like '$movimento'") or  die(mysqli_error_());  
        while($row =  mysqli_fetch_array($sql)) {
            $this->reagente[] = $row['reagente'];
            $this->codReagente[] = $row['codReagente'];
            $this->quantidade[] = $row['quantidade'];
            $this->frasco[] = $row['frasco'];
            $this->validade[] = $row['validade'];
            $this->DataEntrada[]= $row['dataEntrada'];
            $this->origem[] = $row['origem'];
            $this->codEstoque[]= $row['cod'];
            $this->estado[] = $row['estado'];
         
        }
    }
    
    
    
}

        

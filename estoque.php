    <?php


class estoque {

    private $codReagente;
    private $reagente;
    private $quantidade;
    private $frasco;
    private $validade;
    private $codEstoque;
    private $qtd;
    private $estado;
    function getEstado() {
        return $this->estado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

        function __construct($codReagente, $reagente, $quantidade, $frasco, $validade,$estado) {
        $this->codReagente = $codReagente;
        $this->reagente = $reagente;
        $this->quantidade = $quantidade;
        $this->frasco = $frasco;
        $this->validade = $validade;
        $this->estado = $estado;
    }
    function getCodReagente() {
        return $this->codReagente;
    }
    function getCodEstoque() {
        return $this->codEstoque;
    }

    function getQtd() {
        return $this->qtd;
    }

    function setCodEstoque($codEstoque) {
        $this->codEstoque = $codEstoque;
    }

    function setQtd($qtd) {
        $this->qtd = $qtd;
    }

        function getReagente() {
        return $this->reagente;
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

    function setCodReagente($codReagente) {
        $this->codReagente = $codReagente;
    }

    function setReagente($reagente) {
        $this->reagente = $reagente;
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

    function insere($l) {
        $sql= mysqli_query($l,"INSERT INTO estoque (reagente, codReagente,quantidade,frasco,validade,estado) VALUES ('$this->reagente','$this->codReagente','$this->quantidade','$this->frasco','$this->validade','$this->estado')") or  die(mysqli_error_()); 
   
     // echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='entrada.php';</script>");
    }
    
    function delete($cod,$l) {
       $sql= mysqli_query($l,"delete from esroque where cod='$cod'") or  die(mysqli_error_());  
      echo("<script type='text/javascript'> alert('Dado Excluidos com sucesso !!!'); location.href='menu.php';</script>");   
    }
    
    function atualiza($cod,$l) {
       $sql= mysqli_query($l,"update estoque set reagente = '$this->reagente', estado = '$this->estado'  where codReagente='$cod'") or  die(mysqli_error_());  
         // echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='clientesA.php';</script>");

         
    }
    
    function atualiza2($cod,$l,$qtd) {
       $sql= mysqli_query($l,"update estoque set quantidade ='$qtd' where cod='$cod'") or  die(mysqli_error_());  
         //echo("<script type='text/javascript'> alert('Dados Alterados com sucesso !!!'); location.href='entrada.php';</script>");

         
    }
    
    
    
     function mostra($cod,$l) {
       $sql= mysqli_query($l,"select * from estoque where codReagente = '$cod'") or  die(mysqli_error_());  
        while($row =  mysqli_fetch_array($sql)) {
            $this->codReagente[] = $row['codReagente'];
            $this->reagente[] = $row['reagente'];
            $this->quantidade[] = $row['quantidade'];
            $this->frasco[] = $row['frasco'];
            $this->validade[] = $row['validade'];
            $this->codEstoque[] = $row['cod']; 
            $this->estado[]=$row['estado'];
        }
    
    
     }
    function mostra2($l,$cod,$validade,$frasco) {
       $sql= mysqli_query($l,"select * from estoque where codReagente = '$cod' and validade = '$validade' and frasco = $frasco") or  die(mysqli_error_());  
        while($row =  mysqli_fetch_array($sql)) {
            $this->qtd = $row['quantidade'];
            $this->codEstoque = $row['cod'];        
           
        }
    }
    


    function saida2($cod,$l) {
     $sql= mysqli_query($l,"update estoque set quantidade = '$this->quantidade' where cod='$cod'") or  die(mysqli_error_());  
   
         
         
    }

    
    function mostra3($l,$cod) {
       $sql= mysqli_query($l,"select * from estoque where codReagente = '$cod'") or  die(mysqli_error_());  
        while($row =  mysqli_fetch_array($sql)) {
            $teste[] = $row;     
           
        }
       return $teste; 
    }
    
    
    function mostra4($l) {
       $sql= mysqli_query($l,"select * from estoque order by reagente") or  die(mysqli_error_());  
        while($row =  mysqli_fetch_array($sql)) {
            $this->codReagente[] = $row['codReagente'];
            $this->reagente[] = $row['reagente'];
            $this->quantidade[] = $row['quantidade'];
            $this->frasco[] = $row['frasco'];
            $this->validade[] = $row['validade'];
            $this->codEstoque[] = $row['cod']; 
            $this->estado[]=$row['estado'];
        }
    
    
     }
      function mostra5($nome,$l) {
       $sql= mysqli_query($l,"select * from estoque where reagente = '$nome'") or  die(mysqli_error_());  
        while($row =  mysqli_fetch_array($sql)) {
            $this->codReagente[] = $row['codReagente'];
            $this->reagente[] = $row['reagente'];
            $this->quantidade[] = $row['quantidade'];
            $this->frasco[] = $row['frasco'];
            $this->validade[] = $row['validade'];
            $this->codEstoque[] = $row['cod']; 
            $this->estado[]=$row['estado'];
        }
    
        }
}
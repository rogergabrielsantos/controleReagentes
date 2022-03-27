<?php
require_once 'reagente.php';
require_once 'procedimentos.php';
require_once 'estoque.php';
require_once 'movimentacao.php';


$codigo= isset($_POST['codReagente'])?$_POST['codReagente']:"";
$codEstoque= isset($_POST['codEstoque'])?$_POST['codEstoque']:"";
$quantidade = isset($_POST['quantidade'])?$_POST['quantidade']:"";
$data = isset($_POST['data'])?$_POST['data']:"";
$nome = isset($_POST['nome'])?$_POST['nome']:"";

$A = new estoque("", "","","","","");



if($codigo<>""){
    $A->mostra($codigo, $link);
    
    if($A->getQuantidade()=="" and $quantidade ==""){
         echo("<script type='text/javascript'> alert('Reagente sem estoque !!!'); location.href='saida.php';</script>");
    }
}elseif($nome<>"") {
    $A->mostra5($nome, $link);  
    echo 'passei';
    
    if($A->getReagente()=="" and $quantidade ==""){
      echo("<script type='text/javascript'> alert('Reagente sem estoque disgraca  !!!'); location.href='saida.php';</script>");
    }
}






if($quantidade<>""){
    $teste = $A->getQuantidade()[0];
    $teste= $teste - $quantidade;
    $A->setQuantidade($teste);
    $A->saida2($codEstoque, $link);
    $reagente = $A->getReagente()[0];
    $cod1 =$A->getCodReagente()[0];
    $frasco = $A->getFrasco()[0];
    $validade =$A->getValidade()[0];
    $estado =$A->getEstado()[0];
    $B = new movimentacao($reagente ,$cod1,$quantidade,$frasco,$validade,$data,"saida",$estado);
   $B->insere($link);
 echo("<script type='text/javascript'> alert('Dado Enviados com sucesso !!!'); location.href='saida.php';</script>");
 
  
}



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel = "stylesheet" type="text/css" href = "css/estilo.css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="js/funcoes.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
     
        <script>

        </script>
    </head>
<body>
		<div id="login">
			<h3 class="text-center text-info">Menu Principal</h3>
			<br>
			<div class="text-center">
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md"   onclick ="window.location.assign('menuDois.php')" value="Reagentes">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('entrada.php')" value="Entrada">
                 </span>
				<span class="form-group">
					<input type="button" name="button" class="btn  btn-outline-primary" onclick= "window.location.assign('saida.php')"  value="Saida">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('movimento.php')"  value="Movimentação">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('relatorio.php')"  value="Estoque">
                 </span>
                              <span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('logout.php')"  value="Sair">
                 </span>
               </div>
   			  <br> <br>
		</div>     
		<div class="container">
		
			<form name = "signup" method= "post" action="saida.php">
				<div class="row">
                            <div class="col" >
				<div class="form-group" >
                                    <label for = "cnome" class="label" onclick="limpa1(1)">Codigo:</label>
                                    <input class="form-control" type ="text" id="codigo" readonly name="codReagente"  placeholder="Código" value=" <?php echo $codigo; ?>"  />
                                    
				</div>
                            </div>
                            <div class="col-7" >
				<div class="form-group" >
                                    <label for = "cnome" class="label"  onclick="limpa1(2)">Nome:</label>
                                    
                                    <input  class="form-control" type="text" id="nome" readonly name="nome"  value=" <?php echo $nome; ?>">
				</div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                    <label class="label col-form-label" >	</label>
                                    <input type="submit" id="botao1" class="btn btn-info  btn-block"  name= 'salvar' value="Ok"/>
				</div>
                            </div>
                        </div>
			<div class="row">
                            <div class="col" >
                                <div class="form-group" >
                                    <label class="label" >Cod Reagente</label>
                                </div>
                            </div>  
                            <div class="col-3" >
                               <div class="form-group" >
                                    <label class="label" >Reagente</label>
                                </div>
                            </div>  
                            <div class="col" >
                                <div class="form-group" >
                                    <label class="label" >Validade:</label>
                                </div>
                            </div>  
                        <div class="col" >
                            <div class="form-group" >
                                <label class="label" >Frasco:</label>
                            </div>
                        </div>
                        <div class="col" >
                            <div class="form-group" >
                                <label class="label" >Unidade:</label>
                            </div>
                        </div> 
                        <div class="col" >
                            <div class="form-group" >
                                <label class="label" >Estoque:</label>
                            </div>
                        </div>  
                       
                        <div class="col" >
                            <div class="form-group" >
                                <label class="label" >Quantidade:</label>
                            </div>
                        </div>  
                        </div>  
                            
                            
                            
                     <div style="height: 200px;">
                    <?php
                        if($codigo<>"" or $nome<>""){
                        for ($i = 0; $i < count($A->getCodReagente()); $i++) {
                        
                        echo '    
                        
                        <div class="row">
                            
			    <div class="col" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getCodReagente()[$i] .'</label>
                                   <input   type ="hidden" name="codReagente" value="'.$A->getCodReagente()[$i] .'" />
                                </div>
                            </div>
                             <div class="col-3" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getReagente()[$i] .'</label> 
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                    <label class="label" >'.date("d/m/y", strtotime($A->getValidade()[$i])) .'</label> 
                               </div>
                            </div>
                             <div class="col" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getFrasco()[$i] .'</label>
                                </div>
                            </div>
                                <div class="col" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getEstado()[$i] .'</label>
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getQuantidade()[$i] .'</label>
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-check form-check-inline" >
                                    <input   class="form-check-input" type ="radio" name="codEstoque" value="'.$A->getCodEstoque()[$i] .'" />
                                </div>                            
                            </div>
                        </div>'
                        ;}}
                        ?>
                        </div>  		
			<div class="row">
                            <div class="col-6" >
				<div class="form-group" >
                                  
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                    <label class="label" >data:</label>
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                  <input  class="form-control" type ="date" id="data"  name="data"   />    
                                </div>
                            </div>                     
                            <div class="col" >
				<div class="form-group" >
                                   <label class="label" >Quantidade:</label>
                                  
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                   <input  class="form-control" type ="text" id="quantidade"  name="quantidade"   />
                                  
                                </div>
                            </div>
                        
                        </div>    
                        
                            
			<input type="submit" id="botao1" class="btn btn-info btn-md" name= 'salvar' value="Dar Baixa"/>
			<input type="button" id="botao1" class="btn btn-info btn-md" name= 'excluir' onclick= "window.location.assign('saida.php')"   value="Cancelar"/>
			<input type='button' id="botao1" class="btn btn-info btn-md" name= 'sair' onclick= "window.location.assign('menu.php')"  value='Sair'>
		</form>
	    
</div>          
   
     <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>    
<script type="text/javascript">
$(function() {
   $("#nome").autocomplete({
        source: "procReagente.php",
        minLength: 1
    });                

});
</script>
    
    </body>
</html>



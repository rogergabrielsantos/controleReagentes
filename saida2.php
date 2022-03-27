<?php
require_once 'reagente.php';
require_once 'procedimentos.php';
require_once 'estoque.php';
require_once 'movimentacao.php';


$codigo= isset($_POST['codReagente'])?$_POST['codReagente']:"";
$codEstoque= isset($_POST['codEstoque'])?$_POST['codEstoque']:"";
$quantidade = isset($_POST['quantidade'])?$_POST['quantidade']:"";



$A = new estoque("", "","","","");
$A->mostra($codigo, $link);
$B = new movimentacao("","","","","","","");


if($codEstoque<>"" and $codigo==""){
    $A->saida($codEstoque, $link, $quantidade);
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
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('saida.php')"  value="Saida">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('movimento.php')"  value="Estoque">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('relatorio.php')"  value="Relatórios">
                 </span>
               </div>
   			  <br> <br>
		</div>     
		<div class="container">
		
			<form name = "signup" method= "post" action="saida.php">
				<div class="row">
				<div class="col" >
					<div class="form-group" >
						<label for = "cnome" class="label" >Codigo:</label>
						<input  class="form-control" type ="text" id="codReagente" name="codReagente" placeholder="Código" />
					</div>
				</div>
				<div class="col-9" >
					<div class="form-group" >
						<label for = "cnome" class="label" >Nome:</label>
						<input class="form-control" type ="text" id="nome" name="nome" placeholder=" Nome do reagente" />
					</div>
				</div>
				<div class="col" >
						<label class="label col-form-label" >	</label>					
						<input type="submit" id="botao1" class="btn btn-info  btn-block" name= 'salvar' value="Ok"/>
						
				</div>
						
			</div>
			<div class="row">
                            <div class="col" >
                                <div class="form-group" >
                                    <label class="label" >Cod Reagente</label>
                                </div>
                            </div>  
                            <div class="col" >
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
                                <label class="label" >Estoque:</label>
                            </div>
                        </div>  
                       
                        <div class="col" >
                            <div class="form-group" >
                                <label class="label" >Quantidade:</label>
                            </div>
                        </div>  
                        </div>  
                            
                            
                            
                     <div style="height: 250px;">
                    <?php
                        if($codigo){
                        for ($i = 0; $i < count($A->getCodReagente()); $i++) {
                        
                        echo '    
                        
                        <div class="row">
                            <input  type ="hidden" name= "codEstoque" id="codigo" value="'.$A->getCodEstoque()[$i] .'" />
			    <div class="col" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getCodReagente()[$i] .'</label>
                                </div>
                            </div>
                             <div class="col" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getReagente()[$i] .'</label> 
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                    <label class="label" >'.$A->getValidade()[$i] .'</label> 
                               </div>
                            </div>
                             <div class="col" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getFrasco()[$i] .'</label>
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                   <label class="label" >'.$A->getQuantidade()[$i] .'</label>
                                </div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                   <input  class="form-control" type ="text" id="nome"  name="quantidade"   />
                                  
                                </div>
                            </div>
                        </div>'
                        ;}}
                        ?>
                        </div>  		
				           
			<input type="submit" id="botao1" class="btn btn-info btn-md" name= 'salvar' value="Dar Baixa"/>
			<input type="button" id="botao1" class="btn btn-info btn-md" name= 'excluir' onclick= "window.location.assign('saida.php')"   value="Cancelar"/>
			<input type='button' id="botao1" class="btn btn-info btn-md" name= 'sair' onclick= "window.location.assign('menu.php')"  value='Sair'>
		</form>
	    
</div>          
   
   
    
    </body>
</html>



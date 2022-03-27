<?php
  include 'conexao.php';
  require_once 'reagente.php';
  $nome =isset($_POST['nome1'])?$_POST['nome1']:"";
  $codigo =isset($_POST['codigo'])?$_POST['codigo']:"";
 $estado = isset($_POST['estado'])?$_POST['estado']:"";
  
  $A = new reagente("","","","","","","","","","","","","","","","");
  
  
 
  $codigo= intval($codigo); 
   
  if($codigo<>"" and $nome==""){
  $A->mostra($codigo, $link);
  $nome = $A->getNome(); 
  $estado = $A->getEstado();
 
  }
  $nome =strval($nome);
  
 if($nome<>"" and $codigo ==""){
  $A->mostra2($nome, $link);
  $codigo = $A->getCodigo();    
  $estado = $A->getEstado();

  
 }
  
 ?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel = "stylesheet" type="text/css" href = "css/estilo.css" >
	<script src="js/funcoes.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
        <script>
            function actionMuda(){
                document.forms[0] = "movimentacaoBanco.php";
               document.forms['signup'].action = "entrada.php";
              document.forms[0].submit();
            }
            
                         
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
					<input type="button" name="button" class="btn  btn-outline-primary" onclick= "window.location.assign('entrada.php')" value="Entrada">
                 </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('saida.php')"  value="Saida">
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
		
                    <form name = "signup" method= "post" id= "fomulario" action="movimentacaoBanco.php">
			<div class="row">
                            <div class="col" >
				<div class="form-group" >
                                    <label for = "cnome" class="label" onclick="limpa1(1)">Codigo:</label>
                                    <input class="form-control" type ="text" id="codigo" readonly name="codigo"  placeholder="Código" value=" <?php echo $codigo; ?>"  />
                                    
				</div>
                            </div>
                            <div class="col-7" >
				<div class="form-group" >
                                    <label for = "cnome" class="label"  onclick="limpa1(2)">Nome:</label>
                                    
                                    <input  class="form-control" type="text" id="nome" readonly name="nome1"  value=" <?php echo $nome; ?>">
				</div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                    <label class="label col-form-label" >	</label>
                                    <input type="button" id="botao1" class="btn btn-info  btn-block"  onclick="actionMuda()" btn-block" name= 'salvar' value="Ok"/>
				</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" >
				<div class="form-group" >
                                    <label for = "cdoc"  class="label" >Quantidade: </label>
                                    <input   type ="text" class="form-control" name="quantidade" placeholder="Quantidade"/>
				</div>
                            </div>
                            <div class="col" >
				<div class="form-group" >
                                    <label class="label" >Frasco:</label>
                                   <input   type ="text" class="form-control" name="frasco"  placeholder="Frasco"/>
				</div>
                            </div>
                         <div class="col" >
				<div class="form-group" >
                                    <label class="label" >Unidade</label>
                                    
                                     <input   type ="text" class="form-control" name="estado" readonly placeholder="ML/G" value="<?php echo $estado; ?>" />
				</div>
                            </div>
                        
                        
                        
                        </div>	
			
			<div class="row">
                            
				<div class="col" >
					<div class="form-group" >
						<label class="label" >Validade:</label>
						<input   type ="date" class="form-control" name="validade"/>
					</div>
				</div>
				<div class="col" >
					<div class="form-group" >
						<label for = "cdoc"  class="label" >Data Entrada</label>
						<input   type ="date" class="form-control" name="entrada" />
					</div>
				</div>
				
				<div class="col" >		
					<fieldset class="form-group">
						<legend class="col-form-label" >Origem: </legend>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="radio" id="sim" name="origem" value="compra"/>
								<label class="form-check-label" for="sim" >Compra </label>
							</div>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="radio" id="nao" name="origem" value="devolucao"/>
									<label class="form-check-label" for="nao" >Devolução </label>
							</div>
					</fieldset>
				</div>

			</div>
				
									
						
				           
			<input type="submit" id="botao1" class="btn btn-info btn-md" name= 'salvar' value="Adcionar"/>
			<input type="submit" id="botao1" class="btn btn-info btn-md" name= 'excluir' value="Cancelar"/>
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

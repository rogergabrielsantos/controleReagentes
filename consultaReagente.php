<?php

require_once 'reagente.php';
require_once 'procedimentos.php';

$nome=isset($_POST['nome'])?$_POST['nome']:""; 
$codigo=isset($_POST['codigo'])?$_POST['codigo']:""; 
$A = new reagente("","","","","","","","","","","","","","","","");

if($codigo=="" and $nome==""){
    echo("<script type='text/javascript'> alert('Insira um Código ou Nome do Reagenre !!!'); location.href='menuDois.php';</script>");
}

if($codigo){
  $A->mostra($codigo,$link);
  $nome=$A->getNome();
  if($nome===""){
     echo("<script type='text/javascript'> alert('Codigo Não Encontrado !!!'); location.href='menuDois.php';</script>");  
  }
  
} else {
    $A->mostra2($nome, $link);
    $codigo = $A->getCodigo();
    
}
    
    $catmat= $A->getCatmat();
    $descricao= $A->getDescricao(); 
    $cas =$A->getCas();
    $formula =$A->getFormula();
    $pf =$A->getPf();
    $pm =$A->getPm();
    $exercito = $A->getExercito();
    $cas =$A->getCas();
    $estado =$A->getEstado();
    $localizacao =$A->getLocalizacao();
    $inflamavel =$A->getInflamavel();
    $corrosivo = $A->getCorrosivo();
    $reativo = $A->getReativo();
    $toxico = $A->getToxico();
    $patogenico = $A->getPatogenico();
    
    //
    
    

if($estado=="G"){
        $estado1="checked ='checked'";
        $estado2="";
    } else {
        $estado1="";
        $estado2="checked ='checked'";
     }
     $x =  $inflamavel =="sim" ? "checked ='checked'":"";
     $y =  $corrosivo =="sim" ? "checked ='checked'":"";
     $z =  $reativo =="sim" ? "checked ='checked'":"";
     $w =  $toxico =="sim" ? "checked ='checked'":"";
     $t =  $patogenico =="sim" ? "checked ='checked'":"";
     $m =  $pm =="sim" ? "checked ='checked'":"";
     $n =  $exercito =="sim" ? "checked ='checked'":"";
     $o =  $pf =="sim" ? "checked ='checked'":"";
     
     
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
					<input type="button" name="button" class="btn  btn-outline-primary"   onclick ="window.location.assign('menuDois.php')" value="Reagentes">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('entrada.php')" value="Entrada">
                 </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('saida.php')"  value="saida">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('estoque.php')"  value="Estoque">
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
		
                    <form name = "signup" method= "post" action="reagenteBanco.php">
				<div class="row">
				<div class="col" >
					<div class="form-group" >
						<label for = "cnome" class="label" >Codigo:</label>
						<input  required="required" class="form-control" type ="text" id="codigo" name="codigo"  value ="<?php echo $codigo;?>"  />
					</div>
				</div>
				<div class="col-7" >
					<div class="form-group" >
						<label for = "cnome" class="label" >Nome:</label>
						<input  required="required" class="form-control" type ="text" id="nome" name="nome" value ="<?php echo $nome;?>"  />
					</div>
				</div>
				<div class="col" >
					<div class="form-group" >
						<label for = "cdoc"  class="label" >formula: </label>
						<input   type ="text" class="form-control" name="formula" value ="<?php echo $formula;?>" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col" >
					<div class="form-group" >
						<label class="label" >CAS:</label>
						<input   type ="text" class="form-control" name="cas" value ="<?php echo $cas;?>" />
					</div>
				</div>
				<div class="col" >
					<div class="form-group" >
						<label for = "cdoc"  class="label" >CATMAT</label>
						<input   type ="text" class="form-control" name="catmat"value ="<?php echo $catmat;?>" />
					</div>
				</div>
				<div class="col" >
					<div class="form-group" >
						<label for = "cdoc"  class="label" >Localização: </label>
						<input   type ="text" class="form-control" name="localizacao" value ="<?php echo $localizacao;?>" />
					</div>
				</div>
			</div>
			<div class="form-group" >
				<label for = "cdoc"  class="label" >Descrição: </label>
				<input   type ="text" class="form-control" name="descricao" value ="<?php echo $descricao;?>" />
			</div>
			<div class="row">
				<div class="col" >		
					<fieldset class="form-group">
						<legend class="col-form-label" >Controlado : </legend>
							<div class="form-check form-check-inline" >
                                                           <input   class="form-check-input" type ="checkbox" <?php echo $o;?> id="check" name="pf" "/>
                                                           <label class="form-check-label"   for="check">Policia Federal </label>
					
							</div>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="checkbox" <?php echo $m;?> id="check" name="pm"/>
                                                                <label class="form-check-label"   for="check">Policia Militar </label>
					
							</div>
                                                        <div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="checkbox" <?php echo $n;?> id="check" name="exercito"/>
                                                                <label class="form-check-label"   for="check">Exército</label>
					
							</div>
					</fieldset>
				</div>
				<div class="col" >	
					<fieldset class="form-group">
						<legend class="col-form-label" >Estado Fisico</legend>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="radio" id="solido" <?php echo $estado1;?> name="estado" value="g"/>
								<label class="form-check-label" for= "solido" >Solido </label>
							</div>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="radio" id="liquido"  <?php echo $estado2;?> name="estado" value="Ml"/>
									<label class="form-check-label" for= "liquido" >Liquido </label>
							</div>
					</fieldset>
				</div>
			</div>
				
			<div class="form-group row" >
				<div class="col-sm-2">Periculosidade:</div>
				<div class="col-sm-10">
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" <?php echo $x;?> id="check" name="inflamavel" value="ML"/>
						<label class="form-check-label"   for="check">Inflamável </label>
					</div>
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox"  <?php echo $y;?> id="check2" name="Corrosivo" value="ML"/>
						<label class="form-check-label" for="check2">Corrosivo </label>
					</div>
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" id="check3" <?php echo $z;?> name="Reativo" value="ML"/>
						<label class="form-check-label" for="check3">Reativo </label>
					</div>
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" id="check4" <?php echo $w;?> name="Tóxico" value="ML"/>
						<label class="form-check-label" for="check4">Tóxico </label>
					</div>
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" id="check5" name="Patogênico" <?php echo $t;?> value="ML"/>
						<label class="form-check-label" for="check5">Patogênico </label>
					</div>
					
				</div>
				
			</div>
						
						
		<div class="form-group row" >
                    <div class="col-2" >
                    </div>
                    <div class="col" >
			<input type="submit" id="botao1" class="btn btn-info btn-md" name= 'alterar' value="Salvar"/>
                        <input type="submit" id="botao1" class="btn btn-info btn-md" name= 'excluir' value="Excluir"/>
                    </div>
                    <div class="col-5" >
                        <input type='submit' id="botao1" class="btn btn-info btn-md" name= 'sair' value='Sair   '>
                        <input type="button" id="botao1" class="btn btn-info btn-md" onclick= "window.location.assign('ListaReagente.php')"   value="Listar Reagentes"/>
                    </div>
                </div>   
                </form>
	    
</div>          
   
   
    
    </body>
</html>

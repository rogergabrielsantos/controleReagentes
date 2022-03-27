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
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('movimento.php')"  value="Movimentação">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('relatorio.php')" value="Estoque">
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
						<input  required="required" class="form-control" type ="text" id="codigo" name="codigo" placeholder="Código" />
					</div>
				</div>
				<div class="col-7" >
					<div class="form-group" >
						<label for = "cnome" class="label" >Nome:</label>
						<input  required="required" class="form-control" type ="text" id="nome" name="nome" placeholder=" Nome do reagente" />
					</div>
				</div>
				<div class="col" >
					<div class="form-group" >
						<label for = "cdoc"  class="label" >formula: </label>
						<input   type ="text" class="form-control" name="formula" placeholder="Formula"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col" >
					<div class="form-group" >
						<label class="label" >CAS:</label>
						<input   type ="text" class="form-control" name="cas" placeholder="CAS"/>
					</div>
				</div>
				<div class="col" >
					<div class="form-group" >
						<label for = "cdoc"  class="label" >CATMAT</label>
						<input   type ="text" class="form-control" name="catmat" placeholder="CATMAT"/>
					</div>
				</div>
				<div class="col" >
					<div class="form-group" >
						<label for = "cdoc"  class="label" >Localização: </label>
						<input   type ="text" class="form-control" name="localizacao" placeholder="Localização"/>
					</div>
				</div>
			</div>
			<div class="form-group" >
				<label for = "cdoc"  class="label" >Descrição: </label>
				<input   type ="text" class="form-control" name="descricao" placeholder="Descrição"/>
			</div>
			<div class="row">
				<div class="col" >		
					<fieldset class="form-group">
						<legend class="col-form-label" >Controlado: </legend>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="checkbox" id="check" name="pf"/>
                                                                <label class="form-check-label" for="check">Polícia Federal </label>
							</div>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="checkbox" id="check" name="pm"/>
                                                                <label class="form-check-label" for="check">Polícia Militar </label>
							</div>
                                                        <div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="checkbox" id="check" name="exercito"/>
                                                                <label class="form-check-label" for="check">Exército </label>
							</div>
					</fieldset>
				</div>
				<div class="col" >	
					<fieldset class="form-group">
						<legend class="col-form-label" >Estado Fisico</legend>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="radio" id="solido" name="estado" value="g"/>
								<label class="form-check-label" for= "solido" >Solido </label>
							</div>
							<div class="form-check form-check-inline" >
								<input   class="form-check-input" type ="radio" id="liquido" name="estado" value="Ml"/>
									<label class="form-check-label" for= "liquido" >Liquido </label>
							</div>
					</fieldset>
				</div>
			</div>
				
			<div class="form-group row" >
				<div class="col-sm-2">Periculosidade:</div>
				<div class="col-sm-10">
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" id="check" name="inflamavel"/>
						<label class="form-check-label" for="check">Inflamável </label>
					</div>
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" id="check2" name="corrosivo" />
						<label class="form-check-label" for="check2">Corrosivo </label>
					</div>
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" id="check3" name="reativo" />
						<label class="form-check-label" for="check3">Reativo </label>
					</div>
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" id="check4" name="toxico" />
						<label class="form-check-label" for="check4">Tóxico </label>
					</div>
					<div class="form-check form-check-inline" >
						<input   class="form-check-input" type ="checkbox" id="check5" name="patogenico"/>
						<label class="form-check-label" for="check5">Patogênico </label>
					</div>
					
				</div>
				
			</div>
						
						
				           
			<input type="submit" id="botao1" class="btn btn-info btn-md" name= 'salvar' value="salvar"/>
			<input type='submit' id="botao1" class="btn btn-info btn-md" name= 'sair' value='Sair'>
		</form>
	    
</div>          
   
   
    
    </body>
</html>

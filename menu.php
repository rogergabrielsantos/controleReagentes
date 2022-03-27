<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel = "stylesheet" type="text/css" href = "css/estilo.css" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/funcoes.js"></script>
    </head>
    <body>
	

	<div id="login">
      
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                      
                            <h3 class="text-center text-info">Menu Principal</h3>
							
                            <div class="text-center text-info">
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
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('movimento.php')"  value="Movimentação">
                </span>
				<span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('relatorio.php')"  value="Estoque">
                 </span>
                               <span class="form-group">
					<input type="button" name="button" class="btn btn-info btn-md" onclick= "window.location.assign('logout.php')"  value="Sair">
                 </span>
                         </div>
						 
                </div>
            </div>
   
    </div>
    </body>
</html>

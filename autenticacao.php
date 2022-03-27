
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>login</title>

<script type="text/javascript">
	function login(){
		setTimeout("window.location='menu.php'");
	
	}
function loginF(){
		setTimeout("window.location='index.php'",3000);
	
	}

</script>

</head>
<body>

	
	
	<?php
    
        include 'conexao.php';
		$usuario =$_POST['usuario'];
		$senha =$_POST['senha'];
        
		
		
        $sql= mysqli_query($link,"SELECT * FROM usuarios WHERE usuario ='$usuario' and senha = '$senha'") or die(mysqli_error());
              
                $row = mysqli_num_rows($sql);
                
		if($row==1){
		
			$_SESSION['usuario']= $usuario;
			$_SESSION['senha']= $senha;
			print_r($_SESSION);
			echo "<script>login()</script>";
			
		}else{
			
			echo ("<script type='text/javascript'> alert('Usuário ou senha incorretos !!!'); location.href='index.php';</script>");
			
		}
	
	?>
	
</body>
</html>
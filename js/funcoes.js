function botao(x){
	console.log(x)
	switch(x){
		case 1:
			window.location.assign("menu2.php")
		break
		case 2:
			window.location.assign("entrada.php")
		break 	
		case 3:
				window.location.assign("entrada.php")
		break 

}
		
	
}

function codigo(){
   // document.getElementById("codigoC").value = cod;
    alert("Eu sou um alert!");
    
    
}
 function actionMuda(){
                
                //document.forms[0] = "movimentacaoBanco.php";
               document.forms['signup'].action = "entrada.php";
              document.forms[0].submit();
            }
            
function  limpa(x){
    if(x==1){
        document.getElementById("nome").value = "";
        $('#nome').attr("readyonly",true);
        $('#codigo').attr("readyonly",false);
    }else{
        $('#nome').attr("readyonly",false);
        $('#codigo').attr("readyonly",true);
        document.getElementById("codigo").value = "";
    } 
}

 function actionMuda(){
              //  document.forms[0] = "movimentacaoBanco.php";
               document.forms['signup'].action = "entrada.php";
              document.forms[0].submit();
            }
            
function  limpa1(x){
    if(x==1){
        document.getElementById("nome").value = "";
        $('#codigo').removeAttr('readonly');
         $('#nome').attr('readonly', true);
       
    }else{
        $('#nome').removeAttr('readonly');
        $('#codigo').attr('readonly', true);
       
        document.getElementById("codigo").value = "";
    } 
}
 function  limpa(x){
                       if(x==1){
                                document.getElementById("nome").value = "";
                                $('#nome').attr("disabled",true);
                                 $('#codigo').attr("disabled",false);
                                
                            }else{
                                 $('#nome').attr("disabled",false);
                                 $('#codigo').attr("disabled",true);
                                 document.getElementById("codigo").value = "";
                            } 
                    }
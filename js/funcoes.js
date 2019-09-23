function validaCadastro(){
    //alert("IRADO!!");
    //debugger;
    if(document.cadUsuario.senha.value == document.cadUsuario.confir_senha.value){
        alert("Você foi cadastrado com sucesso!"); 
        return true;
    }else{
        alert("Verifique os campos de senha novamente.");
        return false;
    }
}

function esqueciSenha(){
    if(document.altSenha.senha.value == document.altSenha.confir_senha.value){
        alert("ok"); 
        return true;
    }else{
        alert("Verifique os campos de senha novamente.");
        return false;
    }
}
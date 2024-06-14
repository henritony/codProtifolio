function verificarSenha(){

    var checkPassword = (document.getElementById('senha').value);
    var confirmPassword = (document.getElementById('senhaC').value);

    if ((checkPassword) == (confirmPassword)){
        alert("Senha OK");
        Headers("location:")
        
    }else{
        alert("Senha diferentes");
    }

    
}
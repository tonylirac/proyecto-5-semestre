function validar(){
    var gamertag, correo, clave;
    gamertag = document.getElementById("gamertag").value;
    correo = document.getElementById("correo").value;
    clave = document.getElementById("clave").value;
    expresion = /\w+@\w+\.+[a-z]/;  
    if(gamertag==="" || correo==="" || clave==="" ){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(gamertag.length>30){
        alert("El gamertag es muy largo");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El correo no es valido");
        return false;
    }
    else if(correo.length>40 || clave.length>40){
        alert("El usuario y la clave solo deben de tener 40 caracteres como maximo");
        return false;
    }
}

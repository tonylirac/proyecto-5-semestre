function validar2(){
    var id, juegos, logro, puntos;
    id = document.getElementById("id").value;
    juegos = document.getElementById("juegos").value;
    logro = document.getElementById("logro").value;
    puntos = document.getElementById("puntos").value;
    if(id==="" || juegos==="" || logro==="" || puntos===""  ){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(id.length>10){
        alert("El id es muy largo");
        return false;
    }
    else if(juegos.length>40){
        alert("El titulo es muy largo");
        return false;
    }
    else if(logro.length>30){
        alert("El logro es muy largo");
        return false;
    }
    else if(puntos.length>6){
        alert("El numero de puntos es muy largo");
        return false;
    }
    else if(isNaN(puntos)){
        alert("los datos que ha ingresado no son número");
        return false;
    }
}

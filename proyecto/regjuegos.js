function validar1(){
    var id, juegos, clasificacion, categoria;
    id = document.getElementById("id").value;
    juegos = document.getElementById("juegos").value;
    clasificacion = document.getElementById("clasificacion").value;
    categoria = document.getElementById("categoria").value;
    if(id==="" || juegos==="" || clasificacion==="" || categoria===""  ){
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
    else if(clasificacion.length>30){
        alert("La clasificación es muy larga");
        return false;
    }
    else if(categoria.length>30){
        alert("La categoria es muy larga");
        return false;
    }
}

var correcto = true;
function validarCampos(id, p){
    var idValue = id.value;
    switch(id.id){
        case "inpRegistro1":
            if(idValue.length==0 || idValue.length>15){
                campoIncorrecto(id, p, "hidden","red","Tamaño incorrecto, no puede estar vacio o ser mayor de 15 caracteres");
                correcto = false;
            }else{
                campoCorrecto(id,p);
            }
        break;
        case "inpRegistro2":
            if(idValue.length==0){
                campoIncorrecto(id, p, "hidden","red","Tamaño incorrecto, no puede estar vacio"); 
                correcto = false;
            }else{
                campoCorrecto(id,p);
            }
        break;
        case "inpRegistro3":
        case "inpRegistro4":
            if(idValue.length==0 || idValue.length>8){
                campoIncorrecto(id, p, "hidden","red","Tamaño incorrecto, no puede estar vacio o ser mayor de 8 caracteres"); 
                correcto = false;
            }else{
               campoCorrecto(id,p); 
            }
        break;
        case "inpLogin1":
        case "inpLogin2":
            if(id.value==0){
                campoIncorrecto(id, p, "hidden","red","El campo no puede estar vacio"); 
                correcto = false;
            }else{
                campoCorrecto(id,p);
            }
        break;
        case "inpMiCuenta1":
            if(idValue.length==0){
                campoIncorrecto(id, p, "hidden","red","Tamaño incorrecto, no puede estar vacio"); 
            }
        break;
    }
    return correcto;
}
function campoIncorrecto(id, p, clase, color, mensajeError){
    id.style.backgroundColor = color;
    p.classList.remove(clase);
    p.style.color = color;
    p.innerHTML = mensajeError;
}
function campoCorrecto(id,p){
    id.style.backgroundColor = "";
    p.style.color = "";
    p.innerHTML = ""; 
}
function buscarDigimon(){
    var id = document.getElementById("idDigimonNombre").value;
    var imagen = document.getElementById("imgDigimon");
    var nombre = document.getElementById("pDigimon1");
    var xhttp = new XMLHttpRequest();
    xhttp.open(`GET`,`https://digimon-api.vercel.app/api/digimon/name/${id}`);
    xhttp.send();
    console.log(xhttp);
    xhttp.onreadystatechange = function(aEvt){
        if(xhttp.readyState==4 && xhttp.status==200){
            imagen.setAttribute("src",`https://digimon.shadowsmith.com/img/${id}.jpg`);
            nombre.textContent = id.replace(id.charAt(0),id.charAt(0).toUpperCase());
        }else{
            imagen.setAttribute("src","");
            nombre.innerHTML = "No se ha encontrado el digimon en la base de datos";
        }
    }
}
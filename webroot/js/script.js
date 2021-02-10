function validarCampos(id, p){
    var idValue = id.value;
    switch(id.id){
        case "inpRegistro1":
            if(idValue.length==0 || idValue.length>15){
                campoIncorrecto(id, p, "hidden","red","Error, tamaño incorrecto, no puede estar vacio o ser mayor de 15 caracteres");
            }else{
                campoCorrecto(id,p);
            }
        break;
        case "inpRegistro2":
            if(idValue.length==0){
                campoIncorrecto(id, p, "hidden","red","Error, tamaño incorrecto, no puede estar vacio"); 
            }else{
                campoCorrecto(id,p);
            }
        break;
        case "inpRegistro3":
        case "inpRegistro4":
            if(idValue.length==0 || idValue.length>8){
                campoIncorrecto(id, p, "hidden","red","Error, tamaño incorrecto, no puede estar vacio o ser mayor de 8 caracteres"); 
            }else{
               campoCorrecto(id,p); 
            }
        break;
        case "inpLogin1":
        case "inpLogin2":
            if(id.value==0){
                campoIncorrecto(id, p, "hidden","red","Error, el campo no puede estar vacio"); 
            }else{
                campoCorrecto(id,p);
            }
        break;
    }
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
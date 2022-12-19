let preguntas = [{
    pregunta: "Cual es el secreto del exito?",
    respuestas: ["Dinero", "MasDinero", "Belleza", "Ser el calvo de Amazon"],
    correcta: "MasDinero",

}, {
    pregunta: "¿Que fenomeno creó el universo?",
    respuestas: ["bigbang", "bigbeng", "Un sueño de Resines", "El nacimiento de Jordi Hurtado"],
    correcta: "bigbang",

}, {
    pregunta: "¿Director de Stalker?",
    respuestas: ["Dennis Villeneuve", "Christopher Nolan", "AndreiTarkovsky", "Michael Bay"],
    correcta: "AndreiTarkovsky",

}, {
    pregunta: "¿Quien creó Metal Gear?",
    respuestas: ["Programator", "Robert Eggers", "Kojima", "Solid Snake"],
    correcta: "Kojima",
}
]
var orden = []
function pregunta0() {
    let correcto = false;
    try {
        if (document.getElementById(preguntas[orden[0]].correcta).checked == true) {
            correcto = true;
        } else {
            correcto = false;
        }
        return correcto;

    }
    catch {
        window.alert(err.message);
    }
}
function pregunta1() {
    let correcto = false;
    try {
        if (document.getElementById(preguntas[orden[1]].correcta).checked == true) {
            correcto = true;
        } else {
            correcto = false;
        }
        return correcto;
    }
    catch (err) {
        window.alert(err.message);
    }
}
function pregunta2() {
    let correcto = false;
    try {
        if (document.getElementById(preguntas[orden[2]].correcta).checked == true) {
            correcto = true;
        } else {
            correcto = false;
        }
        return correcto;
    }
    catch (err) {
        window.alert(err.message);
    }
}
function pregunta3() {
    let correcto = false;
    try {
        if (document.getElementById(preguntas[orden[3]].correcta).checked == true) {
            correcto = true;
        } else {
            correcto = false;
        }
        return correcto;
    }
    catch (err) {
        window.alert(err.message);
    }
}
function correcto() {
    let correctoPregunta0 = pregunta0();
    let correctoPregunta1 = pregunta1();
    let mostrarPregunta3 = document.getElementById('pregunta' + [orden[2]]);
    let mostrarPregunta4 = document.getElementById('pregunta' + [orden[3]]);
    let mostrarComprobar1 = document.getElementById("boton1");
    let mostrarComprobar2 = document.getElementById("boton2");
    let ganar = document.getElementById("ganar")
    try {
        if ((correctoPregunta0 == true) && (correctoPregunta1 == true)) {
            //desactivo las preguntas y muestro el segundo comprobar
            desactivarPregunta1();
            desactivarPregunta2();
            mostrarPregunta3.style.display = "block";
            mostrarPregunta4.style.display = "block";
            mostrarComprobar1.style.display = "none"
            mostrarComprobar2.style.display = "block"
            //Inserto en el html 
            ganar.innerHTML = "Has pasado la primera ronda"
        } else {
            desactivarPregunta1();
            desactivarPregunta2();
            ganar.innerHTML = "Has Perdido"
        }
    } catch (err) {
        console.log(err)
        window.alert(err.message);
    }
}
function correcto2() {
    let correctoPregunta2 = pregunta2();
    let correctoPregunta3 = pregunta3();
    let ganar = document.getElementById("ganar")
    try{
        if ((correctoPregunta2 == true) && (correctoPregunta3 == true)) {
            desactivarPregunta3();
            desactivarPregunta4();
            ganar.innerHTML = "Has Ganado"
        } else {
            desactivarPregunta3();
            desactivarPregunta4();
            ganar.innerHTML = "Has Perdido"
        }
    } catch(err){
        console.log(err)
    }
    


}

function desactivarPregunta1() {
    let desactivarRespuesta1 = document.getElementById(preguntas[orden[0]].respuestas[0].replace(/\s/g, ''));
    let desactivarRespuesta2 = document.getElementById(preguntas[orden[0]].respuestas[1].replace(/\s/g, ''));
    let desactivarRespuesta3 = document.getElementById(preguntas[orden[0]].respuestas[2].replace(/\s/g, ''));
    let desactivarRespuesta4 = document.getElementById(preguntas[orden[0]].respuestas[3].replace(/\s/g, ''));
    try {
        desactivarRespuesta1.disabled = true;
        desactivarRespuesta2.disabled = true;
        desactivarRespuesta3.disabled = true;
        desactivarRespuesta4.disabled = true;
    }
    catch (err) {
        console.log(err)
        window.alert(err.message);
    }
}
function desactivarPregunta2() {
    let desactivarRespuesta1 = document.getElementById(preguntas[orden[1]].respuestas[0].replace(/\s/g, ''));
    let desactivarRespuesta2 = document.getElementById(preguntas[orden[1]].respuestas[1].replace(/\s/g, ''));
    let desactivarRespuesta3 = document.getElementById(preguntas[orden[1]].respuestas[2].replace(/\s/g, ''));
    let desactivarRespuesta4 = document.getElementById(preguntas[orden[1]].respuestas[3].replace(/\s/g, ''));
    try {
        desactivarRespuesta1.disabled = true;
        desactivarRespuesta2.disabled = true;
        desactivarRespuesta3.disabled = true;
        desactivarRespuesta4.disabled = true;
    }
    catch (err) {
        console.log(err)
        window.alert(err.message);
    }
}
function desactivarPregunta3() {
    let desactivarRespuesta1 = document.getElementById(preguntas[orden[2]].respuestas[0].replace(/\s/g, ''));
    let desactivarRespuesta2 = document.getElementById(preguntas[orden[2]].respuestas[1].replace(/\s/g, ''));
    let desactivarRespuesta3 = document.getElementById(preguntas[orden[2]].respuestas[2].replace(/\s/g, ''));
    let desactivarRespuesta4 = document.getElementById(preguntas[orden[2]].respuestas[3].replace(/\s/g, ''));
    try {
        desactivarRespuesta1.disabled = true;
        desactivarRespuesta2.disabled = true;
        desactivarRespuesta3.disabled = true;
        desactivarRespuesta4.disabled = true;
    }
    catch (err) {
        console.log(err)
        window.alert(err.message);
    }
}
function desactivarPregunta4() {
    let desactivarRespuesta1 = document.getElementById(preguntas[orden[3]].respuestas[0].replace(/\s/g, ''));
    let desactivarRespuesta2 = document.getElementById(preguntas[orden[3]].respuestas[1].replace(/\s/g, ''));
    let desactivarRespuesta3 = document.getElementById(preguntas[orden[3]].respuestas[2].replace(/\s/g, ''));
    let desactivarRespuesta4 = document.getElementById(preguntas[orden[3]].respuestas[3].replace(/\s/g, ''));
    try {
        desactivarRespuesta1.disabled = true;
        desactivarRespuesta2.disabled = true;
        desactivarRespuesta3.disabled = true;
        desactivarRespuesta4.disabled = true;
    }
    catch (err) {
        console.log(err)
        window.alert(err.message);
    }
}
function aleatoria() {
    let aleatorio = document.getElementById("preguntas");
    let numeroPreguntas;
    let apoyo = [];
    try{
        for (let i = 0; i < preguntas.length; i++) {
            //El bucle while entra si la pregunta no ha sido copiada al array de apoyo
            let correcto = false
            while (correcto == false) {
                //Genera un numero aleatorio para seleccionar la pregunta del array de objetos
                numeroPreguntas = Math.round(Math.random() * (preguntas.length - 1));
                // console.log(numeroPreguntas)
                if (!apoyo.includes(numeroPreguntas)) {
                    //Coge la pregunta seleccionada y la mete como el orden.
                    aleatorio.innerHTML += '<section id="pregunta' + numeroPreguntas + '"><h1>' + preguntas[numeroPreguntas].pregunta + '</h1><form id ="respuestas' + numeroPreguntas + '" >';
                    let apoyo2 = []
                    for (let j = 0; j < preguntas[numeroPreguntas].respuestas.length; j++) {
                        //Hace lo mismo que el bucle de preguntas pero con respuestas
                        let correctoRespuesta = false
                        while (correctoRespuesta == false) {
                            //Genera un numero aleatorio de respuesta
                            let numeroRespuestas = Math.round(Math.random() * (preguntas[numeroPreguntas].respuestas.length - 1));
                            if (!apoyo2.includes(numeroRespuestas)) {
                                let form = document.getElementById("pregunta" + numeroPreguntas);
                                form.innerHTML += '<input type="radio" id="' + (preguntas[numeroPreguntas].respuestas[numeroRespuestas]).replace(/\s/g, '') + '" name="preg' + numeroPreguntas + '" onclick="pregunta' + numeroPreguntas + '()" value="' + preguntas[numeroPreguntas].respuestas[numeroRespuestas] + '">'
                                form.innerHTML += '<label for="' + (preguntas[numeroPreguntas].respuestas[numeroRespuestas]).replace(/\s/g, '') + '">' + (preguntas[numeroPreguntas].respuestas[numeroRespuestas]) + '</label>';
                                correctoRespuesta = true
                                apoyo2.push(numeroRespuestas)
                            }
                        }
                    }
                    //Se cierra el html de cada pregunta
                    aleatorio.innerHTML += '</form> </section>'
                    //Inserto el numero de preguntas en dos array (uno para el while y el otro para el orden de las preguntas)
                    apoyo.push(numeroPreguntas)
                    orden.push(numeroPreguntas)
                    console.log("Orden")
                    console.log(orden)
                    correcto = true;
                }
            }
    
        }
        //muestro las dos primeras preguntas que se han insertado en el html
        let mostrarPregunta1 = document.getElementById('pregunta' + [orden[0]]);
        let mostrarPregunta2 = document.getElementById('pregunta' + [orden[1]]);
        mostrarPregunta1.style.display = "block";
        mostrarPregunta2.style.display = "block";
    }catch (err) {
        console.log(err)
        window.alert(err.message);
    }
    
}

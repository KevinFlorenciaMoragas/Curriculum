function compararTextos() {
    let texto1 = document.getElementById("IN1").value;
    let texto2 = document.getElementById("IN2").value;

    if (texto1 != texto2) {
        document.getElementById("igual").innerHTML = "!=";
    } else {
        document.getElementById("igual").innerHTML = "==";
    }
}
function contarLetras() {
    let palabra = document.getElementById("contador").value;
    let count = palabra.length;
    if(count <= 30){
     document.getElementById("contadorResultado").value = count;
    }else{
        document.getElementById("contadorResultado").value = "Te has pasado";
    }   
    
}


function square() {
    let number = document.getElementById("inRaizCuadrada").value;
    let result = Math.sqrt(number);
    document.getElementById("resultadoRaiz").value = result;

}
function concatText() {
    let text1 = document.getElementById("concat1").value;
    let text2 = document.getElementById("concat2").value;
    let text3 = text1 + text2;
    document.getElementById("concat3").value = text3;
}
function cambiarColor() {
    let rojo = document.getElementById("rojo").checked;
    let azul = document.getElementById("azul").checked;
    let verde = document.getElementById("verde").checked;
    if (verde == true) {
        document.getElementById("colorTexto").style.color = "green";
    } else if (azul == true) {
        document.getElementById("colorTexto").style.color = "blue";
    } else if (rojo == true) {
        document.getElementById("colorTexto").style.color = "red";
    }
}
function cambiarTamaño(){
    let altura = document.getElementById("altura").value;
    let anchura = document.getElementById("anchura").value;
    document.getElementById("myImage").height = altura;     
    document.getElementById("myImage").width = anchura;   
}
function adivinarLetras(){
    let palabra = document.getElementById("adivinaPalabra").value;

    let palabraVerdadera = "cierto";

    let count = 0;
    let a = palabraVerdadera.split('');
    let b = palabra.split('');
    if(palabra === palabraVerdadera){
        window.alert("El usuario ha acertado");
    }
    for(let i = 0; i<a.length;i++){
        for(let j = 0; j< b.length;j++){
            if(a[i] == b[j]){
                count++;
            }
        }
    }
    document.getElementById("contadorLetras").value = count;
}
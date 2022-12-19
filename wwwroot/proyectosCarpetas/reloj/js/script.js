const nombresMeses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto"
  , "Septiembre", "Octubre", "Noviembre", "Diciembre"]
const nombresMesesSimp = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago"
  , "Sept", "Oct", "Nov", "Dic"]
const nombresDias = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"]
const nombresDiasSimp = ["Dom", "Lun", "Mar", "Mier", "Jue", "Vie", "Sab"]
var españa = document.getElementById("spain").checked
var russia = document.getElementById("russia").checked
var uk = document.getElementById("uk").checked
var err
var canvas = document.getElementById("canvas"),
  context = canvas.getContext("2d"),
  rojo = false,
  radio = 110,
  radioNumeros = radio + 15;
angulo = 0,
  tamanioManecilla = canvas.width / 25,
  tamanioManecillaHora = canvas.width / 10;
var canvasDos = document.getElementById("canvasDos"),
  contextDigital = canvasDos.getContext("2d")
contextDigital.font = '24px "Tahoma"';
var canvasTres = document.getElementById("canvasTres"),
  contextFecha = canvasTres.getContext("2d")
contextFecha.font = '24px "Tahoma"';
function dibujarCirculo() {
  context.beginPath();
  context.lineWidth = 5;
  context.strokeStyle = "#555";
  context.arc(canvas.width / 2, canvas.height / 2, radio, 0, Math.PI * 2);
  context.stroke();
}
function dibujarNumeros() {
  for (var i = 1; i <= 12; i++) {
    angulo = ((i - 3) * 0.1666 * Math.PI);
    context.fillText(i, canvas.width / 2 + Math.cos(angulo) * (radioNumeros) - context.measureText(i).width / 2,
      canvas.height / 2 + Math.sin(angulo) * (radioNumeros) + 5);
  }
}
function dibujarPuntoCentrico() {
  context.beginPath();
  context.fillStyle = "#555";
  context.arc(canvas.width / 2, canvas.height / 2, 5, 0, Math.PI * 2);
  context.fill();
}
function dibujarManecillas(loc, isHour) {
  var angulo = (Math.PI * 2) * (loc / 60) - Math.PI / 2,
    radioManecillas = isHour ? radio - tamanioManecilla - tamanioManecillaHora
      : radio - tamanioManecilla;
  context.moveTo(canvas.width / 2, canvas.height / 2);
  context.lineTo(canvas.width / 2 + Math.cos(angulo) * radioManecillas,
    canvas.height / 2 + Math.sin(angulo) * radioManecillas);
  context.stroke();
}
function actualizarManecillas() {
  var fecha = new Date,
    hora = fecha.getHours();
  hora = hora > 12 ? hora - 12 : hora,
    dibujarManecillas(hora * 5 + (fecha.getMinutes() / 60) * 5, true, 0.5);
  dibujarManecillas(fecha.getMinutes(), false, 0.5);
  dibujarManecillas(fecha.getSeconds(), false, 0.2);
}
function iniciarReloj() {
  context.clearRect(0, 0, canvas.width, canvas.height);
  dibujarCirculo();
  dibujarNumeros();
  dibujarPuntoCentrico();
  actualizarManecillas();
}
function convertTimeZone(date, timeZone) {
  return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-EU", {timeZone: timeZone}));  
  
}
function horaCompleta() {
  try {
    let españa = document.getElementById("spain").checked
    let russia = document.getElementById("russia").checked
    let uk = document.getElementById("uk").checked
    let honolulu= document.getElementById("Honolulu").checked
    contextDigital.clearRect(0, 0, canvasDos.width, canvasDos.height);
    let fechaDos = new Date
    let hora = 0
    let fechaTres
    if (españa == true) {
      fechaTres = convertTimeZone(fechaDos,'Europe/Paris')
      hora = fechaTres.getHours()
    }
    else if (uk == true) {
      fechaTres = convertTimeZone(fechaDos,'Europe/London')
      hora = fechaTres.getHours()
    }
    else if (russia == true) {
      fechaTres = convertTimeZone(fechaDos,'Europe/Moscow')
      hora = fechaTres.getHours()
    }else if (honolulu == true){
      fechaTres = convertTimeZone(fechaDos,'Pacific/Honolulu')
      hora = fechaTres.getHours()
    }
    minutos = fechaDos.getMinutes()
    segundos = fechaDos.getSeconds()
    hora24h = hora + "h " + minutos + "min " + segundos + "s"
    contextDigital.fillText(hora24h, 20, 20)
    return hora24h
  } catch {
    console.log(err)
  }

}
function horaAmpm() {
  try {
    let españa = document.getElementById("spain").checked
    let russia = document.getElementById("russia").checked
    let uk = document.getElementById("uk").checked
    let honolulu= document.getElementById("Honolulu").checked
    contextDigital.clearRect(0, 0, canvasDos.width, canvasDos.height);
    let fechaDos = new Date()
    let hora = 0
    let fechaTres
    if (españa == true) {
      fechaTres = convertTimeZone(fechaDos,'Europe/Paris')
      hora = fechaTres.getHours()
    }
    else if (uk == true) {
      fechaTres = convertTimeZone(fechaDos,'Europe/London')
      hora = fechaTres.getHours()
    }
    else if (russia == true) {
      fechaTres = convertTimeZone(fechaDos,'Europe/Moscow')
      hora = fechaTres.getHours()
    }else if (honolulu == true){
      fechaTres = convertTimeZone(fechaDos,'Pacific/Honolulu')
      hora = fechaTres.getHours()
    }
    if (hora < 12) {
      ampm = "AM"
    }
    else {
      ampm = "PM"
    }
    hora = hora % 12
    console.log(hora)
    let minutos = fechaDos.getMinutes()
    let segundos = fechaDos.getSeconds()
    let hora12h = hora + "h " + minutos + "min " + segundos + "s" + " " + ampm
    contextDigital.fillText(hora12h, 40, 20)
    return hora12h
  } catch {
    console.log(err)
  }

}
function fechaNumeros() {
  try {
    let españa = document.getElementById("spain").checked
    let russia = document.getElementById("russia").checked
    let uk = document.getElementById("uk").checked
    let honolulu= document.getElementById("Honolulu").checked
    let fechaNumerica
    contextFecha.clearRect(0, 0, canvasTres.width, canvasTres.height);
    let fecha = new Date
    let fechaTres
    let dia
    if (españa == true) {
      fechaTres = convertTimeZone(fecha,'Europe/Paris')
      dia = fechaTres.getDate()
      fechaNumerica = fechaTres.toLocaleDateString()
    }
    else if (uk == true) {
      fechaTres = convertTimeZone(fecha,'Europe/London')
      dia = fechaTres.getDate()
      fechaNumerica = fechaTres.toLocaleDateString()
    }
    else if (russia == true) {
      fechaTres = convertTimeZone(fecha,'Europe/Moscow')
      dia = fechaTres.getDate()
      fechaNumerica = fechaTres.toLocaleDateString()
    }else if (honolulu == true) {
      fechaTres = convertTimeZone(fecha,'Pacific/Honolulu')
      dia = fechaTres.getDate()
      fechaNumerica = fechaTres.toLocaleDateString()
    }
    //let dia = fecha.getDate()
    console.log(dia)
    let cero=""
    if (dia < 10) {
      cero = "0"
    }
   // let fechaNumerica = cero + fecha.toLocaleDateString()
    contextFecha.fillText(fechaNumerica, 40, 20)
    return fechaNumerica
  } catch {
    console.log(err)
  }
}
function fechaCompleta() {
  try {
    let españa = document.getElementById("spain").checked
    let russia = document.getElementById("russia").checked
    let uk = document.getElementById("uk").checked
    let honolulu= document.getElementById("Honolulu").checked
    contextFecha.clearRect(0, 0, canvasTres.width, canvasTres.height);
    let fecha = new Date
    let dia = fecha.getDate()
    let fechaTres
    let diaNombre
    if (españa == true) {
      fechaTres = convertTimeZone(fecha,'Europe/Paris')
      diaNombre =  nombresDias[fechaTres.getDay()]
    }
    else if (uk == true) {
      fechaTres = convertTimeZone(fecha,'Europe/London')
      diaNombre =  nombresDias[fechaTres.getDay()]
    }
    else if (russia == true) {
      fechaTres = convertTimeZone(fecha,'Europe/Moscow')
      diaNombre =   nombresDias[fechaTres.getDay()]
    }else if (honolulu == true) {
      fechaTres = convertTimeZone(fecha,'Pacific/Honolulu')
      diaNombre =   nombresDias[fechaTres.getDay()]
    }
    
    //let diaNombre = nombresDias[fecha.getDay()]
    let mes = nombresMeses[fecha.getMonth()]
    let ano = fecha.getFullYear()
    let fechaCompleta = diaNombre + " " + dia + " de " + mes + " de " + ano
    contextFecha.fillText(fechaCompleta, 40, 20)
    return fechaCompleta
  } catch {
    console.log(err)
  }

}
function fechaSimplificada() {
  try {
    let españa = document.getElementById("spain").checked
    let russia = document.getElementById("russia").checked
    let uk = document.getElementById("uk").checked
    let honolulu= document.getElementById("Honolulu").checked
    contextFecha.clearRect(0, 0, canvasTres.width, canvasTres.height);
    let fecha = new Date
   // let dia = fecha.getDate()
   let dia 
   let fechaTres
    let diaNombre
    if (españa == true) {
      fechaTres = convertTimeZone(fecha,'Europe/Paris')
      dia = fechaTres.getDate()
      diaNombre =   nombresDiasSimp[fecha.getDay()]
    }
    else if (uk == true) {
      fechaTres = convertTimeZone(fecha,'Europe/London')
      dia = fechaTres.getDate()
      diaNombre =   nombresDiasSimp[fecha.getDay()]
    }
    else if (russia == true) {
      fechaTres = convertTimeZone(fecha,'Europe/Moscow')
      dia = fechaTres.getDate()
      diaNombre =    nombresDiasSimp[fecha.getDay()]
    }else if (honolulu == true) {
      fechaTres = convertTimeZone(fecha,'Pacific/Honolulu')
      dia = fechaTres.getDate()
      diaNombre =    nombresDiasSimp[fecha.getDay()]
    }
    
    //let diaNombre = nombresDiasSimp[fecha.getDay()]
    let mes = nombresMesesSimp[fecha.getMonth()]
    let ano = fecha.getYear() - 100
    let fechaNumerica = diaNombre + " " + dia + " de " + mes + " de " + ano
    contextFecha.fillText(fechaNumerica, 40, 20)
    return fechaNumerica
  } catch {
    console.log(err)
  }

}
function seleccionarHora() {
  contextDigital.clearRect(0, 0, canvasDos.width, canvasDos.height);
  let horaAM = document.getElementById("12h").checked
  let hora24h = document.getElementById("24h").checked
  try {
    if (horaAM == true) {
      horaAmpm()
    }
    if (hora24h == true) {
      horaCompleta()
    }
  } catch {
    console.log(err)
  }


}
function seleccionarFecha() {
  contextFecha.clearRect(0, 0, canvasTres.width, canvasTres.height);
  let fechaNumerica = document.getElementById("numeros").checked
  let fechaEntera = document.getElementById("completo").checked
  let fechaSimplificad = document.getElementById("simplificado").checked
  try {
    if (fechaNumerica == true) {
      fechaNumeros()

    }
    if (fechaEntera == true) {
      fechaCompleta()
    }
    if (fechaSimplificad == true) {
      fechaSimplificada()
    }
  } catch {
    console.log(err)
  }


}


//https://stackoverflow.com/questions/8207655/get-time-of-specific-timezone?noredirect=1&lq=1
loop = setInterval(iniciarReloj, 1000);
loop = setInterval(seleccionarHora, 1000)
loop = setInterval(seleccionarFecha, 1000)

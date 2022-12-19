function ValidateEmail() {
    let email = document.getElementById("Email").value
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email.match(mailformat)) {
      button.disabled = false
        return true;
    }
    else {
        window.alert("Debe tener @ para ser valido")
        button.disabled = true
        return false;
    }
}
function ValidatePassword() {
    let contraseña = document.getElementById("Contraseña").value
    let decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,40}$/
    if (contraseña.match(decimal)) {
       button.disabled = false
        return true
    }
    else {
        window.alert("La contraseña debe tener entre 8-40 caracteres minimo 1:Letra Mayuscula y un caracter especial")
        button.disabled = true
        return false
    }
}
document.getElementById("from_log").addEventListener("submit", function(event) {
    var password = document.getElementById("contra").value;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+}{"':;?/>.<,])(?=.*[^\da-zA-Z]).{8,}$/;

    if (!passwordRegex.test(password)) {
        event.preventDefault(); // Evita que se envíe el formulario
        alert("La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.");
    }
    //holaaas
    
});




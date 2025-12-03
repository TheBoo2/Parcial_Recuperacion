function enviarDatosEmpleado() {
    const divResultado = document.getElementById('resultado');
    const form = document.nuevo_empleado;

    const nom  = form.nombres.value.trim();
    const dep  = form.departamento.value.trim();
    const suel = form.sueldo.value.trim();

    // Validaciones en cliente
    let errores = [];
    if (nom === "") errores.push("El nombre es obligatorio.");
    if (dep === "") errores.push("El departamento es obligatorio.");
    if (suel === "" || isNaN(suel) || Number(suel) <= 0) {
        errores.push("El sueldo debe ser numérico y mayor que cero.");
    }

    if (errores.length > 0) {
        divResultado.innerHTML = "<ul><li>" + errores.join("</li><li>") + "</li></ul>";
        return false;
    }

    divResultado.innerHTML = '<img src="anim.gif" alt="Cargando...">';

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "registro.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            divResultado.innerHTML = xhr.responseText;
            form.reset();
            form.nombres.focus();
        }
    };

    const params =
        "nombres="       + encodeURIComponent(nom) +
        "&departamento=" + encodeURIComponent(dep) +
        "&sueldo="       + encodeURIComponent(suel);

    xhr.send(params);
    return false;
}

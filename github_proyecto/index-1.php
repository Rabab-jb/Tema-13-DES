<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <script>
        function mostrarURL() {
            const urlActual = window.location.href;
            document.getElementById('urlActual').innerHTML = La URL actual es: ${urlActual};
        }

        function validarEdad() {
            const fechaNacimiento = document.getElementById('fechaNacimiento').value;
            const fechaActual = new Date();
            const fechaNac = new Date(fechaNacimiento);
            let edad = fechaActual.getFullYear() - fechaNac.getFullYear();
            const mes = fechaActual.getMonth() - fechaNac.getMonth();

            if (mes < 0 || (mes === 0 && fechaActual.getDate() < fechaNac.getDate())) {
                edad--;
            }

            if (edad < 18) {
                alert("Debes ser mayor de 18 años para enviar el formulario.");
                return false;
            }
            return true;
        }

        function validarDNI() {
            const dni = document.getElementById('dni').value;
            if (dni.length !== 9) {
                alert("El DNI debe tener 8 números seguidos de una letra.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body onload="mostrarURL()">

    <h2>Formulario de Registro</h2>
    
    <div id="urlActual"></div><br>

    <form action="destino.php" method="GET" onsubmit="return validarEdad() && validarDNI()">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required><br><br>

        <label for="dni">DNI:</label><br>
        <input type="text" id="dni" name="dni" required><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="tel" id="telefono" name="telefono" required><br><br>

        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="puesto">Puesto de Trabajo:</label><br>
        <input type="text" id="puesto" name="puesto" required><br><br>

        <label for="salario">Salario:</label><br>
        <input type="number" id="salario" name="salario" step="0.01" required><br><br>

        <label for="codigoPostal">Código Postal:</label><br>
        <input type="text" id="codigoPostal" name="codigoPostal" required><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
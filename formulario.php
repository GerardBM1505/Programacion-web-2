<h2>Formulario:</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Nombre:
    <input type="text" name="nombre" maxlength="50"><br>
    Contraseña:
    <input type="password" name="password"><br>
    Edad:
    <input type="text" name="edad"><br>
    Correo:
    <input type="text" name="correo"><br>
    <input type="submit" name="submit" value="Enviar"><br>
</form>
</body>
</html>
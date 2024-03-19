<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <!-- method="POST" enctype="multipart/form-data" para habiliatar el envio de archivos -->
    <form action="procesar.php" method="POST" enctype="multipart/form-data"> 

        <label>
            Nombre : 
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Edad : 
            <input type="number" name="edad">
        </label>

        <p>Sexo:</p>

        <label>
            Masculino : 
            <input type="radio" name="sexo" value="Masculino">
        </label>

        <label>
            Femenino : 
            <input type="radio" name="sexo" value="Femenino">
        </label>
        <br>
    
        <p>Roles :</p> 

        <!-- Al "name" le asignamos "[]" para indicar que vamos a almacenar mas de una respuesta en ese input -->
        <label>
            Administrador : 
            <input type="checkbox" name="roles[]" value="Administrador">
        </label>
        
        <label>
            Editor : 
            <input type="checkbox" name="roles[]" value="Editor">
        </label>
        
        <label>
            Lector : 
            <input type="checkbox" name="roles[]" value="Lector">
        </label>
        <br>
        <br>

        <label>
            Imagen : 
            <br>
            <input type="file" name="imag">
        </label>
        <br><br>

        <label>

            Mensaje:
            <br>
            <textarea name="mensaje" id="" cols="30" rows="5"></textarea>

        </label>
        <br>

        <button type="submit">Enviar</button>
        

    </form>

</body>
</html>
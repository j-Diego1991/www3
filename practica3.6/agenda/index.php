<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/bootstrap.min.css" >
<title>Agenda</title>
</head>
<body>
    <div class="container">
        <form action="wagenda.php" method="POST">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" placeholder="Escribe tu nombre:" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" placeholder="Escribe tus apellidos:" id="apellidos" name="apellidos" required>
            </div>

            <div class="form-group">
                <label for="fnacimiento">Fecha de nacimiento</label>
                <input type="date" class="form-control"  id="fnacimiento" name="fnacimiento" required>
            </div>

            <div class="form-group">
                <label for="estadocivil">Estado Civil</label>
                <select class="form-control" id="estadocivil" name="estadocivil" required>
                    <option>Soltero(a)</option>
                    <option>Casado(a)</option>
                    <option>Divorciado(a)</option>
                    <option>Viudo(a)</option>
                    <option>Unión Libre</option>
                </select>
            </div>

            <div class="form-group">
                <label for="origen">Origen</label>
                <input list="origenes" id="origen" name="origen" class="form-control" placeholder="Escribe el municipio de origen" required>
                <datalist id="origenes">
                    <option value="Gómez Palacio"></option>
                    <option value="Lerdo"></option>
                    <option value="Torreón"></option>
                    <option value="Matamoros"></option>
                    <option value="Tlahualilo"></option>
                    <option value="Santa Clara"></option>  
                </datalist>
            </div>

            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="you@example.com" required>
            </div>

            <div class="form-group">
                <label for="redes">Redes Sociales</label>
                <input typr="text" id="redes" name="redes" class="form-control" placeholder="Escribe tus redes sociales separados por comas">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>          
    </div>
</body>
</html>
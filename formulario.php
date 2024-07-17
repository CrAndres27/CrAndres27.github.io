<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Registro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 700px;
        }
        h1 {
            text-align: center;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        label {
            flex: 1;
            margin-right: 10px;
        }
        input[type="text"],
        input[type="email"],
        select {
            flex: 2;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .radio-group, .checkbox-container {
            flex: 2;
            display: flex;
            align-items: center;
        }
        .radio-group input,
        .checkbox-item input {
            margin-right: 5px;
        }
        .checkbox-container {
            flex-wrap: wrap;
        }
        .checkbox-item {
            display: flex;
            align-items: center;
            margin-right: 10px;
            font-size: 0.9em;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }
        input[type="button"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #e0e0e0;
            color: black;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        input[type="button"]:hover {
            background-color: #bdbdbd;
        }
    </style>
</head>
<body>
<form action="procesar.php" method="post">
<div class="form-container">
    <h1>Nuevo Registro</h1>
    <form>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado Civil:</label>
            <select id="estado" name="estado" required>
                <option value="">Seleccione...</option>
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
                <option value="divorciado">Divorciado</option>
                <option value="viudo">Viudo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="hijos">¿Tiene hijos?</label>
            <div class="radio-group">
                <input type="radio" id="hijos_si" name="hijos" value="si" required>
                <label for="hijos_si">Sí</label>
                <input type="radio" id="hijos_no" name="hijos" value="no" required>
                <label for="hijos_no">No</label>
            </div>
        </div>

        <div class="form-group">
            <label for="intereses">Intereses:</label>
            <div class="checkbox-container">
                <div class="checkbox-item">
                    <input type="checkbox" id="libros" name="intereses[]" value="libros">
                    <label for="libros">Libros</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="musica" name="intereses[]" value="musica">
                    <label for="musica">Música</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="deportes" name="intereses[]" value="deportes">
                    <label for="deportes">Deportes</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="otros" name="intereses[]" value="otros">
                    <label for="otros">Otros</label>
                </div>
            </div>
        </div>
        
        <div class="buttons">
            <input type="submit" value="Guardar">
            <input type="button" value="Regresar" onclick="window.history.back();">
        </div>
    </form>
</div>

</body>
</html>
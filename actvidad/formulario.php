<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ESTE ES UNA PAGINA PARA SUMAR, RESTAR, MULTIPLICAR Y DIVIDIR!!</h1>

    <form action="resultado.php" method = 'POST'>
        <label for="">Numero 1</label>
        <input type="number" name="num1"><br>

        <label for="">Numero 2</label>
        <input type="number" name="num2"><br>

        <label for="ope">Escoja la operacion</label>
        
        <select name="operaciones" id="ope">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
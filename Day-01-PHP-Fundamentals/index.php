 <!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>

    <h2>Simple Calculator</h2>

    <form method="post" action="simple_calculater.php">
        Number 1:
        <input type="number" name="num1" step="any" required><br><br>

        Number 2:
        <input type="number" name="num2" step="any" required><br><br>

        Operation:
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>
</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
    <title>Veprime Matematikore</title>
</head>
<body>
    <h2>Veprime Matematikore</h2>
    <form method="post" action="">
        <label for="num1">Numri 1:</label>
        <input type="text" id="num1" name="num1" required><br><br>
        <label for="num2">Numri 2:</label>
        <input type="text" id="num2" name="num2" required><br><br>
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="*">
        <input type="submit" name="operation" value="/">
    </form>

    <?php
    if (isset($_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operation) {
                case '+':
                    $Rezultati = $num1 + $num2;
                    echo "<h3>Rezultati: $num1 + $num2 = $Rezultati</h3>";
                    break;
                case '-':
                    $Rezultati = $num1 - $num2;
                    echo "<h3>Rezultati: $num1 - $num2 = $Rezultati</h3>";
                    break;
                case '*':
                    $Rezultati = $num1 * $num2;
                    echo "<h3>Rezultati: $num1 * $num2 = $Rezultati</h3>";
                    break;
                case '/':
                    if ($num2 != 0) {
                        $Rezultati = $num1 / $num2;
                        echo "<h3>Rezultati: $num1 / $num2 = $Rezultati</h3>";
                    } else {
                        echo "<h3>Nuk lejohet pjestimi me 0.</h3>";
                    }
                    break;
                default:
                    echo "<h3>Operator i gabuar.</h3>";
                    break;
            }
        } else {
            echo "<p>Ju lutem vendosni vlera numerike.</p>";
        }
    }
    ?>
</body>
</html>

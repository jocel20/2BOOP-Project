<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<h2 class="text-center">Jocel's Calculator</h2>
<form method="post" class="mt-4">
        <div class="mb-3">
    <label for="num1">Enter First Number:</label>
    <br>
    <input type="number" id="num1" name="num1" required>
    <br>
    </br>
    </div>
    <div class="mb-3">
    <label for="num2">Enter Second Number:</label>
    <br>
    <input type="number" id="num2" name="num2" required>
    <br>
    </div>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    //Calculating the numbers
    $sum = $num1 + $num2;
    $diff = $num1 - $num2;
    $product = $num1 * $num2;
    $quotient = $num1 / $num2; 
    $modulo = $num1 % $num2;

    //Results will display
    echo "<br><h3>Answers:</br></h3>";
    echo "<p><strong>Sum:</strong> $sum</p>";
    echo "<p><strong>Difference:</strong> $diff</p>";
    echo "<p><strong>Product:</strong> $product</p>";
    echo "<p><strong>Quotient:</strong> $quotient</p>";
    echo "<p><strong>Modulo:</strong> $modulo</p>";

}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

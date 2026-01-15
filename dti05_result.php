<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division Result</title>
</head>
<body>
    <h1>Result</h1>
    <hr>
    <?php
    
    if (empty($_GET['num1']) || empty($_GET['num2'])) {
        echo "Please enter the numbers in the form.";
        echo '<meta http-equiv="refresh" content="2;url=dti05.php">';
    } 
    else if (floatval($_GET['num2']) == 0) {
        echo "ห้ามหารด้วย 0 ครับ (Cannot divide by zero)";
        echo '<meta http-equiv="refresh" content="2;url=dti05.php">';
    } else {
        $num1 = floatval($_GET['num1']);
        $num2 = floatval($_GET['num2']);
        $result = $num1 / $num2;

        echo 'เงิน: ' . $num1 . ' บาท <br>';
        echo 'คน: ' . $num2 . ' คน <br>';
        // Using number_format to make the result look cleaner (2 decimal places)
        echo "<strong>Total: " . number_format($result, 2) . " บาท/คน</strong>";
    }
    ?>
</body>
</html>
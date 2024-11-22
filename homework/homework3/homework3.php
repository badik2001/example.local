<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework3</title>
    <link rel="stylesheet" href="../../styles/styles.css">
</head>
<body>
<form action="form.php" method="get">
    <div class="calculator">
      <div>
        <input name="first_number" type="text" required placeholder="Число">
    </div>
    <div>
        <div>
            <input name="plus" type="radio">+
        </div>
        <div>
            <input name="minus" type="radio">-
        </div>
        <div>
            <input name="multiplication" type="radio">/
        </div>
        <div>
            <input name="division" type="radio">*
        </div>
    </div>
    <div>
        <input name="second_number" type="text" required placeholder="Число">
    </div>
        <input type="submit" value="Посчитать">  
    </div>
    
</form>
</body> 
</html>
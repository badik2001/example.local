<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework2</title>
</head>
<body>
    <h1>Hello everyone!!! I'm glad to see you on my pet project!!!</h1>
    <h2>Exersice 1</h2>
    <div>
        <div>            
            <p><?php
                echo '0 && 0 ';
                var_dump(0 && 0); 
            ?></p>

            <p><?php
                echo '0 && 1 ';
                var_dump(0 && 1);
            ?></p>

            <p><?php
                echo '1 && 0 ';
                var_dump(1 && 0);
            ?></p>

            <p><?php
                echo '1 && 1 ';
                var_dump(1 && 1);
            ?></p>
        </div>
        <p>
            ______________________
        </p>
        <div>    
            <p><?php
                echo '0 || 0 ';
                var_dump(0 || 0);
            ?></p>

            <p><?php
                echo '0 || 1 ';
                var_dump(0 || 1);
            ?></p>

            <p><?php
                echo '1 || 0 ';
                var_dump(1 || 0);
            ?></p>

            <p><?php
                echo '1 || 1 ';
                var_dump(1 || 1);
            ?></p>
        </div>
        <p>
            ______________________
        </p>
        <div>    
            <p><?php
                echo '0 XOR 0 ';
                var_dump(0 XOR  0);
            ?></p>

            <p><?php
                echo '0 XOR 1 ';
                var_dump(0 XOR  1);
            ?></p>

            <p><?php
                echo '1 XOR 0 ';
                var_dump(1 XOR  0);
            ?></p>

            <p><?php
                echo '1 XOR 1 ';
                var_dump(1 XOR 1);
            ?></p>
        </div>
    </div>


</body>
</html>
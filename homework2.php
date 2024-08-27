<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 2</title>
</head>
<body>

    <h2>Exersice 1</h2>

    <div>
        <table> 
            <thead>
                <tr>
                    <th>x</th>
                    <th>y</th>
                    <th>x & y</th>
                </tr>
            </thead>  
            <tbody>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><p><?php        
                    var_dump(0 && 0); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><p><?php        
                    var_dump(0 && 1); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><p><?php        
                    var_dump(1 && 0); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><p><?php        
                    var_dump(1 && 1); 
                    ?></p></td>
                </tr>
            </tbody>         
        </table>
        <hr>
        <table> 
            <thead>
                <tr>
                    <th>x</th>
                    <th>y</th>
                    <th>x | y</th>
                </tr>
            </thead>  
            <tbody>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><p><?php        
                    var_dump(0 || 0); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><p><?php        
                    var_dump(0 || 1); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><p><?php        
                    var_dump(1 || 0); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><p><?php        
                    var_dump(1 || 1); 
                    ?></p></td>
                </tr>
            </tbody>         
        </table>
        <hr>
        <table> 
            <thead>
                <tr>
                    <th>x</th>
                    <th>y</th>
                    <th>x XOR y</th>
                </tr>
            </thead>  
            <tbody>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><p><?php        
                    var_dump(0 XOR 0); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><p><?php        
                    var_dump(0 XOR 1); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><p><?php        
                    var_dump(1 XOR 0); 
                    ?></p></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><p><?php        
                    var_dump(1 XOR 1); 
                    ?></p></td>
                </tr>
            </tbody>         
        </table>
    </div>
    <h2>Exersice 2</h2>
    <form method="POST">
        Equation to solve: <input name=a value=>&middot;x<sup>2</sup> + 
            <input name=b value=>&middot;x + 
            <input name=c value=>&middot; =0 <br>
        <input type=submit value='Solve it'>  
    </form>
    <?php

        if (isset($_POST['a'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            include __DIR__ . '/functions.php';
            $D = discriminant($a, $b, $c);
            echo 'D=' . $D . '<br>';
            if ($D < 0) {
                echo 'Sorry, no roots ... <br>';
            } else {
                echo root1($a, $b, $c).'<br>';
                echo root2($a, $b, $c);
            }
        }
    ?>

</body>
</html>
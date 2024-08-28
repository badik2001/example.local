<?php
header('Set-Cookie: foo=42');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documf</title>
</head>
<body>
    
    <h1>"hello"</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <input type='file' name="picture">
        <button type="submit">Отправить</button>

    </form>

</body>
</html>
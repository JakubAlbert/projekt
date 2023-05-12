<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin rozhranie</h1>
    <form action="inc/portfolio/insert.php" method="post">
        <input type="text" name="name" id="name" placeholder="Názov portfolia">
        <input type="text" name="image" id="image" placeholder="Cesta k obrazku">
        <input type="submit" value="Pridať portfolio", name="insert_portfolio">
    </form>
    <br><br>
    <form action="inc/qna/insert.php" method="post">
        <input type="text" name="otazka" id="otazka" placeholder="Otázka">
        <input type="text" name="odpoved" id="odpoved" placeholder="Odpoveď">
        <input type="submit" value="Pridať otázku", name="insert_qna">
    </form>
</body>
</html>
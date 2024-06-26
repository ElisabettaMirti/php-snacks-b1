Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name 
sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare "", altrimenti "Accesso negato"

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <main>
        <form action="./snack2.php" method="GET">
            <div class="name">
                <label for="name">Insert your name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="mail">
                <label for="mail">Insert your mail: </label>
                <input type="mail" name="mail" id="mail">
            </div>
            <div class="age">
                <label for="age">Insert your age: </label>
                <input type="text" name="age" id="age">
            </div>
            <button type="submit">Submit</button>
        </form>

        <?php 
        if (strlen($GET[name]) <= 3 || !str_contains($GET[mail], '@') || !str_contains($GET[mail], '.') || is_numeric($GET[age]) == false){ ?>
            <h1>Accesso negato</h1>
        <?php } else ?>
            <h1>Accesso riuscito</h1>
    </main>
</body>
</html>
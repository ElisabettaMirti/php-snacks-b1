<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack6</title>
</head>
<body>
    <main>
            <div class="gray">
                <h3>Teachers</h3>
                <?php foreach ($db['teachers'] as $teacher){ ?>
                <p> <?php echo $teacher['name'] ?></p>
                <p> <?php echo $teacher['lastname'] ?></p>
                <br>
                <?php } ?>
            </div>
            <div class="green">
                <h3>PM</h3>
                <?php foreach ($db['pm'] as $pm){ ?>
                <p> <?php echo $pm['name'] ?></p>
                <p> <?php echo $pm['lastname'] ?></p>
                <br>
                <?php } ?>
            </div>
    </main>
</body>
</html>
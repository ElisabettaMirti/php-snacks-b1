<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Giorgio Vanni',
            'text' => 'Chi sei
                        Goku non lo sai
                        Però
                        Presto lo scorpirai
                        E poi
                        Tu scomparirai'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Giorgia Vanne',
            'text' => 'Una nuova realtà
                        Con le sue verità
                        Scaverà nel tuo passato
                        E guardando più in là
                        Il tuo cuore saprà
                        Ritrovare Dragon Ball'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Gigi Vinni',
            'text' => 'WHAT’S MY DESTINY
                        DRAGON BALL
                        IO SO CHE TU LO SAI
                        DRAGON BALL
                        PERCHE’ NON C’E’
                        UN DRAGO CHE
                        SIA GRANDE COME TE!
                        DRAGON BALL'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Gianni Melis',
            'text' => 'Dragon
                        Dragon
                        Dragon
                        Dragon Ball
                        Dragon
                        Dragon
                        Dragon
                        Dragon Ball'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Giorgio Gaber',
            'text' => '’oscurità splendente diverrà con te
                        Perché
                        La tua fiamma oramai è più ardente che mai'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Gabrizio De Andrè',
            'text' => 'WHAT’S MY DESTINY
                        DRAGON BALL
                        IO SO CHE TU LO SAI
                        DRAGON BALL
                        PERCHE’ NON C’E’
                        UN DRAGO CHE
                        SIA GRANDE COME TE!'
        ]
    ],
];

var_dump($posts);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach ($posts as $key => $date) { ?>
            <li>
                Data: <?php echo $key ?>
                <?php foreach ($date as $post) { ?>
                <p><?php echo $post["title"] ?></p>
                <p><?php echo $post["author"] ?></p>
                <p><?php echo $post["text"] ?></p>
                <?php } ?>
            </li>
            <?php } ?>
        </ul>
    </main>
</body>
</html>


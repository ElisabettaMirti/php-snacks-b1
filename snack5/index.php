<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$paragraph = "Il mio primo consolato fu anch'esso un anno di guerra, una lotta segreta, ma continua, in favore della pace. Ma non la combattevo da solo. Prima del mio ritorno, s'era verificato nell'atteggiamento di Licinio Sura, di Attiano, di Turbo, un cambiamento analogo a quello che si era prodotto in me, come se, a onta della severa censura che praticavo sulle mie lettere, i miei amici mi avessero già compreso, preceduto, o seguito. In altri tempi, gli alti e bassi della mia sorte mi impacciavano soprattutto riguardo a essi; paure, impazienze che da solo avrei sopportato a cuor leggero, si facevano opprimenti se mi vedevo costretto a celarle alla loro sollecitudine o a infliggerne loro la confidenza; mi risentivo di quell'affetto che li angustiava per me più di me stesso, e che mai li portava a scoprire, sotto le agitazioni esteriori, l'essere tranquillo, al quale nulla importa davvero, e che per conseguenza può sopravvivere a tutto. Ma, ormai, mi mancava il tempo per interessarmi a me stesso, come del resto per disinteressarmene. Calava nell'ombra la mia persona, proprio perché, il mio punto di vista cominciava a contare. Ciò che importava, era che qualcuno si opponesse alla politica di conquiste, ne valutasse le conseguenze e la fine, e si preparasse, se possibile, a ripararne gli errori.";

$editedPar = str_replace(".", ".</p><p>", $paragraph);


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
</head>
<body>
    <main>
        <h3>Originale:</h3>
        <p> <?php echo $paragraph ?> </p>

        <h3>Editato</h3>
        <p> <?php echo $editedPar ?> </p>
    </main>
</body>
</html>
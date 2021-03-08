<?php
//Carico le dipendenze
require "./lib/JSONReader.php";
//Model(la parte che gestisce i dati dell'applicazione)
$tasklist=JSONReader('./dataset/Tasklist.json');
//Controller(colui che gestisce il tutto)

?>

<!-- view /intercetta azioni dell'utente -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style.css">
    <title>Document</title>
</head>
<body>
    <form action="">
    <input type="text" name="searchText">
    <button type="submit">Cerca</button>
    </form>
    <ul>
    <?php
    foreach ($tasklist as $key => $task) {
            $status=$task['status'];
            $taskName=$task['taskName'];

        ?>
        <li class="tasklist-item tasklist-item-<?=$status?>">
        <?= $taskName ?> <b> <?= $status ?></b> </li>
    <?php } ?>
    
    
   <!-- <li class="tasklist-item tasklist-item-done">Uova - <b>done</b> </li>
    <li class="tasklist-item tasklist-item-todo">Farina - <b>todo</b></li>-->
    </ul>
</body>
</html>

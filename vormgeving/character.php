<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include_once 'resources/includes/dbh.inc.php' ?>
    <?php include_once 'resources/models/CharacterModel.php';
    $id = $_REQUEST['id']; 

        $data = getCharacterById($id);
        $character = $data[0];
    ?>
    <title>Character - <?php print($character['name']); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php print($character['name']); ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            
            <img class="avatar" src="resources/images/<?php  print($character['avatar']); ?>">
            <div class="stats" style="background-color: <?php print($character['color']); ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php print($character['health']); ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php print($character['attack']); ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php print($character['defense']); ?></li>
                </ul>
                <ul class="gear">
                    <?php if($character['weapon']!= null){ ?><li><b>Weapon</b>: <?php print($character['weapon']); ?></li> <?php } ?>
                    <?php if($character['armor']!= null){ ?><li><b>Armor</b>: <?php print($character['armor']); ?></li> <?php } ?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php $bio = explode("\n", $character['bio']);
                    foreach($bio as $string){
                        print($string.'<br>');
                    }
                ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Guylano 2022</footer>
</body>
</html>
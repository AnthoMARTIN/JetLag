<?php
include_once __DIR__ .'/utils/connectionbdd.php';
include_once __DIR__ . '/utils/navbar.php';
include_once __DIR__ . '/utils/footer.php';
include_once __DIR__ . '/template/home.php';
include_once __DIR__ . '/template/detailvoyage.php';
include_once __DIR__ . '/template/affichageRecherche.php';

    $bdd=pdo();
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JetLag</title>
    <link rel="stylesheet" href="JetLag.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <header>
       <!-- NAVBAR -->
        <?php
        navbar();
        ?>
       <!-- NAVBAR -->
      <?php
      if(!empty($_GET)){
        if(isset($_GET["profilId"])){

            $stm= $bdd->prepare("select * from voyages where id=?");
            $stm->bindValue(1,htmlspecialchars($_GET["profilId"]));
            $stm->execute();
            $voyage=$stm->fetchAll(PDO::FETCH_ASSOC);
            
            detailvoyage($voyage);
        }elseif(isset($_GET["action"]) && !empty($_GET["action"]) && isset($_POST["recherche"])){
           
            
            $stm=$bdd->prepare("select * from themes where themes=?");
            $stm->bindValue(1,htmlspecialchars($_POST["recherche"]));
            $stm->execute();
            $themes=$stm->fetchAll(PDO::FETCH_ASSOC);
            $id=$themes[0]['id'];
            $stm=$bdd->query("select * from voyages where id_themes='.$id.'");
            $stm->execute();
            $voyages=$stm->fetchAll(PDO::FETCH_ASSOC);
            affichageRecherche($voyages);
            
        }

         
      }else{
        $stm= $bdd->prepare("select * from voyages");
        $stm->execute();
        $voyagesarray=$stm->fetchAll(PDO::FETCH_ASSOC);
        $voyagesrandom=array_rand($voyagesarray,6);
          home($voyagesarray, $voyagesrandom);
      }















      ?> 
    <!-- footer -->
        <?php
        footer();
        ?>
    <!-- footer -->
</body>
</html>
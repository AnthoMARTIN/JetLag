<?php

function affichageRecherche($arrayVoyages){
    ?>
         <section  id="prestation">

<?php
    foreach($arrayVoyages as $key => $voyage){
        
        ?>
        <div class="imageprestation">
    <h4><?php echo $arrayVoyages[$key]["titre"] ?></h4>
    <a href="<?php echo "http://localhost/JetLag/index.php?profilId=".$arrayVoyages[$key]["id"] ?>"><img src="<?php echo "source/". $arrayVoyages[$key]["uri_image"] ?>" alt=cullera width=400px height=300px></a>
</div>
        
        <?php

        
    }

?>
</section>
    <?php
}





?>
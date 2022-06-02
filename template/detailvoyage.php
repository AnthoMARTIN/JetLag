<?php 

function detailvoyage($voyage){
    ?>
    <section>
        <h1>
            <?php
                
                echo $voyage[0]["titre"];
            ?>
        </h1>
        <img src="<?php echo "source/".$voyage[0]["uri_image"]; ?>" alt="" width="40%">
        <h4>
            Description:
        </h4>
        <p>
            <?php
                echo $voyage[0]["contenu_text"];
            ?>
        </p>
    </section>
    <?php
}


?>
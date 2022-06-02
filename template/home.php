<?php

function home($arrayVoyages,$indexArray){
    ?>
     <div id="imgprinc">
            <h1>JetLag</h1>
            <div id="premiertrait"></div>
            <h3>Choisissez la destination qui vous convient avec JetLag</h3>

            <!-- FORMULAIRE RECHERCHE -->

            
            <div>
            
           
        </div>



        </div>
        
    </header>
    <section id="presentation">
        <div id="textintro">
            <h2>Savoir où voyager dans le monde</h2>
        </div>
        <div id="prestation">
            <div class=""imageprestation>
                <h4>Barcelona, Espagne</h4>
                <a href="#"><img src="source/cullera.jpg" alt=cullera width=400px height=300px></a>
            </div>
            <div class=""imageprestation>
                <h4>Londres, Angleterre</h4>
                <a href="#"><img src="source/londres.jpg" alt=londres width=400px height=300px></a>
            </div>
            <div class=""imageprestation>
                <h4>Rio De Janeiro, Brésil</h4>
                <a href="#"><img src="source/Brésil.jpg" alt=bresil width=400px height=300px></a>
            </div>
        </div>
    </section>
    
    <h2>Et tant à découvir....</h2>
    <section  id="prestation">

            <?php
            
                foreach($indexArray as $index){
                    
                    ?>
                    <div class=""imageprestation>
                <h4><?php echo $arrayVoyages[$index]["titre"] ?></h4>
                <a href="<?php echo "http://localhost/JetLag/index.php?profilId=".$arrayVoyages[$index]["id"] ?>"><img src="<?php echo "source/". $arrayVoyages[$index]["uri_image"] ?>" alt=cullera width=400px height=300px></a>
            </div>
                    
                    <?php

                    
                }
            
            ?>
        </section>
            
        
    
    <?php
}